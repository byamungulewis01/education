@extends('layouts.app')
@section('title', 'Create Contact')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}" />
@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Full Editor -->
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Create Contact</h5>
                <div class="card-body">
                    <form method="POST" class="row g-4" action="{{ route('admin.pages.contactUpdate') }}">
                        @csrf
                        @method('PUT')
                        <div class="col-6">
                         <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" required value="{{ $contact->title }}">
                         </div>
                         <div class="mb-3">
                            <label for="company_desc_title" class="form-label">Company Description </label>
                            <input name="company_desc_title" type="text" class="form-control mb-3" required value="{{ $contact->company_desc_title }}" />
                            <textarea class="form-control" name="company_descr" cols="30" rows="2">{{ $contact->company_descr }}</textarea>
                         </div>
                        </div>
                        <div class="col-6">
                            <label for="header_section" class="form-label">Header Section </label>
                            <textarea class="form-control" name="header_section" id="header_section" cols="30" rows="8">{{ $contact->header_section }}</textarea>
                        </div>
                        <hr>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="addr_title" class="form-label">Company Address </label>
                                <input name="addr_title" type="text" class="form-control mb-3" required value="{{ $contact->addr_title }}"/>
                                <textarea class="form-control" name="company_addr_details" cols="30" rows="4">{{ $contact->company_addr_details }}</textarea>
                             </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="contact_title" class="form-label">Company Contact Info </label>
                                <input name="contact_title" type="text" class="form-control mb-3" value="{{ $contact->contact_title }}" required />
                                <textarea class="form-control" name="contact_details" cols="30" rows="4">{{ $contact->contact_details }}</textarea>
                             </div>
                        </div>

                        <label class="form-label fs-20"><strong>Head Office Contact / USA</strong> </label>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="head" class="form-label">Company Contact Info </label>
                                <input name="head_phone" type="text" class="form-control mb-3" value="{{ $contact->head_phone }}" required />
                                <input name="head_email" type="text" class="form-control mb-3" value="{{ $contact->head_email }}" required />
                             </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="Branch" class="form-label">Branch Contact </label>
                                <input name="branch_phone" type="text" class="form-control mb-3" value="{{ $contact->branch_phone }}" required />
                                <input name="branch_email" type="text" class="form-control mb-3" value="{{ $contact->branch_email }}" required />
                             </div>
                        </div>

                        <div class="col-12 mt-4 text-end">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Full Editor -->
    </div>

@endsection

@section('js')
    <script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
    <!-- Page JS -->
    {{-- <script src="{{ asset('assets/js/forms-editors.js') }}"></script> --}}
    <script>
        var quill = new Quill("#full-editor", {
            bounds: "#full-editor",
            placeholder: "Type Something...",
            modules: {
                formula: !0,
                toolbar: [
                    [{
                        font: []
                    }, {
                        size: []
                    }],
                    ["bold", "italic", "underline", "strike"],
                    [{
                        color: []
                    }, {
                        background: []
                    }],
                    [{
                        script: "super"
                    }, {
                        script: "sub"
                    }],
                    [{
                        header: "1"
                    }, {
                        header: "2"
                    }, "blockquote", "code-block"],
                    [{
                            list: "ordered"
                        },
                        {
                            list: "bullet"
                        },
                        {
                            indent: "-1"
                        },
                        {
                            indent: "+1"
                        },
                    ],
                    ["direction", {
                        align: []
                    }],
                    ["link", "image", "formula"],
                    ["clean"],
                ],
            },
            theme: "snow",
        });


        // Listen for changes in the Quill editor
        quill.on('text-change', function() {
            // Update the hidden input field with the editor's HTML content
            document.getElementById('description-input').value = quill.root.innerHTML;
        });
    </script>
@endsection
