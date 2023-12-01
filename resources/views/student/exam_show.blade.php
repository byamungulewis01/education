@extends('layouts.front')
@section('title', 'Training Exam')
@section('body')
    <!-- Fun facts: Start -->
    <section class="section-py landing-fun-facts mt-3">
        <div class="container">
            <div class="card">
                <div class="row">
                    @if (!$exam_set)
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Exam Questions</h4>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <form action="{{ route('student.trainingExam', $id) }}" method="post">
                                        @csrf
                                        @foreach ($questions as $item)
                                            <div class="col-lg-12 mb-5">
                                                <h5 class="text-light fw-medium">Q. {{ $loop->iteration }} )
                                                    {{ $item->title }}
                                                    <span class="float-end">Marks : <span
                                                            class="text-danger">{{ $item->marks }}</span></span>
                                                </h5>
                                                <div class="demo-inline-spacing mt-3">
                                                    <div class="list-group">
                                                        <label class="list-group-item cursor-pointer">
                                                            <input class="form-check-input me-1" required type="radio"
                                                                name="question[{{ $item->id }}]"
                                                                value="{{ $item->id }}-choice_one">
                                                            {{ $item->choice_one }}
                                                        </label>
                                                        <label class="list-group-item cursor-pointer">
                                                            <input class="form-check-input me-1" required type="radio"
                                                                name="question[{{ $item->id }}]"
                                                                value="{{ $item->id }}-choice_two">
                                                            {{ $item->choice_two }}
                                                        </label>
                                                        @if ($item->choice_three)
                                                            <label class="list-group-item cursor-pointer">
                                                                <input class="form-check-input me-1" required type="radio"
                                                                    name="question[{{ $item->id }}]"
                                                                    value="{{ $item->id }}-choice_three">
                                                                {{ $item->choice_three }}
                                                            </label>
                                                        @endif
                                                        @if ($item->choice_four)
                                                            <label class="list-group-item cursor-pointer">
                                                                <input class="form-check-input me-1" required type="radio"
                                                                    name="question[{{ $item->id }}]"
                                                                    value="{{ $item->id }}-choice_four">
                                                                {{ $item->choice_four }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="col-lg-12">

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>

                                    </form>

                                </div>

                            </div>
                        </div>
                    @else
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Exam Results</h4>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach (explode(',', $exam_set->questions_answers) as $value)
                                        @php
                                            $q = explode('-', $value)[0];
                                            $c = explode('-', $value)[1];
                                            $question = \App\Models\Question::findorfail($q);
                                            $ex_marks = $c == $question->answer ? $question->marks : 0;
                                        @endphp
                                        <div class="col-lg-12 mb-5">
                                            <h5 class="text-light fw-medium">Q. {{ $loop->iteration }} )
                                                {{ $question->title }}
                                                <span class="float-end">Marks : {{ $ex_marks }}/<span
                                                        class="text-danger">{{ $question->marks }}</span></span>
                                            </h5>
                                            <div class="demo-inline-spacing mt-3">
                                                <div class="list-group">
                                                    <label class="list-group-item cursor-pointer">
                                                        <input class="form-check-input me-1"
                                                            {{ $c == 'choice_one' ? 'checked' : '' }} type="radio">
                                                        A) {{ $question->choice_one }}
                                                    </label>
                                                    <label class="list-group-item cursor-pointer">
                                                        <input class="form-check-input me-1"
                                                            {{ $c == 'choice_two' ? 'checked' : '' }} type="radio">
                                                        B) {{ $question->choice_two }}
                                                    </label>
                                                    @if ($question->choice_three)
                                                        <label class="list-group-item cursor-pointer">
                                                            <input class="form-check-input me-1"
                                                                {{ $c == 'choice_three' ? 'checked' : '' }} type="radio">
                                                            C) {{ $question->choice_three }}
                                                        </label>
                                                    @endif
                                                    @if ($question->choice_four)
                                                        <label class="list-group-item cursor-pointer">
                                                            <input class="form-check-input me-1"
                                                                {{ $c == 'choice_four' ? 'checked' : '' }} type="radio">
                                                            D) {{ $question->choice_four }}
                                                        </label>
                                                    @endif
                                                </div>
                                            </div>
                                            <h6 class="text-danger mt-3">Correct Answer :
                                                @if ($question->answer == 'choice_one')
                                                    <span class="text-muted"><strong>A) </strong>
                                                        {{ $question->choice_one }}</span>
                                                @elseif($question->answer == 'choice_two')
                                                    <span class="text-muted"><strong>B) </strong>
                                                        {{ $question->choice_two }}</span>
                                                @elseif($question->answer == 'choice_three')
                                                    <span class="text-muted"><strong>C) </strong>
                                                        {{ $question->choice_three }}</span>
                                                @else
                                                    <span class="text-muted"><strong>D) </strong>
                                                        {{ $question->choice_four }}</span>
                                                @endif
                                            </h6>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif

                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- Fun facts: End -->
@endsection
