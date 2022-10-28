    <!--popOut add user  model -->
    <div class="modal fade" id="addUser">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add a new user</h4>
                </div>
                <div class="modal-body">
                    <!-- Main content -->
                    <!-- partial:index.partial.html -->
                    <div class="container">
                        <form class="needs-validation" method="post" action="{{ route('users.store') }}" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-sm">
                                    <div class="model-field">
                                        <div class="model-field__control">
                                            <input id="name" name="name" type="text"
                                                class="@error('name') error-border @enderror model-field__input form-control "
                                                value="{{ old('name') }}" placeholder=" " required />
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
                                                value="{{ old('lastname') }}" placeholder=" " required />
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
                                            <input type="text" id="username" name="username"
                                                class=" @error('username') error-border @enderror model-field__input form-control"
                                                value="{{ old('username') }}"placeholder=" " required />
                                            <label for="username" class="model-field__label">username</label>
                                            @error('username')
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
                                            <input id="mail" name="email" type="email"
                                                class=" @error('email') error-border @enderror model-field__input form-control"
                                                value="{{ old('email') }}" placeholder=" " required />
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
                                        <div class="model-field__control">
                                            <input type="password" id="password" name="password"
                                                class="  @error('password') error-border @enderror model-field__input form-control"
                                                value="{{ old('password') }}" placeholder=" " required />
                                            <label for="password" class="model-field__label">password</label>
                                            @error('password')
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
                                            <select id="role" name="role"
                                                class=" @error('role') error-border @enderror model-field__input form-control"
                                                required>
                                                @foreach (App\Enums\UserRoles::values() as $key => $value)
                                                    <option value="{{ $value}}">{{ $key }}</option>
                                                @endforeach
                                            </select>
                                            <label for="role" class="model-field__label">role</label>
                                            @error('role')
                                                <div class="error">{{ $message }}</div>
                                            @enderror
                                            <div class="model-field__bar"></div>
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
