@extends('layouts.front')
@section('title', 'Training Exam')
@section('body')
    <!--SECTION START-->
    <section>
        @include('student.navbar')
        <div class="stu-db">
            <div class="container pg-inn">
                @include('student.sidebar')

                <div class="col-md-9">
                    <div class="udb">
                        <div class="udb-sec udb-cour">
                            @if (!$exam_set)
                                <h4>{{ \App\Models\Training::findorfail($id)->title }}'s Exam</h4>

                                <form action="{{ route('student.trainingExam', $id) }}" method="post">
                                    @csrf
                                    @foreach ($questions as $item)
                                        <div>
                                            <h5>Q. {{ $loop->iteration }} )
                                                {{ $item->title }} <strong style="color: #f82424">({{ $item->marks }}
                                                    Marks)</strong></h5> <br>
                                            @php
                                                $type = is_numeric($item->answers) ? 'radio' : 'checkbox';
                                                $choices = explode('//next//', $item->choices);
                                            @endphp

                                            <table class="table table-hover">
                                                <tbody>
                                                    @foreach ($choices as $key => $choice)
                                                        <tr>
                                                            <td style="width: 30px;">
                                                                <input class="filled-in" type="{{ $type }}"
                                                                    name="q-{{ $item->id }}[]"
                                                                    value="{{ $key + 1 }}"
                                                                    id="filled{{ $item->id }}{{ $key }}">
                                                                <label
                                                                    for="filled{{ $item->id }}{{ $key }}"></label>
                                                            </td>
                                                            <td>
                                                                <span id="filled{{ $item->id }}{{ $key }}">
                                                                    {{ $choice }}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>

                                        </div>
                                    @endforeach
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            @else
                                @if (session()->has('exam_success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('exam_success') }}
                                    </div>
                                @endif
                                @if (session()->has('exam_fail'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('exam_fail') }}
                                    </div>
                                @endif
                                <h4>Exam Results <strong style="color: #f82424">(
                                        {{ $exam_set->total_marks }}</strong>/{{ \App\Models\Question::where('training_id',$exam_set->training_id)->sum('marks')}}
                                    Marks)
                                    @if ($exam_set->status == 'success')
                                        <a href="{{ route('student.certificate',auth()->guard('student')->user()->id) }}" class="btn btn-primary btn-sm" style="float: right; margin-top: -2%"><i
                                                class="fa fa-download" aria-hidden="true"></i> Get Certficate</a>
                                    @else
                                        <form action="{{ route('student.trainingRetake', $id) }}" method="post">
                                            @csrf
                                            <button class="btn btn-danger btn-sm" style="float: right; margin-top: -5%">
                                                Retake</button>
                                        </form>
                                    @endif
                                </h4> <br>
                                @foreach (json_decode($exam_set->questions_answers, true) as $quest => $value)
                                    @php
                                        $q = explode('-', $quest)[1];
                                        $question = \App\Models\Question::findorfail($q);
                                        $ex_marks = $value == $question->answers ? $question->marks : 0;
                                    @endphp
                                    <div>
                                        <h5>Q. {{ $loop->iteration }} )
                                            {{ $question->title }} <strong style="color: #f82424">(
                                                {{ $ex_marks }}</strong>/{{ $question->marks }}
                                            Marks)</h5> <br>
                                        @php
                                            $choices = explode('//next//', $question->choices);
                                        @endphp

                                        <table class="table table-hover">
                                            <tbody>
                                                @foreach ($choices as $key => $choice)
                                                    <tr>
                                                        <td style="width: 30px;">
                                                            {{ $key + 1 }})
                                                        </td>
                                                        <td>
                                                            <span>
                                                                {{ $choice }}
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>

                                        <h6 class="text-danger mt-3">Correct Answer :
                                            <span class="text-muted"> {{ $value }}</span>
                                        </h6>

                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection
