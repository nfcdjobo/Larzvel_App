{{-- <ererrere> --}}
    @extends('layouts.main')
    @section('content')
    {{-- @dd($car->user_id) --}}
    
    <div class="details-edite">
        <div class="recentOrders-info">
            <div class="-info">
                <div class="cardHeader">
                    <h1>Apperçu du véhicule</h1>
                </div>
                <div class="title-date">
                    <div class="info"><span class="label">Marque  </span>: <span>{{$car->marque}}</span></div>
                    <div class="info"><span class="label">Matricule </span>: <span>{{$car->matricule}}</span></div>
                    <div class="info"><span class="label">Couleur </span>: <span>{{$car->couleur}}</span></div>
                    <div class="info"><span class="label">Attribué à </span>: <span>{{$car->member_id ? $car->members()->fullname : 'Aucun'}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="details-edite" id="details-message">
        <div class="recentOrders">
            <div class="cardHeader">
                <h1>Modifier Le propriétés de lu véhicule: <span style="border: 1px solid var(--blue); padding: 5px; border-radius: 5px; box-shadow: 0 7px 25px var(--black3); font-size: 20px">{{$car->fullname}}</span></h1>
            </div>
            <div class="content-form">
                <form class="forms"  id="form-contact" method="POST" action={{route('CarController.update', $car->id)}}>
                    {{-- @method('PUT') --}}
                    @csrf
                    <div class="group-input">
                        <label htmlFor="marque" class="label-form">Nom et Prénom(s)</label>
                        <input type="text" class="form-control" name="marque" id="marque" value="{{$car->marque}}"  required/>
                    </div>
                    
    
                    <div class="group-input" >
                        <label htmlFor="matricule" class="label-form">Adresse E-mail</label>
                        <input type="text" class="form-control" name="matricule" id="matricule" value="{{$car->matricule}}" required/>
                    </div>

                    <div class="group-input">
                        <label htmlFor="couleur" class="label-form">Couleur</label>
                        <input type="text" class="form-control" name="couleur" id="couleur" value="{{$car->couleur}}"  required />
                    </div>

                    

                    <div class="group-input">
                        <label htmlFor="image" class="label-form">Changer les images</label>
                        <input type="file" class="form-control" name="image" id="image"/>
                    </div>

                    <div class="group-input">
                        <label htmlFor="description" class="label-form">Description du parent</label>
                        <select name="description" class="form-control" id="description" required>
                            <option value=""  selected>  </option>
                            @if (isset($member) && count($member))
                                @foreach ( $member as $key => $content)
                                    <option value="{{$content->id}}" {{$car->member_id == $content->id ? 'selected' : ''}}> {{$content->fullname}} </option>
                                @endforeach
                            @endif
                            
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
    