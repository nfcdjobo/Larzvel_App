{{-- <ererrere> --}}
@extends('layouts.main')
@section('content')

<div class="cardBox">
    <div class="card">
        <a href="">
            <div>
                <div class="numbers">
                    @if (isset($user->members))
                        {{ count($user->members)}}
                    @else
                        Aucun
                    @endif
                </div>
                <div class="cardName">Parents</div>
            </div>
            <div class="iconBx">
                <ion-icon name="person-outline"></ion-icon>
            </div>
        </a>
    </div>

    <div class="card">
        <a href="">
            <div>
                <div class="numbers">
                    @if (isset($user->cars))
                        {{ count($user->cars)}}
                    @else
                        Aucun
                    @endif
                </div>
                <div class="cardName">Total Vehicule</div>
            </div>
            <div class="iconBx">
                <ion-icon name="car-outline"></ion-icon>
            </div>
        </a>
    </div>

    <div class="card">
        <a href="">
        <div>
            <div class="numbers">
                @if (isset($user->cars))
                    {{ count($user->cars->where('member_id', null))}}
                @else
                    Aucun
                @endif
            </div>
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
            <div class="numbers">
                @if (isset($user->cars))
                    {{ count($user->cars->where('member_id', '!=' ,null))}}
                @else
                    Aucun
                @endif
            </div>
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
            <h2>Parents recents</h2>
            <a href="{{ route('MemberController.index') }}" class="btn">Voir liste des parentd</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td><input type="checkbox" class="all" name="all" id="all"/></td>
                    <td>Nom et Prénom(s)</td>
                    <td>E-mail</td>
                    <td>Téléphone</td>

                </tr>
            </thead>

            <tbody class="tbody">
                @if (isset($user->members))
                    @foreach ($user->members->take(3) as $item)
                        <tr key={{ $item->id }}>
                            <td><input type="checkbox"  name="" class="input-checkbox" id={{ $item->id }}/></td>
                            <td>{{ $item->fullname }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr><td colspan="5" style="text-align: center">Aucun véhicule disponible</td></tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<div class="details-edite">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Véhicules Recenment Occupés </h2>
            <a href="{{ route('CarController.index') }}" class="btn">Voir liste des véhicles</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td><input type="checkbox" class="all" name="all" id="all"/></td>
                    <td>Marque</td>
                    <td>Matricule</td>
                    <td>Couleur</td>
                    <td>Image</td>
                    <td>Occupé Par</td>
                </tr>
            </thead>

            <tbody class="tbody">
                @if (isset($user->cars))
                    @foreach ($user->cars->where('member_id', '!=' ,null)->take(3) as $item)
                        <tr key={{ $item->id }}>
                            <td><input type="checkbox"  name="" class="input-checkbox" id={{ $item->id }}/></td>
                            <td>{{ $item->marque }}</td>
                            <td>{{ $item->matricule }}</td>
                            <td>{{ $item->couleur }}</td>
                            <td><img class="car-image" src="{{ asset('images/'.json_decode($item->image)[0])}}" alt=""></td>
                            <td>{{ optional($item->member)->fullname }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr><td colspan="5" style="text-align: center">Aucun véhicule disponible</td></tr>
                @endif
            </tbody>
        </table>
    </div>
</div>


@endsection
