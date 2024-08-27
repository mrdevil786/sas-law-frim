@extends('admin.layout.main')

@section('admin-page-title', 'Users')

@section('admin-main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">Manage Blogs</h1>
            <button class="btn btn-primary off-canvas" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add Blog</button>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Users</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottomm" id="file-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Slug</th>
                                    <th class="wd-15p border-bottom-0">Image</th>
                                    <th class="wd-20p border-bottom-0">Title</th>
                                    <th class="wd-15p border-bottom-0">Description</th>
                                    <th class="wd-25p border-bottom-0">Created At</th>
                                    <th class="wd-25p border-bottom-0">Updated At</th>
                                    @if (auth()->user()->user_role == 1)
                                        <th class="wd-25p border-bottom-0">Status</th>
                                    @endif
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $blog->slug }}</td>
                                        <td class="align-middle text-center"><img alt="image"
                                            class="avatar avatar-sm br-7" src="{{ asset($blog->image) }}"></td>
                                        <td>{{ $blog->title }}</td>
                                        <td>
                                            {{ \Illuminate\Support\Str::limit($blog->description, 20, '...') }}
                                        </td>
                                        <td>{{ $blog->created_at }}</td>
                                        <td>{{ $blog->updated_at }}</td>
                                        @if (auth()->user()->user_role == 1)
                                            <td class="text-center">
                                                <label class="custom-switch form-switch mb-0">
                                                    <input type="checkbox" name="custom-switch-radio"
                                                        class="custom-switch-input" data-user-id="{{ $blog->id }}"
                                                        {{ $blog->status == 'active' ? 'checked' : '' }}>
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        @endif
                                        <td class="text-center">
                                            <x-buttons.action-pill-button iconClass="fa fa-eye" iconColor="secondary"
                                                href="{{ route('admin.users.view', $blog->id) }}" />

                                            @if (auth()->user()->user_role != 3)
                                                <x-buttons.action-pill-button
                                                    href="{{ route('admin.users.edit', $blog->id) }}"
                                                    iconClass="fa fa-pencil" iconColor="warning"
                                                    modalTarget="editUserModal" />
                                            @endif
                                            @if (auth()->user()->user_role == 1)
                                                <x-buttons.action-pill-button
                                                    href="{{ route('admin.users.destroy', $blog->id) }}"
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

    <!--Add Modal - Right Offcanvas-->
    <x-Modal.Right-Offcanvas title="Add New User" action="{{ route('admin.blogs.store') }}" method="POST">

        <x-fields.input-field label="Full Name" name="name" />
        <x-fields.input-field label="Email" name="email" />
        <x-fields.input-field label="Password" name="password" type="password" />
        <x-fields.input-field label="Confirm Password" name="password_confirmation" type="password" />
        <x-fields.dropdown-field label="User Role" name="role" :options="[1 => 'Administrator', 2 => 'Editor', 3 => 'Viewer']" />
        <x-fields.input-field label="Avatar" name="avatar" type="file" />

    </x-Modal.Right-Offcanvas>
    <!--/Right Offcanvas-->

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
