@extends('admin.layout.main')

@section('admin-page-title', 'Blogs')

@section('admin-main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">Manage Case Studies</h1>
            @if (auth()->user()->user_role == 1)
                <button class="btn btn-primary off-canvas" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add Case Study</button>
            @endif
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Case Studies</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottomm" id="file-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Banner</th>
                                    <th class="wd-15p border-bottom-0">Slug</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">Description</th>
                                    <th class="wd-15p border-bottom-0">PDF</th>
                                    <th class="wd-25p border-bottom-0">Created At</th>
                                    <th class="wd-25p border-bottom-0">Updated At</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cases as $case)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="align-middle text-center">
                                            <img alt="image" class="avatar avatar-sm br-7"
                                                src="{{ asset($case->banner) }}">
                                        </td>
                                        <td>{{ \Illuminate\Support\Str::limit($case->slug, 20, '...') }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($case->title, 20, '...') }}</td>
                                        <td>
                                            {{ \Illuminate\Support\Str::limit(strip_tags($case->description), 20, '...') }}
                                        </td>
                                        <td class="text-center"><x-buttons.action-pill-button iconClass="fa fa-eye"
                                            iconColor="secondary" href="{{ asset($case->image) }}" /></td>
                                        <td>{{ $case->created_at }}</td>
                                        <td>{{ $case->updated_at }}</td>
                                        <td class="text-center">
                                            <x-buttons.action-pill-button iconClass="fa fa-eye" iconColor="secondary"
                                                href="{{ route('admin.cases.view', $case->id) }}" />
                                            @if (auth()->user()->user_role != 3)
                                                <x-buttons.action-pill-button
                                                    href="{{ route('admin.cases.edit', $case->id) }}"
                                                    iconClass="fa fa-pencil" iconColor="warning"
                                                    modalTarget="editUserModal" />
                                            @endif
                                            @if (auth()->user()->user_role == 1)
                                                <x-buttons.action-pill-button
                                                    href="{{ route('admin.cases.destroy', $case->id) }}"
                                                    iconClass="fa fa-trash" iconColor="danger" />
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

    <x-modal.right-offcanvas title="Add New Case Study" action="{{ route('admin.cases.store') }}" method="POST">
        <div class="col-lg-12 mb-3">
            <label class="form-label mt-0" for="banner">Banner</label>
            <input type="file" class="dropify" name="banner" data-bs-height="180" />
            @error('banner')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <x-fields.input-field label="Title" name="title" />
        <x-fields.input-field label="Description" name="description" />
        <div class="col-lg-12 mb-3">
            <label class="form-label mt-0" for="image">PDF</label>
            <input type="file" class="dropify" name="image" data-bs-height="180" />
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </x-modal.right-offcanvas>

@endsection

@section('custom-script')
    <!-- DATA TABLE JS-->
    <script src="{{ asset('../assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('../assets/js/table-data.js') }}"></script>

    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('../assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('../assets/plugins/fileuploads/js/file-upload.js') }}"></script>

    <!-- INTERNAL Notifications js -->
    <script src="../assets/plugins/notify/js/jquery.growl.js"></script>

    <script>
        $(document).ready(function() {
            $('input[name="custom-switch-radio"]').change(function() {
                var userId = $(this).data('user-id');
                var status = $(this).prop('checked') ? 'active' : 'blocked';

                $.ajax({
                    url: "{{ route('admin.users.status') }}",
                    method: "PUT",
                    data: {
                        id: userId,
                        status: status,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.warning) {
                            $.growl.warning1({
                                title: 'Warning',
                                message: response.warning
                            });
                        } else {
                            $.growl.notice1({
                                title: 'Success',
                                message: response.message
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        $.growl.error1({
                            title: 'Error',
                            message: 'An error occurred while updating user status.'
                        });
                    }
                });
            });
        });
    </script>
@endsection
