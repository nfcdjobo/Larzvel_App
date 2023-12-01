<div class="container">
    <div class="navigation">
        <ul class="ul">
            <li>
                <a href="">
                    <span class="icon">
                        <ion-icon name="car-sport-outline"></ion-icon>
                    </span>
                    <span class="title">El-Coche</span>
                </a>
            </li>
            <li class=''>
                <a href="{{ route('home') }}">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Tableau de Bord</span>
                </a>
            </li>
            <li class=''>
                <a href="{{ route('MemberController.index') }}">
                    <span class="icon">
                        <ion-icon name="logo-apple"></ion-icon>
                    </span>
                    <span class="title">Ma famille</span>
                </a>
            </li>
            <li class=''>
                <a href="{{route('CardController.index')}}">
                    <span class="icon">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </span>
                    <span class="title">Vehicules</span>
                </a>
            </li>

            <li class=''>
                <a href="">
                    <span class="icon">
                        <ion-icon name="logo-buffer"></ion-icon>
                    </span>
                    <span class="title">Historique</span>
                </a>
            </li>
            
            
            <li class=''>
                <a href="/historiques">
                    <span class="icon">
                        <ion-icon name="logo-buffer"></ion-icon>
                    </span>
                    <span class="title">Historique</span>
                </a>
            </li>
            
            <li class=''>
                <a href="/parametres/collaborateur">
                    <span class="icon">
                        <ion-icon name="cog-outline"></ion-icon>
                    </span>
                    <span class="title">Paramètres</span>
                </a>
            </li>

            <li class=''>
                <a href="/corbelle">
                    <span class="icon">
                        <ion-icon name="trash-outline"></ion-icon>
                    </span>
                    <span class="title">Corbelle</span>
                </a>
            </li>
        </ul>
    </div>
</div>
