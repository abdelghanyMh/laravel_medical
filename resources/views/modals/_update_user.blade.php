   <!--popOut  edit user   model -->
   <div class="modal fade" id="editUserModel">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title">Modifier les infos d'utilisateur</h4>
               </div>
               <div class="modal-body">
                   <!-- Main content -->
                   <!-- partial:index.partial.html -->
                   <div class="container">
                       <form class="needs-validation" method="post" action="{{ url('/updateUser') }}" novalidate>
                           @csrf
                           <input id="id" name="id" style="display:none;" required />
                           <div class="row">
                               <div class="col-sm">
                                   <div class="model-field">
                                       <div class="model-field__control">
                                           <input id="nomUpdate" name="nom" type="text"
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
                                           <input id="prenomUpdate" name="prenom" type="text"
                                               class="model-field__input form-control" placeholder=" " required />
                                           <label for="prenom" class="model-field__label">Prénom</label>
                                           <div class="model-field__bar"></div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-sm">
                                   <div class="model-field">
                                       <div class="model-field__control">
                                           <input type="text" id="usernameUpdate" name="username"
                                               class="model-field__input form-control" placeholder=" " required />
                                           <label for="username" class="model-field__label">Login</label>
                                           <div class="model-field__bar"></div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-sm">
                                   <div class="model-field">
                                       <div class="model-field__control">
                                           <input type="password" id="pwd" name="pwd"
                                               class="model-field__input form-control" placeholder=" " required />
                                           <label for="pwd" class="model-field__label">Mot de passe </label>
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
                                               class="model-field__input form-control" placeholder=" " required />
                                           <label for="mail" class="model-field__label">Adresse email</label>
                                           <div class="model-field__bar"></div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-sm">
                                   <div class="model-field">
                                       <div class="model-field__control">
                                           <select id="specialty" name="specialty"
                                               class="model-field__input form-control" required>
                                               <option>Médecin</option>
                                               <option>Secrétaire</option>
                                               <option>Administrateur</option>
                                           </select>
                                           <label for="specialty" class="model-field__label">Spécialité</label>
                                           <div class="model-field__bar"></div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="modal-footer justify-content-between">
                               <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                               <button type="submit" class="btn btn-primary">Modifier</button>
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
