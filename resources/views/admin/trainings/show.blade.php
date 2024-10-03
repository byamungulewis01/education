@extends('layouts.app')
@section('title', 'Show')
@section('css')

@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row mb-3">
            <!-- Invoice -->
            <div class="col-xl-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="fw-semibold mb-2">{{ $training->title }} </h4>
                        <p>{{ $training->description }}</p>

                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="card mb-4 h-100">
                    <div class="card-header">
                        <h4 class="card-title mb-0">List of modules
                            <a class="btn btn-sm btn-dark text-white pull-left float-end" data-bs-toggle="modal"
                                data-bs-target="#addModal">
                                <i class="ti ti-plus ti-xs"></i>
                                <span class="d-none d-sm-inline-block">Module</span></a>
                        </h4>
                        <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <div class="text-center mb-2">
                                            <h3>New Module</h3>
                                        </div>
                                        <form method="POST" class="row g-2"
                                            action="{{ route('admin.module.store', $training->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-12">
                                                <label>Name</label>
                                                <input name="name" value="{{ old('name') }}" type="text"
                                                    class="form-control" placeholder="Title">
                                            </div>
                                            <div class="col-12">
                                                <label>Component <span class="text-danger">Only PDF
                                                        Required</span></label>
                                                <input name="file" required accept=".pdf" type="file"
                                                    class="form-control">
                                            </div>
                                            <div class="col-12">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea id="description" name="description" rows="3" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
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
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">File</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($modules as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ Illuminate\Support\Str::limit(strip_tags($item->description), 40) }}</td>
                                            <td><a class="text-info" target="blank"
                                                    href="{{ asset('files/components/' . $item->fileUrl) }}">
                                                    <i class="fas fa-download mr-0"></i></a>
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
                                                                    <h3>Edit Module</h3>
                                                                </div>
                                                                <form method="POST" class="row g-2"
                                                                    action="{{ route('admin.module.update', $item->id) }}"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="col-12">
                                                                        <label>Name</label>
                                                                        <input name="name" type="text"
                                                                            class="form-control"
                                                                            value="{{ $item->name }}">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label>File <span class="text-danger">Only PDF
                                                                                Required</span></label>
                                                                        <input name="file" accept=".pdf" type="file"
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="description"
                                                                            class="form-label">Description</label>
                                                                        <textarea id="description" name="description" rows="3" class="form-control" placeholder="Description">{{ $item->description }}</textarea>
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
                                                <form action="{{ route('admin.module.destroy', $item->id) }}"
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
                                            <label>Chooses</label>
                                            <table id="item_table" style="width: 95%">
                                                <tr>
                                                    <td>
                                                        <div class="row mb-2">
                                                            <div class="col-1">
                                                                <input type="checkbox" value="1" name="answers[1]"
                                                                    class="form-check-input"
                                                                    style="width: 31px; height: 31px;">
                                                            </div>
                                                            <div class="col-10">
                                                                <input name="choices[1]" type="text" required
                                                                    class="form-control" placeholder="Choice 1">
                                                            </div>
                                                            <div class="col-1">
                                                                <button type="button" class="btn btn-primary add"><i
                                                                        class="ti ti-plus ti-xs"></i></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="marks" class="form-label">Exam Marks</label>
                                                    <input name="marks" type="number" required class="form-control"
                                                        placeholder="Marks">
                                                </div>

                                                <div class="col-4">
                                                    <br>
                                                    <button type="submit"
                                                        class="btn btn-primary me-sm-3 me-1">Submit</button>

                                                </div>
                                            </div>
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
                            <div class="col-12 mb-3">
                                <div class="card h-100">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-title m-0 me-2">
                                            <h5 class="m-0 me-2">{{ ($questions->currentPage() - 1) * $questions->perPage() + $loop->iteration }}) {{ $item->title }}</h5>
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

                                    </div>
                                    <div class="card-body">
                                        <ul class="p-0 m-0">
                                            @php
                                                $choices = explode('//next//', $item->choices);
                                            @endphp
                                            @foreach ($choices as $key => $choice)
                                                <li class="d-flex mb-2">
                                                    <strong>{{ $key + 1 }} ) &nbsp;</strong><span class="text-muted">
                                                        {{ $choice }}</span>
                                                </li>
                                            @endforeach



                                        </ul>
                                        <h6 class="text-danger">Answer :<strong> {{ $item->answers }} </strong></h6>
                                        <h6 class="text-info">Total Marks :<span class="text-muted"> {{ $item->marks }}
                                            </span>
                                        </h6>

                                    </div>

                                </div>
                            </div>


                            <div class="modal fade" id="editQuestionModal{{ $item->id }}" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered1 modal-simple modal-add-new-cc">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <div class="text-center mb-2">
                                                <h3>Edit Question</h3>
                                            </div>
                                            <form method="POST" class="row g-2"
                                                action="{{ route('admin.training.update_question', $item->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <div class="col-12 mb-2">
                                                    <label>Question </label>
                                                    <input name="title" type="text" required class="form-control"
                                                        value="{{ $item->title }}">
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <label>Chooses</label>
                                                    <table class="item_table1" style="width: 95%">
                                                        @php
                                                            $answer = explode(',', $item->answers);
                                                        @endphp
                                                        @foreach ($choices as $key => $choice)
                                                            <tr>
                                                                <td>
                                                                    <div class="row mb-2">
                                                                        <div class="col-1">
                                                                            <input type="checkbox"
                                                                                value="{{ $key + 1 }}"
                                                                                name="answers[{{ $key + 1 }}]"
                                                                                class="form-check-input"
                                                                                style="width: 31px; height: 31px;"
                                                                                @if (in_array($key + 1, $answer)) checked @endif>
                                                                        </div>
                                                                        <div class="col-10">
                                                                            <input name="choices[{{ $key + 1 }}]"
                                                                                type="text" required
                                                                                class="form-control"
                                                                                value="{{ $choice }}">
                                                                        </div>
                                                                        <div class="col-1">
                                                                            @if ($key == 0)
                                                                                <button type="button"
                                                                                    class="btn btn-primary add1"><i
                                                                                        class="ti ti-plus ti-xs"></i></button>
                                                                            @else
                                                                                <button class="btn btn-danger remove1"><i
                                                                                        class="ti ti-minus"></i></button>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                    </table>
                                                </div>

                                                <div class="col-12 mt-2">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label for="marks" class="form-label">Exam Marks</label>
                                                            <input name="marks" type="number" required
                                                                value="{{ $item->marks }}" class="form-control"
                                                                placeholder="Marks">
                                                        </div>
                                            
                                                        <div class="col-4">
                                                            <br>
                                                            <button type="submit"
                                                                class="btn btn-primary me-sm-3 me-1">Save Changes</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $questions->links('vendor.pagination.custom') }}
                </div>
            </div>

        </div>


    </div>

@endsection
@section('js')
    <script>
        $(document).ready(function() {

            $(document).on('click', '.add', function() {
                var html = '';
                var number_of_rows = $('#item_table tr').length + 1;

                html +=
                    `<tr><td><div class="row mb-3">
                    <div class="col-1"><input type="checkbox" value="${number_of_rows}" name="answers[${number_of_rows}]" class="form-check-input" style="width: 31px; height: 31px;"></div>
                    <div class="col-10"><input name="choices[${number_of_rows}]" type="text" required class="form-control" placeholder="Choice ${number_of_rows}"></div>
                    <div class="col-1"> <button class="btn btn-danger remove"><i class="ti ti-minus"></i></button></div></div></td></tr>`;
                $('#item_table').append(html);
            });

            $(document).on('click', '.remove', function() {
                $(this).closest('tr').remove();
            });

        });
    </script>
    <script>
        $(document).ready(function() {

            $(document).on('click', '.add1', function() {
                var html = '';
                var number_of_rows = $('.item_table1 tr').length + 1;

                html +=
                    `<tr><td><div class="row mb-3">
                    <div class="col-1"><input type="checkbox" value="${number_of_rows}" name="answers[${number_of_rows}]" class="form-check-input" style="width: 31px; height: 31px;"></div>
                    <div class="col-10"><input name="choices[${number_of_rows}]" type="text" required class="form-control" placeholder="Choice ${number_of_rows}"></div>
                    <div class="col-1"> <button class="btn btn-danger remove1"><i class="ti ti-minus"></i></button></div></div></td></tr>`;
                $('.item_table1').append(html);
            });

            $(document).on('click', '.remove1', function() {
                $(this).closest('tr').remove();
            });

        });
    </script>
@endsection
