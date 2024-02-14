<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>The Aulab Post</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">The Aulab Post</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              @guest
                  <li class="nav-item">
                    <a class="nav-link btn btn-success" href="{{route('register')}}">Registrati</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link btn btn-warning">Accedi</a>
                  </li>
              @endguest
              @auth
              <li class="nav-item justify-content-end">
                <a class="nav-link">{{Auth::user()->name}}</a>
              </li>
              <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
                <form method="POST" action="{{route('logout')}}" style="display: none" id="form-logout">
                  @csrf
                </form>
                @if (Auth::user()->is_writer == true)
                <li class="nav-item">
                  <a class="nav-link" href="{{route('articles.create')}}">Pubblica Articolo</a>
                </li>
                @endif
                
              </li>
              @if (Auth::user()->is_admin == true)
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dashboard')}}">Dashboard Amministratori</a>
              </li>
              @endif
              @if (Auth::user()->is_revisor == true)
              <li class="nav-item">
                <a class="nav-link" href="{{route('revisor.dashboard')}}">Dashboard Revisori</a>
              </li>
              @endif
              @endauth
              <li class="nav-item">
                <a class="nav-link" href="{{route('work.with.us')}}">Lavora con noi</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</body>
</html>


