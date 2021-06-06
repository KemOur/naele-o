@include("partials.header")
<br>
<br>
<br>
<h2 class="text-center">Espace abonné</h2>
<p class="text-center">Abonnements</p>
<br>
<br>

<div class="testimonials-clean" >
    <div class="container" >
        <div class="row people">
            <div class="col-md-6 col-lg-4 item">
                <div>
                    <ul>
                        <smal><strong>Profil</strong></smal>:<br>
                        <li>Junior</li>
                        <li>junior@gmail.com</li>
                        <li><a href="">Modifier</a></li><hr>
                        <smal><strong>Abonnements :</strong></smal>
                        <li>NE- Etudiants</li>
                        <li><a href="">Modifier Abonnement</a></li><hr>
                        <li>...</li>
                        <li>Ajouter une carte</li>
                        <li>Mes factures</li>
                        <li><a href="">Déconnexion</a></li>
                    </ul>
                </p>
            </div>
        </div>

            <div class="col-md-6 col-lg-8 item"  style="height: 83vh">
                        <form>
                            <div class="mb-3">
                                <label for="username" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="username">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mot de passe actuel</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nouveau mot de passe</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Confirmer mot de passe</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-dark">Envoyer</button>
                        </form>
                </div>
            </div>
        </div>
</div>
    <br>
    <br>
@include("partials.footer")
