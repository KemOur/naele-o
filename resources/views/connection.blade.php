@include("partials.header")
<h2 class="text-center">Connexion</h2>
<br>
<br>
<br>


<div class="p-5 mb-4 bg-light rounded-3" style="margin-left: 25%;margin-right: 25%">
    <h5>Bienvenue :)</h5>
    <div class="container-fluid py-5">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Votre adresse mail est personnel nous ne la partagerons avec personne.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
            </div>
            <button type="submit" class="btn btn-dark">Connexion</button>
            <p style="float: right">Password oublié ?</p>
        </form>
        <small>Pas de compte ? <a href="/inscription">Inscrivez-vous</a></small>
    </div>
</div>
@include("partials.footer")
