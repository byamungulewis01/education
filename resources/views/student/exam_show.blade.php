@extends('layouts.student')
@section('title', 'Training Exam')
@section('body')
    <div class="container">
        <!-- Widget Filter Start -->
        @if (!$exam_set)
            <div class="card mb-3 p-4 col-lg-9 col-md-12">
                <div class="card-header">
                    <h4>{{ \App\Models\Training::findorfail(decrypt($id))->title }}'s Exam</h4>
                </div>
                <form id="exam-form" method="POST" action="{{ route('student.trainingExam', $id) }}">
                    @csrf
                    <div class="card-body">

                        <div id="questions-container">
                            @foreach ($questions as $index => $item)
                                <div class="widget-filter__wrapper question mb-3" data-index="{{ $index }}"
                                    style="display: none;">
                                    <h4 class="quetion-title">Q. {{ $loop->iteration }} )
                                        {{ $item['title'] }} <small style="color: #b83838ad">({{ $item['marks'] }}
                                            Marks)</small></h4>

                                    <ul class="widget-filter__list mt-2">

                                        @foreach ($item['choices'] as $key => $choice)
                                            <li>
                                                <div class="widget-filter__item form-check">
                                                    <input type="{{ $item['type'] }}" name="q-{{ $item['id'] }}[]"
                                                        value="{{ $key + 1 }}"
                                                        id="filled{{ $item['id'] }}{{ $key }}">
                                                    <label
                                                        for="filled{{ $item['id'] }}{{ $key }}">{{ $choice }}</label>
                                                </div>

                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div id="navigation">
                        @foreach ($questions as $index => $question)
                            <button type="button" class="btn2 question-nav"
                                data-index="{{ $index }}">Q.{{ $index + 1 }}</button>
                        @endforeach

                        &nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn2 btn-dark">Submit Answers</button>
                    </div>
                </form>

            </div>
        @else
            <div class="card mb-3 p-4 col-lg-9 col-md-12">
                <div class="card-header">
                    <h4>Exam Results <small style="color: #f82424; font-weight:300">(
                            {{ $exam_set->total_marks }}/<span class="text-muted">{{ \App\Models\Question::where('training_id', $exam_set->training_id)->sum('marks') }} Marks</span>
                        </small>)
                        @if ($exam_set->status == 'success')
                            <a href="{{ route('student.certificate', auth()->guard('student')->user()->id) }}"
                                class="btn2 btn-primary" style="float: right;"><i
                                    class="fa fa-download" aria-hidden="true"></i> Get Certficate</a>
                        @else
                            <form action="{{ route('student.trainingRetake', $id) }}" method="post">
                                @csrf
                                <button class="btn2 btn-danger btn-sm" style="float: right; margin-top: -3%">
                                    Retake</button>
                            </form>
                        @endif
                    </h4>
                </div>
                <div class="card-body">
                    @foreach (json_decode($exam_set->questions_answers, true) as $quest => $value)
                        @php
                            $q = explode('-', $quest)[1];
                            $question = \App\Models\Question::findorfail($q);
                            $ex_marks = $value == $question->answers ? $question->marks : 0;
                        @endphp
                        <div class="mb-3">
                            <h6>Q. {{ $loop->iteration }} )
                                {{ $question->title }} <small style="color: #f82424">(
                                    {{ $ex_marks }}</small>/{{ $question->marks }}
                                Marks)</h6>
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

                            <h6 class="text-danger mt-1">Correct Answer :
                                <span class="text-muted"> {{ $question->answers }}</span>
                            </h6>

                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- <div class="card mt-5">
            <div class="card-body">
                <div class="col-md-9">
                    <div class="udb">
                        <div class="udb-sec udb-cour">
                            @if (!$exam_set)
                                <h4>{{ \App\Models\Training::findorfail(decrypt($id))->title }}'s Exam</h4>

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
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


    </div>
@endsection
@section('css')
    <style>
        /* Navigation button styles */
        .question-nav {
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            cursor: pointer;
            color: #333;
        }

        .question-nav.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .question-nav.completed {
            background-color: #28a745;
            /* Success color for completed questions */
            color: white;
            border-color: #28a745;
        }

        /* Label styles for selected choices */
        .form-check label.selected {
            color: #28a745;
            /* Success color */
        }

        /* Style for the default state of labels */
        .form-check label {
            color: #333;
        }

        /* Optionally, highlight the input itself */
        .form-check input[type="radio"]:checked+label,
        .form-check input[type="checkbox"]:checked+label {
            color: #28a745;
            /* Success color */
        }
    </style>

@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session()->has('exam_success'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "Exam Completed and You Have Success.",
                icon: "success"
            });
        </script>
    @endif
    @if (session()->has('exam_fail'))
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "You have failed the exam Please Try Again",
            });
        </script>
    @endif
    <script>
        $(document).ready(function() {
            const $questions = $('.question');
            const $navButtons = $('.question-nav');
            const totalQuestions = $questions.length;
            let currentIndex = 0;

            function checkCompletion(index) {
                const $question = $questions.eq(index);
                const $inputs = $question.find('input');
                const allChecked = $inputs.length === $inputs.filter(':checked').length;

                if (allChecked) {
                    $navButtons.eq(index).addClass('completed');
                } else {
                    $navButtons.eq(index).removeClass('completed');
                }
            }

            function showQuestion(index) {
                $questions.hide();
                $questions.eq(index).show();
                $navButtons.removeClass('active');
                $navButtons.eq(index).addClass('active');

                // Highlight selected choices
                $questions.eq(index).find('input').each(function() {
                    const $input = $(this);
                    if ($input.prop('checked')) {
                        $input.siblings('label').addClass('selected');
                    } else {
                        $input.siblings('label').removeClass('selected');
                    }
                });
            }

            // Initialize first question
            showQuestion(currentIndex);

            // Handle navigation button clicks
            $navButtons.click(function() {
                const index = $(this).data('index');
                currentIndex = index;
                showQuestion(index);
            });

            // Handle changes in radio inputs and checkboxes
            $('input[type="radio"], input[type="checkbox"]').change(function() {
                const $question = $(this).closest('.question');
                const index = $question.data('index');
                checkCompletion(index);
                $(this).siblings('label').toggleClass('selected', $(this).prop('checked'));
            });
        });
    </script>
@endsection
