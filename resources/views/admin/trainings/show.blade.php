@extends('layouts.app')
@section('title', 'Show')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
@endsection
@section('body')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="ed_detail_wrap">
                            <div class="crs_cates cl_1"><span>{{ $training->category->title }}</span></div>
                            <div class="ed_header_caption">
                                <h2 class="ed_title">{{ $training->title }}</h2>
                                {{-- <ul>
                                    <li><i class="ti-calendar"></i>10 - 20 weeks</li>
                                    <li><i class="ti-control-forward"></i>102 Lectures</li>
                                    <li><i class="ti-user"></i>502 Student Enrolled</li>
                                </ul> --}}
                            </div>
                            <div class="ed_header_short">
                                <p>{{ $training->description }}</p>
                            </div>

                            {{-- <div class="ed_rate_info">
                                <div class="star_info">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review_counter">
                                    <strong class="high">4.7</strong> 3572 Reviews
                                </div>
                            </div> --}}

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="ed_detail_wrap">

                            <div class="ed_header_caption">
                                <h4 class="ed_title mb-4">Trainig Components
                                </h4>
                                <button class="btn btn-info" data-toggle="modal" data-target="#addModel"><i
                                        class="fas fa-plus-circle mr-1"></i>Add New</button>
                                <div class="modal" id="addModel" tabindex="-1" role="dialog"
                                    aria-labelledby="catModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add Component</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="forms_block" method="post"
                                                    action="{{ route('admin.training.store_component', $training->id) }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group smalls">
                                                        <label>Title</label>
                                                        <input name="title" type="text" class="form-control"
                                                            placeholder="Title">
                                                    </div>
                                                    <div class="form-group smalls">
                                                        <label>File <span class="text-danger">Only PDF
                                                                Required</span></label>
                                                        <input name="file" required accept=".pdf" type="file"
                                                            class="form-control">
                                                    </div>

                                                    <div class="form-group smalls">
                                                        <button class="btn full-width theme-bg text-white">Submit</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="ed_header_short">
                                <div class="table-responsive">
                                    <table class="table dash_list" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
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
                                                        <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#editModel{{ $item->id }}"><i
                                                                class="fas fa-edit mr-0"></i></button>
                                                        <div class="modal" id="editModel{{ $item->id }}" tabindex="-1" role="dialog"
                                                            aria-labelledby="catModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Edit Component</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true"><i
                                                                                    class="fas fa-times-circle"></i></span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="forms_block" method="post"
                                                                            action="{{ route('admin.training.update_component', $item->id) }}"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="form-group smalls">
                                                                                <label>Title</label>
                                                                                <input name="title" type="text"
                                                                                    class="form-control" value="{{ $item->title }}">
                                                                            </div>
                                                                            <div class="form-group smalls">
                                                                                <label>File <span class="text-danger">Only
                                                                                        PDF Required</span></label>
                                                                                <input name="file" accept=".pdf"
                                                                                    type="file" class="form-control">
                                                                            </div>

                                                                            <div class="form-group smalls">
                                                                                <button
                                                                                    class="btn full-width theme-bg text-white">Save</button>
                                                                            </div>

                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <form
                                                            action="{{ route('admin.training.destroy_component', $item->id) }}"
                                                            method="post" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger"
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

            </div>

        </div>
    </div>

@endsection
@section('js')
    <script src="{{ asset('assets/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/datatables.net/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(function() {
            $("#datatable").DataTable({
                scrollX: true,
            });
        });
    </script>
@endsection
