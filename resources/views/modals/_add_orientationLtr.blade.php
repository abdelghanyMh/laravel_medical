    <!--popOut add user  model -->
    <div class="modal fade" id="modal-add-orientationLtr">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">write a new orientation letter</h4>
                </div>
                <div class="modal-body">
                    <!-- Main content -->
                    <!-- partial:index.partial.html -->
                    <div class="container">

                        <form class="needs-validation" method="post" action="{{ route('orientationLtr.store') }}"
                            novalidate>
                            @csrf
                            <input type="number" name="patient_id" id="patient_id" value="{{ $patient->id }}" hidden>

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
