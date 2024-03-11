<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Enroll;
use App\Models\ExamSetting;
use App\Models\Module;
use App\Models\Question;
use App\Models\Student;
use App\Models\Training;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use KingFlamez\Rave\Facades\Rave as Flutterwave;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StudentController extends Controller
{
    //index

    public function dashboard()
    {
        $training = Enroll::where('student_id', auth()->guard('student')->user()->id)->latest()->first();
        $modules = Module::where('training_id', $training->training_id)->orderByDesc('id')->get();

        return view('student.dashboard', compact('training', 'modules'));
    }

    public function profile()
    {
        return view('student.profile');
    }
    public function changeProfile(Request $request)
    {
        $id = auth()->guard('student')->user()->id;
        $request->validate([
            'fname' => 'required|string|min:2',
            'lname' => 'required|string|min:2',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|numeric|unique:users,phone,' . $id,
            'image_file' => 'nullable|mimes:png,jpg,jpeg',
        ]);
        if ($request->hasFile('image_file')) {
            $image = $request->file('image_file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/students'), $imageName);
            $request->merge(['imageName' => $imageName]);
        }

        try {
            Student::findorfail($id)->update($request->all());
            return back()->with('message', 'Profile Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function chat($id)
    {
        $instractor = Training::find($id)->user->name;
        $chats = Chat::where('training_id', $id)->get();
        return view('student.chat', compact('instractor', 'id', 'chats'));
    }
    public function storeChat(Request $request, $id)
    {
        Chat::create([
            'training_id' => $id,
            'student_id' => auth()->guard('student')->user()->id,
            'user_id' => Training::find($id)->user_id,
            'message' => $request->message,
            'sender_by' => 'student',
        ]);
        return back();
    }
    public function trainings()
    {

        $trainings = Enroll::where('student_id', auth()->guard('student')->user()->id)->get();
        return view('student.trainings', compact('trainings'));
    }
    public function marking_scheme($id)
    {

        $exam_set = ExamSetting::withTrashed()->find($id);
        return view('student.marking_scheme', compact('exam_set'));
    }
    public function notifications()
    {
        $trainings = Enroll::where('student_id', auth()->guard('student')->user()->id)->get();
        return view('student.notification', compact('trainings'));
    }
    public function training_show($id)
    {
        $training = Enroll::where('student_id', auth()->guard('student')->user()->id)->where('training_id', $id)->latest()->first();
        $modules = Module::where('training_id', $training->training_id)->orderByDesc('id')->get();

        return view('student.training_show', compact('training', 'modules'));
    }
    public function trainingShow($id)
    {
        $training = Training::find($id);
        // $components = TrainingComponent::where('training_id', $id)->orderByDesc('id')->get();
        return view('student.show', compact('training'));
    }
    public function training_exam_show($id)
    {
        $exam_set = ExamSetting::where('training_id', $id)->where('student_id', auth()->guard('student')->user()->id)->first();
        $questions = Question::where('training_id', $id)->get();
        // dd(json_decode($exam_set->questions_answers), true);
        return view('student.exam_show', compact('id', 'exam_set', 'questions'));
    }
    public function trainingExam(Request $request, $id)
    {
        $checkboxData = $request->all(); // Get all data from the request

        $formattedData = [];
        $marks = 0;

        foreach ($checkboxData as $key => $values) {
            // Check if the key starts with 'q-' and has values
            if (strpos($key, 'q-') === 0 && is_array($values)) {
                $questionId = intval(str_replace('q-', '', $key));
                $question = Question::findorfail($questionId);

                $c = implode(',', $values);
                $ex_marks = ($c == $question->answers) ? $question->marks : 0;
                $marks += $ex_marks;
                $formattedData[$key] = implode(',', $values);
            }
        }

        $total_marks = (int) Question::where('training_id', $id)->sum('marks');
        $status = ($marks >= ($total_marks * 0.5)) ? 'success' : 'failure';

        $exam = ExamSetting::create([
            'training_id' => $id,
            'student_id' => auth()->guard('student')->user()->id,
            'questions_answers' => json_encode($formattedData),
            'total_marks' => $marks,
            'status' => $status,
        ]);

        if ($exam->status == 'success') {

            return back()->with('exam_success', 'Exam Completed and You Have Success.');
        } else {

            return back()->with('exam_fail', 'You have failed the exam Please Try Again');
        }
    }
    public function bookTraining($id)
    {

        $check = Enroll::where('student_id', auth()->guard('student')->user()->id)
            ->where('training_id', $id)->first();
        if ($check) {
            return back()->with('warning', 'Arleady Training Enrolled');
        }

        Enroll::create([
            'student_id' => auth()->guard('student')->user()->id,
            'training_id' => $id,
        ]);
        return back()->with('message', 'Request Sent Successfully');
    }
    public function trainingRetake(Request $request, $id)
    {
        //This generates a payment reference
        $reference = Flutterwave::generateReference();

        // Enter the details of the payment
        $data = [
            'payment_options' => 'card,banktransfer,mobilemoney',
            'type' => 'mobile_money_rwanda',
            'amount' => 500,
            'email' => auth()->guard('student')->user()->email,
            'tx_ref' => $reference,
            'currency' => "RWF",
            'redirect_url' => route('student.trainingRetakeCallback', $id),
            'customer' => [
                'email' => auth()->guard('student')->user()->email,
                "phone_number" => auth()->guard('student')->user()->phone,
                "name" => auth()->guard('student')->user()->fname . " " . auth()->guard('student')->user()->lname,
            ],

            "customizations" => [
                "title" => 'Boost Consultancy & Coaching Hub',
                "description" => "Boost Consultancy & Coaching Hub Pay Retake Exam",
            ],
        ];

        $payment = Flutterwave::initializePayment($data);

        if ($payment['status'] !== 'success') {
            // notify something went wrong
            return back()->with('warning', 'something went wrong try again');
        }

        return redirect($payment['data']['link']);
    }
    public function trainingRetakeCallback(Request $request, $id)
    {
        $status = request()->status;

        //if payment is successful
        if ($status == 'successful') {

            $transactionID = Flutterwave::getTransactionIDFromCallback();
            $data = Flutterwave::verifyTransaction($transactionID);
            // dd($data);
            ExamSetting::where('student_id', auth()->guard('student')->user()->id)
                ->where('training_id', $id)->latest()->first()->delete();
            return to_route('student.training_exam_show', $id)->with('message', 'Payment Done Continue With Exam');
        } elseif ($status == 'cancelled') {
            //Put desired action/code after transaction has been cancelled here
            return back()->with('warning', 'Transaction Cancelled');
        } else {
            //Put desired action/code after transaction has failed here
            return back()->with('warning', 'Transaction Failed or not paid');
        }
    }

    public function trainingPay(Request $request, $id)
    {
        //This generates a payment reference
        $reference = Flutterwave::generateReference();

        // Enter the details of the payment
        $data = [
            'payment_options' => 'card,banktransfer,mobilemoney',
            'type' => 'mobile_money_rwanda',
            'amount' => Training::find($id)->price,
            'email' => auth()->guard('student')->user()->email,
            'tx_ref' => $reference,
            'currency' => "RWF",
            'redirect_url' => route('student.trainingPayCallback', $id),
            'customer' => [
                'email' => auth()->guard('student')->user()->email,
                "phone_number" => auth()->guard('student')->user()->phone,
                "name" => auth()->guard('student')->user()->fname . " " . auth()->guard('student')->user()->lname,
            ],

            "customizations" => [
                "title" => 'Boost Consultancy & Coaching Hub',
                "description" => "Boost Consultancy & Coaching Hub Paying Training Services",
            ],
        ];

        $payment = Flutterwave::initializePayment($data);

        if ($payment['status'] !== 'success') {
            return back()->with('warning', 'something went wrong try again');
        }

        return redirect($payment['data']['link']);
    }
    public function trainingPayCallback(Request $request, $id)
    {
        $status = request()->status;

        //if payment is successful
        if ($status == 'successful') {

            $transactionID = Flutterwave::getTransactionIDFromCallback();
            $data = Flutterwave::verifyTransaction($transactionID);
            // dd($data);
            Enroll::where('student_id', auth()->guard('student')->user()->id)
                ->where('training_id', $id)->update(['is_payed' => true, 'payment_date' => now()]);
            return to_route('student.dashboard')->with('message', 'Payment Completed Successfully');
        } elseif ($status == 'cancelled') {
            //Put desired action/code after transaction has been cancelled here
            return back()->with('warning', 'Transaction Cancelled');
        } else {
            //Put desired action/code after transaction has failed here
            return back()->with('warning', 'Transaction Failed or not paid');
        }
    }
    public function admission($id)
    {

        // return view('student.admission');
        $student = Student::find($id);
        $training = Enroll::where('student_id', $id)->first()->training->title;
        // dd($student, $training);
        $pdf = Pdf::loadView('student.admission', compact('student', 'training'))->setPaper('a4', 'landscape');
        return $pdf->stream($student->regnumber . '.pdf');
    }
    public function certificate($id)
    {

        $student = Student::find($id);
        $training = Enroll::where('student_id', $id)->first();

        $qrCodeFilePath = $this->generateQrCodeAndSave($student->regnumber);

        // $qrCode = QrCode::size(300)->generate($student->regnumber);
        // $filePath = public_path('qrcodes/' . time() .'.png'); // Define the file path where you want to save the QR code
        // file_put_contents($filePath, $qrCode);

        // return view('student.certificate', compact('student', 'training', 'qrCodeFilePath'));
        // // dd($student, $training);
        $pdf = Pdf::loadView('student.certificate', compact('student', 'training', 'qrCodeFilePath'))->setPaper('a4', 'landscape');
        return $pdf->stream($student->regnumber . '.pdf');
    }
    public function certificate_by_year(Request $request, $id)
    {
        $year = $request->year;
        dd($year);
        $student = Student::find($id);
        $training = Enroll::where('student_id', $id)->where('training_id', $request->training_id)->first();

        $qrCodeFilePath = $this->generateQrCodeAndSave($student->regnumber);

        // return view('student.certificate', compact('student', 'training', 'qrCodeFilePath','year'));
        // // dd($student, $training);
        $pdf = Pdf::loadView('student.certificate', compact('student', 'training', 'qrCodeFilePath', 'year'))->setPaper('a4', 'landscape');
        return $pdf->stream($student->regnumber . '.pdf');
    }
    public function generateQrCodeAndSave($studentRegNumber)
    {
        // Generate the QR code
        $qrCode = QrCode::size(100)->generate($studentRegNumber);

        // Define the file path to save the QR code image
        $filePath = 'qrcodes/' . time() . '.png';

        // Save the QR code image to storage
        Storage::put($filePath, $qrCode);

        // Return the file path to the saved QR code image
        return $filePath;
    }
}
