{{-- @dump(session('error')) --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El-Coche | Login and Register</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-page">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        {{-- @elseif ($success->any())
            <div class="alert alert-success">Compte crée avec succès !</div> --}}
        @endif
        <div class="form">
          <form class="register-form" method="POST" action={{route('create.user')}} enctype="multipart/form-data">
            @csrf
            <input type="text" name='fullname' placeholder="Nom et Prénom(s)" required/>
            <input type="email" name='email' placeholder="Adresse E-mail" required/>
            <input type="text" name='phone' placeholder="Téléphone"/>
            <input type="password" name='password' placeholder="Mot de passe" required/>
            <input type="password" name='password_confirmation' placeholder="Confirmer mot de passe" required/>
            
             <label for="remember"><input type="checkbox" name='remember' value="yes"/> Se Souvenir de moi </label>

            <button>Créer</button>
            <p class="message">J'ai déjà un compte ? <a href="#">me connecter</a></p>
          </form>
          <form class="login-form" method="POST">
            @csrf
            <input type="email" name='email' placeholder="Adresse E-mail" required/>
            <input type="password" name='password' placeholder="Mot de passe" required/>
            <button>Connexion</button>
            <p class="message">Je n'ai pas, me compte ? <a href="#">S'inscrire</a></p>
          </form>
        </div>


      </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{ asset('javascript/login.js') }}"></script>

</html>
