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
                    <a href="#resources">Resources</a>
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
                <h1>More than just shorter links</h1>
                <p>
                  Build your brand’s recognition and get detailed insights on how your
                  links are performing.
                </p>
                <a href="{{ route('login')}}" class="btn btn-lg">Commencer</a>
              </div>
              <div class="landing-image">
                <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/illustration-working.svg" alt="Working Illustration" />
              </div>
            </section>
            <!-- Features -->
            <section class="features" id="features">
              <div class="container">
                <!-- Short URL Feature -->
                <div class="url-shorten-feature">
                  <form class="url-shorten-form" id="url-shorten-form">
                    <div>
                      <input type="text" class="url-input" placeholder="Shorten a link here..." autocomplete="off" />
                      <span class="alert"></span>
                    </div>
                    <button type="submit" class="btn btn-lg btn-plus-icon">Shorten It!</button>
                  </form>
                  <div class="url-shorten-results"></div>
                </div>
                <!-- Advanced Features -->
                <div class="more-features">
                  <div class="section-header">
                    <h2>Advanced Statistics</h2>
                    <p>
                      Track how your links are performing across the web with our
                      advanced statistics dashboard.
                    </p>
                  </div>
                  <div class="more-features-content">
                    <div class="feature">
                      <div class="feature-illustration">
                        <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-brand-recognition.svg" alt="Feature Illustration Icon" />
                      </div>
                      <div class="feature-details">
                        <h3>Brand Recognition</h3>
                        <p>
                          Boost your brand recognition with each click. Generic links
                          don’t mean a thing. Branded links help instil confidence in
                          your content.
                        </p>
                      </div>
                    </div>
                    <div class="feature">
                      <div class="feature-illustration">
                        <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-detailed-records.svg" alt="Feature Illustration Icon" />
                      </div>
                      <div class="feature-details">
                        <h3>Detailed Records</h3>
                        <p>
                          Gain insights into who is clicking your links. Knowing when
                          and where people engage with your content helps inform
                          better decisions.
                        </p>
                      </div>
                    </div>
                    <div class="feature">
                      <div class="feature-illustration">
                        <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-fully-customizable.svg" alt="Feature Illustration Icon" />
                      </div>
                      <div class="feature-details">
                        <h3>Fully Customizable</h3>
                        <p>
                          Improve brand awareness and content discoverability through
                          customizable links, supercharging audience engagement.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            
            <!-- Footer -->
            <footer class="footer" id="resources">
              <div class="container">
                <!-- Website Logo -->
                <div class="logo">
                  <a href="#">
                    <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/logo.svg" alt="" />
                  </a>
                </div>
                <!-- Quick Links -->
                <div class="quick-links">
                  <div class="links-group">
                    <span>Features</span>
                    <div>
                      <a href="#">Link Shortening</a>
                      <a href="#">Branded Links</a>
                      <a href="#">Analytics</a>
                    </div>
                  </div>
                  <div class="links-group">
                    <span>Resources</span>
                    <div>
                      <a href="#">Blog</a>
                      <a href="#">Developers</a>
                      <a href="#">Support</a>
                    </div>
                  </div>
                  <div class="links-group">
                    <span>Company</span>
                    <div>
                      <a href="#">About</a>
                      <a href="#">Our Team</a>
                      <a href="#">Careers</a>
                      <a href="#">Contact</a>
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
              <!-- Made By -->
              <div class="attribution">
                Challenge by <a href="https://www.frontendmentor.io?ref=challenge" class="outer-link" target="_blank">Frontend Mentor</a>.
                Coded by <span class="outer-link">Mohamed Aridah</span>.
                <ul class="social-media">
                  <li>
                    <a href="https://www.codepen.io/FedLover" title="go To My Codepen Account">
                      <i class="fa-brands fa-codepen icon"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.frontendmentor.io/profile/MohamedAridah" title="go To My Frontend Mentor Account">
                      <img src="https://mohamedaridah.github.io/hosted-assets/FEM.png" class="image" alt="">
                    </a>
                  </li>
                </ul>
              </div>
            </footer>
          </main>
    </body>
    <script src="{{ asset('javascript/toggle.js')}}"></script>
</html>
