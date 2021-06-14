@include("partials.header")
<br>
<br>
<br>

<div class="testimonials-clean" >
    <div class="container" >
        <div class="row people">
            <div class="col-md-6 col-lg-4 item">
                <div>
                    <ul>
                        @if (auth()->check() && auth()->user()->id)
                            <li> Nom d'utilisateur: {{auth()->user()->name}}</li>
                            <li> Email d'utilisateur: {{auth()->user()->email}}</li>
                        @endif
                    <!--    <smal><strong>Profil</strong></smal>:<br>
                        <li>Junior</li>
                        <li>junior@gmail.com</li>
                        <li><a href="">Modifier</a></li><hr>
                        <smal><strong>Abonnements :</strong></smal>
                        <li>NE- Etudiants</li>
                        <li><a href="">Modifier Abonnement</a></li><hr>
                        <li>...</li>
                        <li>Ajouter une carte</li>
                        <li>Mes factures</li>
                        -->
                        <!--<li><a href="">Déconnexion</a></li>-->
                            <li><div class="mt-3 space-y-1">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-responsive-nav-link :href="route('logout')"
                                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Déconnexion') }}
                                    </x-responsive-nav-link>
                                </form>
                                </div>
                            </li>
                    </ul>
                </p>
            </div>
          </div>
        </div>
    </div>
</div>
    <br>
    <br>
@include("partials.footer")
