{{-- <ererrere> --}}
    @extends('layouts.main')
    @section('content')

    {{-- @dd($user) --}}
    <div class="details-edite">
        <div class="recentOrders-info">
            <div class="-info">
                <div class="cardHeader">
                    <h1>Apperçu Globale du Profile</h1>
                </div>
                <div class="title-date">
                    <div class="info"><span class="label">Nom & Prénom  </span>: <span>{{ $user->fullname }}</span></div>
                    <div class="info"><span class="label">Adresse E-mail </span>: <span>{{ $user->email }}</span></div>
                    <div class="info"><span class="label">Adresse Téléphonqie </span>: <span>{{ $user->phone }}</span></div>

                    <div class="info"><span class="label">Mot de passe </span>: <span class='closing'>nfcdjobo</span>  <button class="btnpass" onclick="document.querySelector('.closing').classList.toggle('show-password');if(event.target.textContent==='Voir'){ event.target.textContent='Cacher'}else{event.target.textContent='Voir'}">Voir</button></div>

                </div>
            </div>

        </div>

    </div>
    <div class="details-edite" id="details-message">
        <div class="recentOrders">
            <div class="cardHeader">
                <h1>Modifier Profile</h1>
            </div>
            <div class="content-form">
                <form class="forms"  id="form-contact" action="" method="POST">
                    @csrf
                    <div class="group-input">
                        <label htmlFor="fullname" class="label-form">Nom et Prénom(s)</label>
                        <input type="text" class="form-control" name="fullname" id="fullname" value="{{ $user->fullname }}" placeholder="Nom et Prénom(s)"  required/>
                    </div>

                    <div class="group-input">
                        <label htmlFor="phone" class="label-form">Adresse téléphonque</label>
                        <input type="text" class="form-control" name="phone" id="phone"  value="{{ $user->phone }}" placeholder="Adresse téléphonque"  required />
                    </div>

                    <div class="group-input">
                        <label htmlFor="password" class="label-form">Mot de passe</label>
                        <input type="password" class="form-control" name="password" id="password"  placeholder="Mot de passe"  />
                    </div>

                    <div class="group-input">
                        <label htmlFor="password_confirmation" class="label-form">Répéter mot de passe</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"  placeholder="Adresse téléphonque"  required />
                    </div>

                    <div class="group-action">
                        <button type="reset" id="reset-contact"> Annuler</button>
                        <button type="submit" id="submit-contact"> Confirmer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection
