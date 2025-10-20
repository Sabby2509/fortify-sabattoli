<nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
<div class="container-fluid">
<a class="navbar-brand" href="{{route('homepage')}}"><i class="bi bi-camera-reels-fill"></i></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/chi-siamo">Chi siamo</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/test">Test</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('contacts')}}">Contattaci</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
I nostri servizi
</a>
<ul class="dropdown-menu">

<li><a href="{{route('movie.create')}}" class="dropdown-item" >Inserisci il film</a></li>
<li><a href="{{route('movie.index')}}" class="dropdown-item" >tutti i film</a></li>
<li><a href="{{route('genre.create')}}" class="dropdown-item" >Inserisci la categoria</a></li>
<li><a href="{{route('genre.index')}}" class="dropdown-item" >tutte le categorie</a></li>


<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{ route('movie.index') }}">Tutti i film</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('movie.create') }}">Inserisci il tuo film</a>
    </li>
  </ul>
</div>
</ul>
</li>
<li class="nav-item dropdown">
    @auth
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{ route('user.profile') }}" class="dropdown-item">Il mio profilo</a>-
            </li>
            <li>
               <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();" class="dropdown-item">Logout</a>
               <form action="{{ route('logout') }}" method="POST" style="display: none;" id="form-logout">@csrf</form>
             </li>
          </ul>
          @else
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, Ospite!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
        </ul>
        @endauth
        </li>
</ul>
</div>
</div>
</nav>