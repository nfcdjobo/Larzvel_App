@php
    $url = request()->url();
    $pathname = mb_strtolower(parse_url($url, PHP_URL_PATH), 'UTF-8');

@endphp

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
            <li class="{{strstr($pathname, mb_strtolower('dashboard', 'UTF-8')) ? 'hovered' : ''}}">
                <a href="{{ route('home') }}">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Tableau de Bord</span>
                </a>
            </li>
            <li class="{{strstr($pathname, mb_strtolower('Member', 'UTF-8')) ? 'hovered' : ''}}">
                <a href="{{ route('MemberController.index') }}">
                    <span class="icon">
                        <ion-icon name="logo-apple"></ion-icon>
                    </span>
                    <span class="title">Ma famille</span>
                </a>
            </li>
            <li class="{{strstr($pathname, mb_strtolower('car', 'UTF-8')) ? 'hovered' : ''}}">
                <a href="{{route('CarController.index')}}">
                    <span class="icon">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </span>
                    <span class="title">Vehicules</span>
                </a>
            </li>

            <li class="{{strstr($pathname, mb_strtolower('profile', 'UTF-8')) ? 'hovered' : ''}}">
                <a href="{{route('DashboardController.profile')}}">
                    <span class="icon">
                        <ion-icon name="logo-buffer"></ion-icon>
                    </span>
                    <span class="title">Profile</span>
                </a>
            </li>
        </ul>
    </div>
</div>
