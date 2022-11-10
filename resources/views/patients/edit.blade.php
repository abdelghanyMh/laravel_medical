@extends('layout')
@section('title', 'Update user' . $patient->name)
@section('header', 'Update user: ' . $patient->name . ' ' . $patient->lastname)

@section('content')
    <div class="card">
        <div class="card-body">
            <form class="needs-validation" method="post" action="{{ route('patients.update', [$patient]) }}" novalidate>
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nname</label>
                    <input id="name" name="name" type="text"
                        class="@error('name') error-border @enderror form-control "
                        value="{{ old('name', $patient->name) }}" placeholder=" " required />
                    <!-- TODO check if i m working-->
                    @error('name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="lastname">Last name</label>
                    <input id="lastname" name="lastname" type="text"
                        class="@error('lastname') error-border @enderror form-control "
                        value="{{ old('lastname', $patient->lastname) }}" placeholder=" " required />
                    @error('lastname')
                        <div class="error">{{ $message }}</div>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="noSSocial">Social security number</label>
                    <input type="number" id="noSSocial" name="noSSocial"
                        class=" @error('noSSocial') error-border @enderror  form-control"
                        value="{{ old('noSSocial', $patient->noSSocial) }}" placeholder=" " required />
                    @error('noSSocial')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text"
                        class=" @error('email') error-border @enderror form-control"
                        value="{{ old('email', $patient->email) }}" placeholder=" " required />
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">

                    <label for="phone">Phone</label>
                    <div class="input-group">
                        <input type="text" id="phone" name="phone"
                            class=" @error('phone') error-border @enderror form-control"
                            data-inputmask="'mask': ['99-99-99-99-99 [x99999]', '+099 99 99 9999[9]-9999']" data-mask
                            required value="{{ old('phone', $patient->phone) }}">
                        <div class="input-group-append">
                            <div class="input-group-text"><i class="fas fa-phone"></i></div>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label for="dob">Date of birth</label>
                    <input type="date"id="dob" name="dob" class="form-control " data-target="#dob" required
                        value="{{ old('dob', $patient->dob) }}" />
                    @error('dob')
                        <div class="error">{{ $message }}</div>
                    @enderror
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
