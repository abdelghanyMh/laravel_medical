@extends('layout')
@section('title', 'Update user' . $user->username)
@section('header', 'Update user: ' . $user->name . ' ' . $user->lastname)

@section('content')
    <div class="card">
        <div class="card-body">
            <form class="needs-validation" method="post" action="{{ route('users.update', [$user]) }}" novalidate>
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text"
                        class="@error('name') error-border @enderror form-control" value="{{ old('name', $user->name) }}"
                        required />
                    @error('name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input id="lastname" name="lastname" type="text"
                        class="@error('lastname') error-border @enderror form-control"
                        value="{{ old('lastname', $user->lastname) }}" required />
                    @error('lastname')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text"
                        class="@error('username') error-border @enderror form-control"
                        value="{{ old('username', $user->username) }}" required />
                    @error('username')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text"
                        class="@error('email') error-border @enderror form-control" value="{{ old('email', $user->email) }}"
                        required />
                    @error('email')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                @php
                    $f = $user->role->value == 1;
                    var_dump($f);
                    // echo '<h1>' . $user->role->value == 2 ? 'fuck' : 'sex' . '</h1>';
                @endphp
                <div class="form-group">
                    <label for="role">User role</label>
                    <select id="role" name="role" class=" @error('role') error-border @enderror form-control"
                        required>
                        @foreach (App\Enums\UserRoles::values() as $key => $value)
                            <option value="{{ $value }}" @if ($value == $user->role->value) selected @endif>
                                {{ $key }}</option>
                        @endforeach
                        @error('role')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">update</button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
