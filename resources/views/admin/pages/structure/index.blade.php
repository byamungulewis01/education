@extends('layouts.app')
@section('title', 'Structure')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css">
@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Users List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-0">Organization Structure
                    <a class="btn btn-dark text-white pull-left float-end" href="{{ route('admin.pages.create_structure') }}">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                        <span class="d-none d-sm-inline-block">Add New</span></a>
                </h5>
            </div>
            <div class="card-body mt-3">
                <div class="row mb-5">
                    @foreach ($structures as $item)
                    <div class="col-md-6 col-lg-6 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('images/structure/' . $item->imageName) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{!! Illuminate\Support\Str::limit(strip_tags($item->description), 130) !!}</p>
                                <a href="{{ route('admin.pages.edit_structure',$item->id) }}" class="btn btn-outline-primary waves-effect">Edit</a>

                                <form id="deleteForm_{{ $item->id }}"
                                    action="{{ route('admin.pages.destroy_structure', $item->id) }}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <a href="javascript:;" class="btn btn-outline-danger waves-effect delete-record {{ $item->id }}"
                                        data-form-id="deleteForm_{{ $item->id }}">
                                        Delete
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 600, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: true // set focus to editable area after initializing summernote
            });
        });
    </script>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Find all elements with class 'delete-record'
            var deleteLinks = document.getElementsByClassName('delete-record');

            // Loop through each delete link
            for (var i = 0; i < deleteLinks.length; i++) {
                // Add click event listener to each delete link
                deleteLinks[i].addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent the default link behavior

                    // Get the form id from the 'data-form-id' attribute
                    var formId = this.getAttribute('data-form-id');

                    // Find the form with the specified id
                    var form = document.getElementById(formId);

                    // Confirm deletion
                    var confirmDelete = confirm('Are you sure to delete?');

                    // If confirmed, submit the form
                    if (confirmDelete) {
                        form.submit();
                    }
                });
            }
        });
    </script>
@endsection
