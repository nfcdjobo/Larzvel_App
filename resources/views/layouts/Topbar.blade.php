<div class="superbar">
    <div class="toggle" id="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>

    <div class="search">
        <label htmlFor="">
            <input type="text" name="" placeholder="Recherche"/>
            <ion-icon name="search-outline"></ion-icon>
        </label>
    </div>

    <div class="user">
        <button onclick="if(confirm('Voullez-vous fermer la session ?')){document.querySelector('.deconnexion').submit()}">Déconnxion</button>
    </div>
    <form class="deconnexion" action="{{route('DashboardController.deconnexion')}}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
