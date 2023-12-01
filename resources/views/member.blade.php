{{-- <ererrere> --}}
 
    @extends('layouts.main')
    @section('content')
  
    {{-- @dd($members) --}}
    <div class="details-edite">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Véhicules recents</h2>
                <a href="" class="btn">Ajouter un parent</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <td><input type="checkbox" class="all" name="all" id="all"/></td>
                        <td>Nom et Prénom(s)</td>
                        <td>Email</td>
                        <td>Téléphone</td>
                        <td>Description</td>
                        <td>Photo</td>
                    </tr>
                </thead>
    
                <tbody class="tbody">
                    @if(count($members))
                        @foreach ($members as $item)
                            <tr key={{ $item->id}}>
                                <td><input type="checkbox"  name="{{ $item->id}}" class="input-checkbox" id="{{ $item->id}}"/></td>
                                <td>{{ $item->fullname}}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->phone}}</td>
                                
                                <td>{{ $item->description }}</td>
                                <td><img src="{{ $item->photo }}"/></td>
                                
                                <td class="action-bttns">
                                    <button class="edite" id='{{ $item->id }}'><a href={{route('MemberController.gitById', $item->id)}} ><ion-icon name="create-outline"></ion-icon></a></button>

                                    <button class="delete" id='{{ $item->id }}' onclick="if(confirm('Êtes-vous vraiment sûre de vouloir supprimer {{$item->fullname}} ?')) document.querySelector('form.delete-form-{{$item->id}}').submit()"><ion-icon name="trash-outline"></ion-icon></button>
                                    
                                    <form class="delete-form-{{ $item->id }}" action="{{route('MemberController.delete', $item->id)}}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            
                        @endforeach
                    @else
                        <tr key={index}><td colspan="7" style="text-align: center">Aucun véhicule disponible, veuillez dont ajouter.</td></tr>
                    @endif
                    
                </tbody>
            </table>

            {{ $members->links() }}
        </div> 
    </div>

    <div class="details-edite" id="details-message">
        <div class="recentOrders">
            <div class="cardHeader">
                <h1>Ajouter un parent</h1>
            </div>
            <div class="content-form">
                <form class="forms"  id="form-contact" method='POST' action="{{route('MemberController.create')}}">
                    @csrf
                    <div class="group-input">
                        <label htmlFor="fullname" class="label-form">Nom et Prénom(s)</label>
                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="fullname"  required/>
                    </div>
                    
    
                    <div class="group-input">
                        <label htmlFor="email" class="label-form">Adresse E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email"  required />
                    </div>

                    <div class="group-input">
                        <label htmlFor="phone" class="label-form">Adresse téléphonque</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Adresse téléphonque"  required />
                    </div>

                    <div class="group-input">
                        <label htmlFor="description" class="label-form">Description du parent</label>
                        <select name="description" class="form-control" id="description" required>
                            <option value="" disabled>-- Veuillez sélectionnez un parent --</option>
                            <option value="conjoint(e)"> Conjoint(s) </option>
                            <option value="fils/fille"> Mon fils / ma fille </option>
                            <option value="frère/soeur"> Frère / Soeur </option>
                            <option value="peère/mère"> Mon père / ma mère </option>
                            <option value="oncle/autre"> Oncle ou autre  </option>
                        </select>
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
    