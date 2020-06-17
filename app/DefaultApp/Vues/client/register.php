<div class="card">
    <div class="card-body">
        <div class="section mt-2 text-center">
            <h3>Inscription</h3>
        </div>
        <div class="section mt-2 mb-5 p-3">
            <div class="message"></div>
            <form action="" class="form-inscription was-validated" method="post">
                <input type="hidden" name="inscription">
                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="label" for="password2">Téléphone</label>
                        <input name="telephone" type="text" class="form-control telephone" placeholder=""
                               required>
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>

                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="label" for="password2">Prénom</label>
                        <input name="prenom" type="text" class="form-control" placeholder="" required>
                    </div>
                </div>


                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="label" for="password2">Nom de famille</label>
                        <input name="nom" type="text" class="form-control" placeholder="" required>
                    </div>
                </div>


                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label for="password2">Date de naissance</label>
                        <div class="row">
                            <div class="form-group col-4">
                                <label class="label">Date</label>
                                <input name="date" type="text" class="form-control mois" placeholder="date" required>
                            </div>

                            <div class="form-group col-4">
                                <label class="label">Mois</label>
                                <input name="mois" type="text" class="form-control mois" placeholder="mois" required>
                            </div>

                            <div class="form-group col-4">
                                <label class="label">Année</label>
                                <input name="annee" type="text" class="form-control annee" placeholder="année" required>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label for="password2">Pin A 6 chiffres</label>
                        <div class="row">
                            <div class="form-group col-12">
                                <input name="pin" type="text" class="form-control pin6c" placeholder="Pin" required>
                            </div>
                        </div>
                    </div>
                </div>

              <!--  <div class="custom-control custom-checkbox mt-2">
                    <input type="checkbox" class="custom-control-input" id="customChecka1" required>
                    <label class="custom-control-label" for="customChecka1">
                        I agree <a href="#" data-toggle="modal" data-target="#termsModal">terms and conditions</a>
                    </label>
                </div>-->

                <br><br>
                <div>
                    <span>Vous avez deja un compte ?  <a href="se-connecter" class="">Ouvrir une session</a></span>
                </div>


                <div class="form-button-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Terms Modal -->
<div class="modal fade modalbox" id="termsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Terms and Conditions</h5>
                <a href="javascript:;" data-dismiss="modal">Close</a>
            </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum, urna eget finibus
                    fermentum, velit metus maximus erat, nec sodales elit justo vitae sapien. Sed fermentum
                    varius erat, et dictum lorem. Cras pulvinar vestibulum purus sed hendrerit. Praesent et
                    auctor dolor. Ut sed ultrices justo. Fusce tortor erat, scelerisque sit amet diam rhoncus,
                    cursus dictum lorem. Ut vitae arcu egestas, congue nulla at, gravida purus.
                </p>
                <p>
                    Donec in justo urna. Fusce pretium quam sed viverra blandit. Vivamus a facilisis lectus.
                    Nunc non aliquet nulla. Aenean arcu metus, dictum tincidunt lacinia quis, efficitur vitae
                    dui. Integer id nisi sit amet leo rutrum placerat in ac tortor. Duis sed fermentum mi, ut
                    vulputate ligula.
                </p>
                <p>
                    Vivamus eget sodales elit, cursus scelerisque leo. Suspendisse lorem leo, sollicitudin
                    egestas interdum sit amet, sollicitudin tristique ex. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos himenaeos. Phasellus id ultricies eros. Praesent
                    vulputate interdum dapibus. Duis varius faucibus metus, eget sagittis purus consectetur in.
                    Praesent fringilla tristique sapien, et maximus tellus dapibus a. Quisque nec magna dapibus
                    sapien iaculis consectetur. Fusce in vehicula arcu. Aliquam erat volutpat. Class aptent
                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- * Terms Modal -->