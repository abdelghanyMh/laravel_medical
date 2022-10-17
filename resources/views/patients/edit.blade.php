@extends('layout')
@section('title', 'Update user' . $patient->name)
@section('header', 'Update user: ' . $patient->name . ' ' . $patient->lastname)

@section('content')
    <form class="needs-validation" method="post" action="{{ route('patients.update', [$patient]) }}" novalidate>
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm">
                <div class="model-field">
                    <div class="model-field__control">
                        <input id="name" name="name" type="text"
                            class="@error('name') error-border @enderror model-field__input form-control "
                            value="{{ old('name', $patient->name) }}" placeholder=" " required />
                        <label for="name" class="model-field__label">name</label>
                        <div class="model-field__bar"></div>
                        <!-- TODO check if i m working-->
                        @error('name')
                            <div class="error">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="model-field">
                    <div class="model-field__control">
                        <input id="lastname" name="lastname" type="text"
                            class="@error('lastname') error-border @enderror model-field__input form-control "
                            value="{{ old('lastname', $patient->lastname) }}" placeholder=" " required />
                        <label for="lastname" class="model-field__label">last Name</label>
                        @error('lastname')
                            <div class="error">{{ $message }}</div>
                        @enderror
                        <div class="model-field__bar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="model-field">
                    <div class="model-field__control">
                        <input type="number" id="noSSocial" name="noSSocial"
                            class=" @error('noSSocial') error-border @enderror model-field__input form-control"
                            value="{{ old('noSSocial', $patient->noSSocial) }}" placeholder=" " required />
                        <label for="noSSocial" class="model-field__label">social security
                            number</label>
                        @error('noSSocial')
                            <div class="error">{{ $message }}</div>
                        @enderror
                        <div class="model-field__bar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="model-field">
                    <div class="model-field__control">
                        <input id="email" name="email" type="text"
                            class=" @error('email') error-border @enderror model-field__input form-control"
                            value="{{ old('email', $patient->email) }}" placeholder=" " required />
                        <label for="email" class="model-field__label">email</label>
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror
                        <div class="model-field__bar"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">

                <div class="model-field">

                    <div class="input-group ">

                        <input type="text" id="phone" name="phone"
                            class=" @error('phone') error-border @enderror form-control"
                            data-inputmask="'mask': ['99-99-99-99-99 [x99999]', '+099 99 99 9999[9]-9999']" data-mask
                            required value="{{ old('phone', $patient->phone) }}">
                        <div class="input-group-append">
                            <div class="input-group-text"><i class="fas fa-phone"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="model-field">

                    <div class="model-field__control">
                        <input type="date" name="dob" class="form-control " data-target="#dob" required
                            value="{{ old('dob', $patient->dob) }}" />
                        @error('dob')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-primary">update</button>
        </div>
    </form>
@endsection
