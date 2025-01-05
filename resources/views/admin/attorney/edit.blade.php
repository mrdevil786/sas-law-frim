@extends('admin.layout.main')

@section('admin-page-title', $isEdit ? 'Edit Attorney' : 'View Attorney')

@section('admin-main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">{{ $isEdit ? 'Edit Attorney' : 'View Attorney' }}</h1>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $isEdit ? 'Edit Attorney' : 'View Attorney' }}</h3>
                </div>
                <div class="card-body">
                    <form method="POST"
                        action="{{ $isEdit ? route('admin.attorneys.update', $attorney->id) : route('admin.attorneys.store') }}"
                        enctype="multipart/form-data" id="blogForm">
                        @csrf
                        @if ($isEdit)
                            @method('PUT')
                        @endif

                        <div class="form-row">
                            <div class="col-xl-4 mb-3">
                                @if ($isEdit)
                                    <label class="form-label mt-0" for="image">Image</label>
                                    <input type="file" class="dropify" name="image" data-bs-height="180"
                                        data-default-file="{{ asset($attorney->image) }}" />
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                @else
                                    <div class="text-center">
                                        <img class="img-responsive br-5" style="height: 180px;" src="{{ asset($attorney->image) }}" alt="Thumb-1">
                                    </div>
                                @endif
                            </div>

                            {{-- Input Field Section --}}
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label mt-0" for="name">Full Name</label>
                                        @if ($isEdit)
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ old('name', $attorney->name) }}">
                                        @else
                                            <p class="form-control">{{ $attorney->name }}</p>
                                        @endif
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label mt-0" for="designation">Designation</label>
                                        @if ($isEdit)
                                            <input type="text" class="form-control" id="designation" name="designation"
                                                value="{{ old('designation', $attorney->designation) }}">
                                        @else
                                            <p class="form-control">{{ $attorney->designation }}</p>
                                        @endif
                                        @error('designation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if ($isEdit)
                            <center><button class="btn btn-primary" type="submit">Update Attorney</button></center>
                        @endif
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


    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('../assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('../assets/plugins/fileuploads/js/file-upload.js') }}"></script>
@endsection
