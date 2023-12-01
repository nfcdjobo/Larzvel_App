<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <title>{{ config('app.name') }}</title>

    </head>
    <body>
        <main class="main">
            <!-- Header -->
            <header class="header">
              <div class="container flex-between">
                <div class="logo">
                  El-Coche
                </div>
                <nav class="main-navgation flex-between flex-ver-top">
                  <div class="nav-links">
                    <a href="#resources"></a>
                  </div>
                  <div class="nav-buttons">
                    <a href="{{ route('login')}}" class="log-in">Connexion</a>
                    <a href="{{ route('register')}}" class="sign-up btn btn-sm">Inscription</a>
                  </div>
                </nav>
                <div class="burger-menu">
                  <i class="fa-regular fa-bars icon"></i>
                </div>
              </div>
            </header>
            <!-- Landing -->
            <section class="landing">
              <div class="landing-text">
                <h1>Mettez la main sur la gestion de vos véhicules</h1>
                <a href="{{ route('login')}}" class="btn btn-lg">Commencer</a>
              </div>
              <div class="landing-image">
                <img src="https://www.synox.io/wp-content/uploads/2022/01/conseils-optimiser-gestion-parc-automobile-iot.jpg" alt="Working Illustration" />
              </div>
            </section>
            
            
            <!-- Footer -->
            <footer class="footer" id="resources">
              <div class="container">
                <!-- Website Logo -->
                <div class="logo">
                  <a href="#">
                    El-Coche
                  </a>
                </div>
                <!-- Quick Links -->
                <div class="quick-links">
                  <div class="links-group">
                    <span>Resources</span>
                    <div>
                      <a href="#">.</a>
                      
                    </div>
                  </div>
                  
                  
                </div>
                <!-- Social Media -->
                <div class="social-media">
                  <a href="#">
                    <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-facebook.svg" alt="Facebook Logo">
                  </a>
                  <a href="#">
                    <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-twitter.svg" alt="Twitter Logo">
                  </a>
                  <a href="#">
                    <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-pinterest.svg" alt="Pinterest Logo">
                  </a>
                  <a href="#">
                    <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-instagram.svg" alt="Instagram Logo">
                  </a>
                </div>
              </div>
              
            </footer>
          </main>
    </body>
    <script src="{{ asset('javascript/toggle.js')}}"></script>
</html>
