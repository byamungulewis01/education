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
                                                    @php
                                                        $type = is_numeric($item->answers) ? 'radio' : 'checkbox';
                                                    @endphp
                                                </h5>
                                                <div class="demo-inline-spacing mt-3">
                                                    <div class="list-group">
                                                        @php
                                                            $choices = explode('//next//', $item->choices);
                                                        @endphp
                                                        @foreach ($choices as $key => $choice)
                                                            <label class="list-group-item cursor-pointer">
                                                                <input class="form-check-input me-1"
                                                                    type="{{ $type }}"
                                                                    name="q-{{ $item->id }}[]"
                                                                    value="{{ $key + 1 }}">
                                                                {{ $choice }}
                                                            </label>
                                                        @endforeach
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
                                    @foreach (json_decode($exam_set->questions_answers, true) as $quest => $value)
                                        @php
                                            $q = explode('-', $quest)[1];
                                            $question = \App\Models\Question::findorfail($q);
                                            $ex_marks = $value == $question->answers ? $question->marks : 0;
                                        @endphp
                                        <div class="col-lg-12 mb-5">
                                            <h5 class="text-light fw-medium">Q.{{ $loop->iteration }} )
                                                {{ $question->title }}
                                                <span class="float-end">Marks : {{ $ex_marks }}/<span
                                                        class="text-danger">{{ $question->marks }}</span></span>
                                            </h5>
                                            <div class="demo-inline-spacing mt-3">
                                                <div class="list-group">
                                                    @php
                                                        $choices = explode('//next//', $question->choices);
                                                    @endphp
                                                    @foreach ($choices as $key => $choice)
                                                        <label class="list-group-item cursor-pointer">
                                                            {{ $key + 1 }}) {{ $choice }}
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <h6 class="text-danger mt-3">Correct Answer :
                                                <span class="text-muted">{{ $value }}</span>
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
