@include("partials.header")
<h2 class="text-center">Inscription</h2>
<br>
<br>
<br>


<div class="p-5 mb-4 bg-light rounded-3" style="margin-left: 25%;margin-right: 25%">
    <h5>Bienvenue :)</h5>
    <div class="container-fluid py-5">
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Nom</label>
                <input type="text" class="form-control" id="username">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Votre adresse mail est personnel nous ne la partagerons avec personne.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirmation mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-dark">S'inscrire</button>
        </form>
    </div>
</div>
@include("partials.footer")
