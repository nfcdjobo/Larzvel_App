{{-- <ererrere> --}}
 
    @extends('layouts.main')
    @section('content')
  
    {{-- @dd($cars) --}}
    <div class="details-edite">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Véhicules recents</h2>
                <a href="" class="btn">Ajouter Véhicule</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <td><input type="checkbox" class="all" name="all" id="all"/></td>
                        <td>Marque</td>
                        <td>Matricule</td>
                        <td>Couleur</td>
                        <td>Image</td>
                        <td>Occupé</td>
                    </tr>
                </thead>
    
                <tbody class="tbody">
                    @if(count($cars))
                        @foreach ($cars as $item)
                            <tr key={{ $item->id}}>
                                <td><input type="checkbox"  name="{{ $item->id}}" class="input-checkbox" id="{{ $item->id}}"/></td>
                                <td>{{ $item->marque}}</td>
                                <td>{{ $item->matricule}}</td>
                                <td>{{ $item->couleur}}</td>
                                <td><img src="{{ $item->image }}"/></td>
                                <td>{{ $item->member ? 'Yes' : 'No'}}</td>
                                
                                <td class="action-bttns">
                                    <button class="edite" id='{{ $item->id }}'><a href=''><ion-icon name="create-outline"></ion-icon></a></button>
                                    <button class="delete" id={{ $item->id }}><ion-icon name="trash-outline"></ion-icon></button>
                                </td>
                            </tr>
                            
                        @endforeach
                    @else
                        <tr key={index}><td colspan="7" style="text-align: center">Aucun véhicule disponible, veuillez dont ajouter.</td></tr>
                    @endif
                    
                </tbody>
            </table>

            {{ $cars->links() }}
        </div> 
    </div>

    <div class="details-edite" id="details-message">
        <div class="recentOrders">
            <div class="cardHeader">
                <h1>Modifier Contact</h1>
            </div>
            <div class="content-form">
                <form class="forms"  id="form-contact" onSubmit={handleSubmit(onSubmit)}>
                    <div class="group-input">
                        <label htmlFor="marque" class="label-form">Marque</label>
                        
                        <input type="text" class="form-control" name="marque" id="marque" placeholder="Marque"  required/>
                    </div>
    
                    <div class="group-input">
                        <label htmlFor="matricule" class="label-form">Adresse téléphonque</label>
                        <input type="text" class="form-control" name="matricule" id="matricule" placeholder="Matricule"  required />
                    </div>

                    <div class="group-input">
                        <label htmlFor="couleur" class="label-form">Couleur</label>
                        <input type="text" class="form-control" name="couleur" id="couleur" placeholder="couleur"  required />
                    </div>

                    <div class="group-input">
                        <label htmlFor="image" class="label-form">Ajouter image de profile</label>
                        <input type="file" class="form-control" name="image" id="image" />
                    </div>

                    <div class="group-input">
                        <label htmlFor="member" class="label-form">Attribuer à un parent</label>
                        <select name="member" class="form-control" name="member_id" id="member" required>
                            <option value="">-- Veuillez sélectionnez un parent --</option>
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
    