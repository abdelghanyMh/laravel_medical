<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Management</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- For Time Picker - Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.css">
    <!-- Custom style -->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar & Sidebar -->
        @include('inc._nav_sidebar')

        <!-- only include _errors subview if there is errors-->
        @includeWhen($errors->any(), '_errors')

        {{-- sucess msg --}}
        <!--TODO: check if I m working (sucess msg is displayed after successful add of a user)-->
        @includeWhen(session('success'), 'inc._success')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 1098px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 id="Header">Users list</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example1"
                                                    class="table table-bordered table-striped dataTable dtr-inline"
                                                    role="grid" aria-describedby="example1_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="example1" rowspan="1" colspan="1"
                                                                aria-sort="ascending"
                                                                aria-label="Rendering engine: activate to sort column descending">
                                                                first name
                                                            </th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Browser: activate to sort column ascending">
                                                                last name
                                                            </th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Platform(s): activate to sort column ascending">
                                                                login
                                                            </th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1"
                                                                rowspan="1" colspan="1"
                                                                aria-label="CSS grade: activate to sort column ascending">
                                                                email
                                                            </th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1"
                                                                rowspan="1" colspan="1"
                                                                aria-label="CSS grade: activate to sort column ascending">
                                                                specialty
                                                            </th>
                                                            <th rowspan="1" colspan="1">
                                                                id
                                                            </th>
                                                            <th rowspan="1" colspan="1">
                                                                Actions
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $counter = 1;
                                                        @endphp
                                                        @foreach ($users as $user)
                                                            <tr role="row"
                                                                class="{{ $counter % 2 == 0 ? 'even' : 'odd' }}">
                                                                <td class="dtr-control sorting_1" tabindex="0">
                                                                    {{ $user['name'] }}</td>
                                                                <td>{{ $user['lastname'] }}</td>
                                                                <td>{{ $user['username'] }}</td>
                                                                <td>{{ $user['email'] }}</td>
                                                                <td>{{ $user['specialty'] }}</td>
                                                                <td
                                                                    style="padding-right: -3.25rem;border-right-width: 0px;height: 37px;width: 95.833px;">
                                                                    <a class="btn btn-app btnSelect btn-modify"
                                                                        data-toggle="modal" data-target="#editUserModel"
                                                                        style="height: 41px;min-width: 46px;margin-left: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;">
                                                                        <i class="fas fa-user-edit"
                                                                            style="line-height: 7px;font-size: 19px;padding-top: 13px;"></i>
                                                                    </a>
                                                                    <a class="btn btn-app btnSelect btn-del"
                                                                        data-toggle="modal"
                                                                        data-target="#deleteDialogue"
                                                                        style="height: 41px;min-width: 46px;margin-left: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;">
                                                                        <i class="fas fa-user-times"
                                                                            style="line-height: 7px;font-size: 19px;padding-top: 13px;"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            @php
                                                                $counter++;
                                                            @endphp
                                                        @endforeach
                                                        <tr role="row" class="odd">
                                                            <td class="dtr-control sorting_1" tabindex="0">ABDOU
                                                            </td>
                                                            <td>mh</td>
                                                            <td>abdouDZ</td>
                                                            <td>miwMiw</td>
                                                            <td>abdou@gmail.com</td>
                                                            <td
                                                                style="padding-right: -3.25rem;border-right-width: 0px;height: 37px;width: 95.833px;">
                                                                <a class="btn btn-app btnSelect btn-modify"
                                                                    data-toggle="modal" data-target="#editUserModel"
                                                                    style="height: 41px;min-width: 46px;margin-left: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;">
                                                                    <i class="fas fa-user-edit"
                                                                        style="line-height: 7px;font-size: 19px;padding-top: 13px;"></i>
                                                                </a>
                                                                <a class="btn btn-app btnSelect btn-del"
                                                                    data-toggle="modal" data-target="#deleteDialogue"
                                                                    style="height: 41px;min-width: 46px;margin-left: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;">
                                                                    <i class="fas fa-user-times"
                                                                        style="line-height: 7px;font-size: 19px;padding-top: 13px;"></i>
                                                                </a>
                                                            </td>


                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper-->

    {{-- add user btn  --}}
    <div class="add-user-container">
        <button type="button" class="  btn-default add-btn " data-toggle="modal" data-target="#addUser">
            <i class="fas fa-user-plus" style="font-size: 29px;margin-bottom: 8px;margin-left: 1px;"></i>
        </button>
    </div>

    {{-- modals --}}

    {{-- delete user --}}
    @include('modals._delete_user')
    {{-- add user --}}
    @include('modals._add_user')
    {{-- update user --}}
    @include('modals._update_user')

    {{-- end  modals --}}

    {{-- js scripts --}}
    @include('inc._users_scripts')
</body>

</html>
