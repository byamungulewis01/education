@extends('layouts.app')
@section('title', 'Show')
@section('css')

@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row mb-3">
            <!-- Invoice -->
            <div class="col-xl-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="fw-semibold mb-2">{{ $training->title }} </h4>
                        <p>{{ $training->description }}</p>

                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4 h-100">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Component
                            <a class="btn btn-sm btn-dark text-white pull-left float-end" data-bs-toggle="modal"
                                data-bs-target="#addModal">
                                <i class="ti ti-plus ti-xs"></i>
                                <span class="d-none d-sm-inline-block">Training</span></a>
                        </h4>
                        <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <div class="text-center mb-2">
                                            <h3>Add New Training</h3>
                                        </div>
                                        <form method="POST" class="row g-2"
                                            action="{{ route('admin.training.store_component', $training->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-12">
                                                <label>Title</label>
                                                <input name="title" type="text" class="form-control"
                                                    placeholder="Title">
                                            </div>
                                            <div class="col-12">
                                                <label>File <span class="text-danger">Only PDF
                                                        Required</span></label>
                                                <input name="file" required accept=".pdf" type="file"
                                                    class="form-control">
                                            </div>

                                            <div class="col-12 mt-4 text-center">
                                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                                <button type="reset" class="btn btn-label-secondary"
                                                    data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">File</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($components as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td><a class="text-info" target="blank"
                                                    href="{{ asset('files/components/' . $item->fileUrl) }}">Component</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#editModel{{ $item->id }}"><i
                                                        class="fas fa-edit mr-0"></i></button>
                                                <div class="modal fade" id="editModel{{ $item->id }}" tabindex="-1"
                                                    aria-hidden="true">
                                                    <div
                                                        class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                                <div class="text-center mb-2">
                                                                    <h3>Edit Component</h3>
                                                                </div>
                                                                <form method="POST" class="row g-2"
                                                                    action="{{ route('admin.training.update_component', $item->id) }}"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="col-12">
                                                                        <label>Title</label>
                                                                        <input name="title" type="text"
                                                                            class="form-control"
                                                                            value="{{ $item->title }}">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label>File <span class="text-danger">Only PDF
                                                                                Required</span></label>
                                                                        <input name="file" accept=".pdf" type="file"
                                                                            class="form-control">
                                                                    </div>

                                                                    <div class="col-12 mt-4 text-center">
                                                                        <button type="submit"
                                                                            class="btn btn-primary me-sm-3 me-1">Save</button>
                                                                        <button type="reset"
                                                                            class="btn btn-label-secondary"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close">Cancel</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form action="{{ route('admin.training.destroy_component', $item->id) }}"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you Sure to Delete ?')"><i
                                                            class="fas fa-trash mr-0"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No data found</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Exam Questions
                        <a class="btn btn-sm btn-dark text-white pull-left float-end" data-bs-toggle="modal"
                            data-bs-target="#addQuestionModal">
                            <i class="ti ti-plus ti-xs"></i>
                            <span class="d-none d-sm-inline-block">New Question</span></a>
                        @if ($training->exam_status == 'active')
                            <form action="{{ route('admin.training.disactivate_exam', $training->id) }}" method="post"
                                class="d-inline">
                                @csrf
                                @method('PUT')
                                <button onclick="return confirm('Are you Sure to Disactive Exam ?')"
                                    class="btn btn-sm me-3 btn-danger text-white float-end">
                                    <span class="d-none d-sm-inline-block">Disactive Exam</span></button>
                            </form>
                        @else
                            <form action="{{ route('admin.training.activate_exam', $training->id) }}" method="post"
                                class="d-inline">
                                @csrf
                                @method('PUT')
                                <button onclick="return confirm('Are you Sure to Activate Exam ?')"
                                    class="btn btn-sm me-3 btn-primary text-white float-end">
                                    <span class="d-none d-sm-inline-block">Activate Exam</span></button>
                            </form>
                        @endif

                    </h4>
                    <div class="modal fade" id="addQuestionModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered1 modal-simple modal-add-new-cc">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="text-center mb-2">
                                        <h3>Add New Question</h3>
                                    </div>
                                    <form method="POST" class="row g-2"
                                        action="{{ route('admin.training.store_question', $training->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-12 mb-2">
                                            <label>Question</label>
                                            <input name="title" type="text" required class="form-control"
                                                placeholder="Title">
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label>Choice A</label>
                                            <input name="choice_one" type="text" required class="form-control"
                                                placeholder="Choice A">
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label>Choice B</label>
                                            <input name="choice_two" type="text" required class="form-control"
                                                placeholder="Choice B">
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label>Choice C</label>
                                            <input name="choice_three" type="text" class="form-control"
                                                placeholder="Choice C">
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label>Choice D</label>
                                            <input name="choice_four" type="text" class="form-control"
                                                placeholder="Choice D">
                                        </div>
                                        <div class="col-6">
                                            <label>Answer</label>
                                            <select name="answer" class="form-select" id="">
                                                <option value="choice_one">A</option>
                                                <option value="choice_two">B</option>
                                                <option value="choice_three">C</option>
                                                <option value="choice_four">D</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label>Total Marks</label>
                                            <input name="marks" placeholder="Total Marks" min="1"
                                                max="100" required type="number" class="form-control">
                                        </div>

                                        <div class="col-12 mt-4 text-center">
                                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                            <button type="reset" class="btn btn-label-secondary"
                                                data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($questions as $item)
                            <div class="col-md-6 col-xl-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-title m-0 me-2">
                                            <h5 class="m-0 me-2">{{ $item->title }}</h5>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="transactionID"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                                <button class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#editQuestionModal{{ $item->id }}">Edit</button>
                                                <form action="{{ route('admin.training.destroy_question', $item->id) }}"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item"
                                                        onclick="return confirm('Are you Sure to Delete ?')">Delete</button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="modal fade" id="editQuestionModal{{ $item->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-lg modal-dialog-centered1 modal-simple modal-add-new-cc">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                        <div class="text-center mb-2">
                                                            <h3>Edit Question</h3>
                                                        </div>
                                                        <form method="POST" class="row g-2"
                                                            action="{{ route('admin.training.update_question', $item->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="col-12 mb-2">
                                                                <label>Question</label>
                                                                <input name="title" type="text" required
                                                                    class="form-control" value="{{ $item->title }}">
                                                            </div>
                                                            <div class="col-12 mb-2">
                                                                <label>Choice A</label>
                                                                <input name="choice_one" type="text" required
                                                                    class="form-control" value="{{ $item->choice_one }}">
                                                            </div>
                                                            <div class="col-12 mb-2">
                                                                <label>Choice B</label>
                                                                <input name="choice_two" type="text" required
                                                                    class="form-control" value="{{ $item->choice_two }}">
                                                            </div>
                                                            <div class="col-12 mb-2">
                                                                <label>Choice C</label>
                                                                <input name="choice_three" type="text"
                                                                    class="form-control"
                                                                    value="{{ $item->choice_three }}">
                                                            </div>
                                                            <div class="col-12 mb-2">
                                                                <label>Choice D</label>
                                                                <input name="choice_four" type="text"
                                                                    class="form-control"
                                                                    value="{{ $item->choice_four }}">
                                                            </div>
                                                            <div class="col-6">
                                                                <label>Answer</label>
                                                                <select name="answer" class="form-select"
                                                                    id="">
                                                                    <option
                                                                        {{ $item->answer == 'choice_one' ? 'selected' : '' }}
                                                                        value="choice_one">A</option>
                                                                    <option
                                                                        {{ $item->answer == 'choice_two' ? 'selected' : '' }}
                                                                        value="choice_two">B</option>
                                                                    <option
                                                                        {{ $item->answer == 'choice_three' ? 'selected' : '' }}
                                                                        value="choice_three">C</option>
                                                                    <option
                                                                        {{ $item->answer == 'choice_four' ? 'selected' : '' }}
                                                                        value="choice_four">D</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6">
                                                                <label>Total Marks</label>
                                                                <input name="marks" value="{{ $item->marks }}"
                                                                    min="1" max="100" required type="number"
                                                                    class="form-control">
                                                            </div>

                                                            <div class="col-12 mt-4 text-center">
                                                                <button type="submit"
                                                                    class="btn btn-primary me-sm-3 me-1">Save</button>
                                                                <button type="reset" class="btn btn-label-secondary"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close">Cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="p-0 m-0">
                                            <li class="d-flex mb-2 pb-1 align-items-center">

                                                <strong>A)</strong><span class="text-muted">{{ $item->choice_one }}</span>
                                            </li>
                                            <li class="d-flex mb-2 pb-1 align-items-center">
                                                <strong>B) </strong><span
                                                    class="text-muted">{{ $item->choice_two }}</span>
                                            </li>
                                            @if ($item->choice_three)
                                                <li class="d-flex mb-2 pb-1 align-items-center">
                                                    <strong>C) </strong><span
                                                        class="text-muted">{{ $item->choice_three }}</span>
                                                </li>
                                            @endif
                                            @if ($item->choice_four)
                                                <li class="d-flex mb-2 pb-1 align-items-center">
                                                    <strong>D) </strong><span class="text-muted">{{ $item->choice_four }}
                                                    </span>
                                                </li>
                                            @endif

                                        </ul>
                                        <h6 class="text-danger">Answer :
                                            @if ($item->answer == 'choice_one')
                                                <span class="text-muted"><strong>A) </strong>
                                                    {{ $item->choice_one }}</span>
                                            @elseif($item->answer == 'choice_two')
                                                <span class="text-muted"><strong>B) </strong>
                                                    {{ $item->choice_two }}</span>
                                            @elseif($item->answer == 'choice_three')
                                                <span class="text-muted"><strong>C) </strong>
                                                    {{ $item->choice_three }}</span>
                                            @else
                                                <span class="text-muted"><strong>D) </strong>
                                                    {{ $item->choice_four }}</span>
                                            @endif
                                        </h6>
                                        <h6 class="text-info">Total Marks :<span class="text-muted"> {{ $item->marks }}
                                            </span>
                                        </h6>

                                    </div>
                                </div>
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
