{{-- <ererrere> --}}
@extends('layouts.main')
@section('content')

<div class="cardBox">
    <div class="card">
        <a href="">
            <div>
                <div class="numbers">1</div>
                <div class="cardName">Parents</div>
            </div>
            <div class="iconBx">
                <ion-icon name="search-outline"></ion-icon>
            </div>
        </a>
    </div>

    <div class="card">
        <a href="">
            <div>
                <div class="numbers">2</div>
                <div class="cardName">Total Vehicule</div>
            </div>
            <div class="iconBx">
                <ion-icon name="search-outline"></ion-icon>
            </div>
        </a>
    </div>

    <div class="card">
        <a href="">
        <div>
            <div class="numbers">2</div>
            <div class="cardName">Vehicules Libre</div>
        </div>
        <div class="iconBx">
            <ion-icon name="search-outline"></ion-icon>
        </div>
        </a>
    </div>

    <div class="card">
        <a href="">
        <div>
            <div class="numbers">0</div>
            <div class="cardName">Vehicules Occupées</div>
        </div>
        <div class="iconBx">
            <ion-icon name="chatbubbles-outline"></ion-icon>
        </div>
        </a>
    </div>

    

    
</div>

<div class="details-edite">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Véhicules recents</h2>
            <a href="./corporates/contact.html" class="btn">Voir Plus</a>
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

<div class="details-edite">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Véhicules non Occupés</h2>
            <a href="./corporates/contact.html" class="btn">Voir Plus</a>
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

<div class="details-edite">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Véhicules Occupés</h2>
            <a href="./corporates/contact.html" class="btn">Voir Plus</a>
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

<div class="details-edite">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Véhicules recents</h2>
            <a href="./corporates/contact.html" class="btn">Voir Plus</a>
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
