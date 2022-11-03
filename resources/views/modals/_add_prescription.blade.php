    <!--popOut add user  model -->
    <div class="modal fade" id="modal_add_prescription">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add a new prescription</h4>
                </div>
                <div class="modal-body">
                    <!-- Main content -->
                    <!-- partial:index.partial.html -->
                    <div class="container">
                        <form class="needs-validation" method="post" action="{{ route('prescriptions.store') }}"
                            novalidate>
                            @csrf
                            <input type="number" name="patient_id" id="patient_id" value="{{ $patient->id }}" hidden>
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
                                                value="{{ old('lastname', $patient->lastname) }}" placeholder=" "
                                                required />
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
                                            <textarea id="content" name="content" cols="30" rows="10"
                                                class="@error('content') error-border @enderror form-field__textarea form-control" required>{{ old('content') }}</textarea>
                                            {{-- <label for="content" class="model-field__label">content</label> --}}
                                            <div class="model-field__bar"></div>
                                            <!-- TODO check if i m working-->
                                            @error('content')
                                                <div class="error">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
                                <button type="submit" class="btn btn-primary">add</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
