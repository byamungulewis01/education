@extends('layouts.app')
@section('title', 'Marking Scheme')
@section('css')

@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row mb-3">
            <!-- Invoice -->
            <div class="col-xl-12">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="fw-semibold mb-2"><span class="text-danger">Training Name :
                            </span>{{ $exam_set->training->title }} </h4>
                        <p>{{ $exam_set->training->description }}</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body">
                        <h4>Exam Results <strong style="color: #f82424">(
                            {{ $exam_set->total_marks }}</strong>/{{ \App\Models\Question::where('training_id',$exam_set->training_id)->sum('marks')}}
                        Marks)

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

@endsection
@section('js')

@endsection
