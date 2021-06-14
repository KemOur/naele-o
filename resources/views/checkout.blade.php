@include("partials.header")

    <div class="p-5 mb-4 bg-light rounded-3" style="margin-left: 25%;margin-right: 25%">
        <h4>Abonnements :)</h4>
        <h5>Choississez votre abonnnement</h5>

        <div class="container-fluid py-5">
            <form>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Default radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Default checked radio
                    </label>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <button type="submit" class="btn btn-dark">payer maintenant</button>
                <p style="float: right">Password oublié ?</p>
            </form>
        </div>
    </div>
@include("partials.footer")
