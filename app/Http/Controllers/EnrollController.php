<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;

class EnrollController extends Controller
{
    //free_course
    public function free_course($id)
    {
        $enroll = Enroll::where('student_id', auth()->guard('student')->user()->id)
            ->where('course_id', $id)->first();
        if ($enroll) {
            return back()->with('warning', 'Arleady Course Enrolled');
        }

        Enroll::create([
            'student_id' => auth()->guard('student')->user()->id,
            'course_id' => $id,
        ]);
        return to_route('student.courses')->with('success', 'Course Enrolled Successfully');
    }
    public function paid_course($id)
    {
        Stripe::setApiKey(config('stripe.sk'));

        $price = Course::findorfail($id)->price . '00';
        $student = auth()->guard('student')->user()->fname . ' ' . auth()->guard('student')->user()->lname;

        $session = Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $student,
                        ],
                        'unit_amount'  => $price,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('student.courses'),
            'cancel_url'  => route('course', encrypt($id)),
        ]);

        Enroll::create([
            'student_id' => auth()->guard('student')->user()->id,
            'course_id' => $id,
        ]);

        return redirect()->away($session->url);
    }
}
