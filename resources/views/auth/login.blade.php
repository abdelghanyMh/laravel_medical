@extends('layout', ['includeNavbar' => false])
@section('title', 'Log in')

@section('content')

    {{-- <h1>{{ $errors->any() }}</h1> --}}
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href=" {{ route('login') }}" class="h1"><b>medical</b> clinic</a>
            </div>
            <div class="card-body">
                <!-- only include _errors subview if there is errors-->
                @includeWhen($errors->any(), 'inc._errors')
                <p class="login-box-msg">Sign in to start your session</p>

                <form action=" {{ route('login') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') error-border @enderror"
                            placeholder="Email" value="{{ old('email') }}" required autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        @error('email')
                            <div class="error">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name='password'
                            class="form-control @error('password') error-border @enderror" placeholder="Password"
                            autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        @error('password')
                            <div class="error">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
@endsection
