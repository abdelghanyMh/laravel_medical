    <!--popOut  delete user   model -->
    <div class="modal fade" id="deleteDialogue">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">êtes-vous sûr de vouloir supprimer cet utilisateur</h4>
                </div>
                <div class="modal-body">
                    <!-- Main content -->
                    <!-- partial:index.partial.html -->
                    <div class="container">
                        <form class="needs-validation" method="post" action="{{ url('/deleteUser') }}" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-sm">
                                    <div class="model-field">
                                        <div class="model-field__control">
                                            <input id="nomDelete" name="nom" type="text"
                                                class="model-field__input form-control" placeholder=" " required />
                                            <label for="nom" class="model-field__label">Nom</label>
                                            <div class="model-field__bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="model-field">
                                        <div class="model-field__control">
                                            <input id="prenomDelete" name="prenom" type="text"
                                                class="model-field__input form-control" placeholder=" " required />
                                            <label for="prenom" class="model-field__label">Prénom</label>
                                            <div class="model-field__bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-field">
                                        <div class="form-field__control">
                                            <input id="usernameDelete" name="username" type="text"
                                                class="form-field__input form-control" placeholder=" " readonly
                                                required />
                                            <label for="username" class="form-field__label">Login</label>
                                            <div class="form-field__bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary">Confirmer</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
    <!-- /.modal -->
