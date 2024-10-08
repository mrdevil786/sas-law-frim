@extends('admin.layout.main')

@section('admin-page-title', $isEdit ? 'Edit Blog' : 'Add Blog')

@section('admin-main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">{{ $isEdit ? 'Edit Blog' : 'Add Blog' }}</h1>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $isEdit ? 'Edit Blog' : 'Add Blog' }}</h3>
                </div>
                <div class="card-body">
                    <form method="POST"
                        action="{{ $isEdit ? route('admin.blogs.update', $blog->id) : route('admin.blogs.store') }}"
                        enctype="multipart/form-data" id="blogForm">
                        @csrf
                        @if ($isEdit)
                            @method('PUT')
                        @endif

                        <div class="form-row">
                            <div class="col-xl-6 mb-3">
                                <label class="form-label mt-0" for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title', $blog->title ?? '') }}">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label mt-0" for="image">Thumbnail</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Summernote Editor for Description -->
                            <div class="col-md-12 mb-3">
                                <label class="form-label mt-0" for="description">Description</label>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">HTML Editor</h3>
                                    </div>
                                    <div class="card-body">
                                        <div id="summernote">
                                            {!! old('description', $blog->description ?? '') !!}
                                        </div>
                                        <input type="hidden" id="description" name="description">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center>
                            <button class="btn btn-primary"
                                type="submit">{{ $isEdit ? 'Update Blog' : 'Add Blog' }}</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection

@section('custom-script')
    <!-- INPUT MASK JS -->
    <script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

    <!-- FORMVALIDATION JS -->
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>

    <!-- INTERNAL SUMMERNOTE Editor JS -->
    <script src="{{ asset('assets/plugins/summernote/summernote1.js') }}"></script>
    <script src="{{ asset('assets/js/summernote.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300
            });

            $('#blogForm').on('submit', function() {
                $('#description').val($('#summernote').summernote('code'));
            });
        });
    </script>
@endsection
