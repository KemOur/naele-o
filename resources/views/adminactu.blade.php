@include("partials.header")
<br>
<br>
<br>
<h2 class="text-center">Administrateur</h2>
<p class="text-center">Gestion - Actualités</p>
<br>
<br>


<div class="testimonials-clean" >
    <div class="container">
        <div class="row people">
            <div class="col-md-6 col-lg-2 item">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Actualités</li>
                        <li class="list-group-item">Abonnements</li>
                        <li class="list-group-item">Utilisateurs</li>
                        <li class="list-group-item"><a href="">Déconnexion</a></li>
                    </ul>
            </div>

            <div class="col-md-6 col-lg-2 item">
                 <form>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                        <input type="text" placeholder="Titre" style="width: 100%">
                        <textarea class="form-control" placeholder="Décrire l'actualité" id="floatingTextarea"></textarea>
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                        <button class="btn-info" style="color: white; width: 100%" type="submit">Ajouter</button>
                    </form>
            </div>

            <div class="col-md-6 col-lg-8 item">
                    <table class="table caption-top">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Contenu</th>
                            <th scope="col">Publié ?</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="..." class="img-thumbnail" alt="..."></td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                            <td>
                                <a href="">
                                    <svg style="color: #59B0E3" xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                </a>

                                <a href="">
                                    <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td><img src="..." class="img-thumbnail" alt="..."></td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                            <td>
                                <a href="">
                                    <svg style="color: #59B0E3" xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                </a>

                                <a href="">
                                    <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td><img src="..." class="img-thumbnail" alt="..."></td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                            <td>
                                <a href="">
                                    <svg style="color: #59B0E3" xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                </a>

                                <a href="">
                                    <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@include("partials.footer")
