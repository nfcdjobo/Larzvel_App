{{-- <ererrere> --}}
    @extends('layouts.main')
    @section('content')
  
    
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
                    <tr key={index}>
                        <td><input type="checkbox"  name="" class="input-checkbox" id={index}/></td>
                        <td>{item.name}</td>
                        <td>{item.canal}</td>
                        <td></td>
                        <td> </td>
                        <td></td>
                        <td class="action-bttns">
                            <button class="edite" id={item._id}><a href=''><ion-icon name="create-outline"></ion-icon></a></button>
                            <button class="delete" id={item._id}><ion-icon name="trash-outline"></ion-icon></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> 
    </div>

    @endsection
    