@extends('layouts.front')
@section('title', 'Marking Scheme')
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

                            <h4>Exam Results <strong style="color: #f82424">(
                                    {{ $exam_set->total_marks }}</strong>/{{ \App\Models\Question::where('training_id', $exam_set->training_id)->sum('marks') }}
                                Marks)
                                @if ($exam_set->status == 'success')
                                    <a href="{{ route('student.certificate', auth()->guard('student')->user()->id) }}"
                                        class="btn btn-primary btn-sm" style="float: right; margin-top: -2%"><i
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection
