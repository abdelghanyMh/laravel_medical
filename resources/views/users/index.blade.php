@extends('layout')
@section('title', 'Users Management')
@section('header', 'Users list')

@section('content')
    <div class="card">
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="users_table" class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                            aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="users_table" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">
                                        first name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="users_table"
                                        aria-label="Browser: activate to sort column ascending">
                                        last name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="users_table"
                                        aria-label="Platform(s): activate to sort column ascending">
                                        login
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="users_table"
                                        aria-label="CSS grade: activate to sort column ascending">
                                        email
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="users_table"
                                        aria-label="CSS grade: activate to sort column ascending">
                                        role
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach ($users as $user)
                                    <tr role="row" class="{{ $counter % 2 == 0 ? 'even' : 'odd' }}">
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $user['name'] }}</td>
                                        <td>{{ $user['lastname'] }}</td>
                                        <td>{{ $user['username'] }}</td>
                                        <td>{{ $user['email'] }}</td>
                                        <td>{{ $user['role']->name }}</td>
                                        <td
                                            style="padding-right: -3.25rem;border-right-width: 0px;height: 37px;width: 95.833px;">
                                            <a href="{{ route('users.edit', [$user]) }}" class="btn btn-app btn-modify"
                                                style="height: 41px;min-width: 46px;margin: 0px;padding: 0px;">
                                                <i class="fas fa-user-edit"></i>
                                            </a>

                                            <!-- TODO check authorization -->
                                            <form method="POST" action="{{ route('users.destroy', [$user]) }}"
                                                class="form-modify">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-app  btn-del"
                                                    style="height: 41px;min-width: 46px;margin-left: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;">
                                                    <i class="fas fa-user-times"></i>
                                                </button>

                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $counter++;
                                    @endphp
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- add user btn  --}}
            <div class="add-btn-container">
                <button type="button" class="  btn-default add-btn " data-toggle="modal" data-target="#addUser">
                    <i class="fas fa-user-plus" style="font-size: 29px;margin-bottom: 8px;margin-left: 1px;"></i>
                </button>
            </div>
            {{-- end  add user btn --}}

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- FIXME: this not consistence for put&del we used view and for post used modal-->
    {{-- add user --}}
    @include('modals._add_user')

    {{-- end  modals --}}
@endsection
