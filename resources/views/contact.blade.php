@include("partials.header")
<h2 class="text-center">Contactez-nous</h2>
<br>
<br>
<br>


<div class="p-5 mb-4 bg-light rounded-3" style="margin-left: 25%;margin-right: 25%">
    <h5>Tous les champs sont obligatoires :)</h5>
    <div class="container-fluid py-5">
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Nom</label>
                <input type="text" class="form-control" id="username">
            </div>

            <div class="mb-3">
                <label for="surname" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="surname">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Votre adresse mail est personnel nous ne la partagerons avec personne.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Objet</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Message...</label>
            </div><br>
            <button type="submit" class="btn btn-dark">Envoyer</button>
        </form>
    </div>
</div>

<div>
    <p style="text-align: center">google maps</p>
</div>

<div class="container">
<ul>
    <li> Téléphone : 0767904887</li>
    <li>Email : junior@webstart.com</li>
    <li>Adresse : 18 quai jean baptiste clément, 94140, Alfortville</li>
</ul>
</div>
@include("partials.comments")
@include("partials.footer")
