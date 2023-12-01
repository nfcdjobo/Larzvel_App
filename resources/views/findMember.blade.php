{{-- <ererrere> --}}
    @extends('layouts.main')
    @section('content')
    {{-- @dd($member->user->id) --}}
    
    <div class="details-edite">
        <div class="recentOrders-info">
            <div class="-info">
                <div class="cardHeader">
                    <h1>Apperçu Globale de Contact</h1>
                </div>
                <div class="title-date">
                    <div class="info"><span class="label">Nom & Prénom  </span>: <span>{{$member->fullname}}</span></div>
                    <div class="info"><span class="label">Adresse E-mail </span>: <span>{{$member->email}}</span></div>
                    <div class="info"><span class="label">Adresse Téléphonqie </span>: <span>{{$member->phone}}</span></div>
                    <div class="info"><span class="label">Description </span>: <span>{{$member->description}}</span></div>
                </div>
            </div>
            
        </div>
        
    </div>
    <div class="details-edite" id="details-message">
        <div class="recentOrders">
            <div class="cardHeader">
                <h1>Modifier les informations du parent: <span style="border: 1px solid var(--blue); padding: 5px; border-radius: 5px; box-shadow: 0 7px 25px var(--black3); font-size: 20px">{{$member->fullname}}</span></h1>
            </div>
            <div class="content-form">
                <form class="forms"  id="form-contact" method="POST" action={{route('MemberController.update', $member->id)}}>
                    {{-- @method('PUT') --}}
                    @csrf
                    <div class="group-input">
                        <label htmlFor="fullname" class="label-form">Nom et Prénom(s)</label>
                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="fullname" value="{{$member->fullname}}"  required/>
                    </div>
                    
    
                    <div class="group-input" >
                        <label htmlFor="email" class="label-form">Adresse E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{$member->email}}" required />
                    </div>

                    <div class="group-input">
                        <label htmlFor="phone" class="label-form">Adresse téléphonque</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Adresse téléphonque" value="{{$member->phone}}"  required />
                    </div>

                    <div class="group-input">
                        <label htmlFor="description" class="label-form">Description du parent</label>
                        <select name="description" class="form-control" id="description" required>
                            <option value="conjoint(e)" {{$member->description == 'conjoint(e)'? 'selected' : '' }}> Conjoint(e) </option>
                            <option value="fils/fille" {{$member->description == 'fils/fille'? 'selected' : '' }}> Mon fils / ma fille </option>
                            <option value="frère/soeur" {{$member->description == 'frère/soeur'? 'selected' : '' }}> Frère / Soeur </option>
                            <option value="père/mère" {{$member->description == 'père/mère'? 'selected' : '' }}> Mon père / ma mère </option>
                            <option value="oncle/autre" {{$member->description == 'oncle/autre'? 'selected' : '' }}> Oncle ou autre  </option>
                        </select>
                    </div>
    
                    <div class="group-action">
                        <button type="reset" id="reset-contact"> Annuler</button>
                        <button type="submit" id="submit-contact"> Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection
    