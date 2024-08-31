@extends('admin.layout.main')

@section('admin-page-title', 'Add Blog')

@section('admin-main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">Add Blog</h1>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Blog</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data"
                        id="blogForm">
                        @csrf

                        <div class="form-row">
                            <div class="col-xl-6 mb-3">
                                <label class="form-label mt-0" for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title') }}">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <x-fields.input-field class="col-xl-6 mb-3" label="Thumbnail" name="image" type="file" />

                            <!-- Summernote Editor for Description -->
                            <div class="col-md-12 mb-3">
                                <label class="form-label mt-0" for="description">Description</label>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">HTML Editor</h3>
                                    </div>
                                    <div class="card-body">
                                        <div id="summernote">
                                            {!! old('description') !!}
                                        </div>
                                        <input type="hidden" id="description" name="description">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <center>
                            <button class="btn btn-primary" type="submit">Add Blog</button>
                        </center>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection

@section('custom-script')
    <!-- DATA TABLE JS-->
    <!-- INPUT MASK JS-->
    <script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

    <!-- FORMVALIDATION JS -->
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>

    <!-- INTERNAL SUMMERNOTE Editor JS -->
    <script src="{{ asset('assets/plugins/summernote/summernote1.js') }}"></script>
    <script src="{{ asset('assets/js/summernote.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#blogForm').on('submit', function(event) {
                $('#description').val($('#summernote').summernote('code'));
            });
        });
    </script>

@endsection
