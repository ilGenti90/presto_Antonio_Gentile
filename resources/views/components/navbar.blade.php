<!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top hidden">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('homepage') }}">Presto.it</a>
      
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="{{ route('homepage') }}">Contattaci</a>
        </li>

        @auth

        <li class="nav-item dropdown">
          <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao , {{ Auth::user()->name }}
          </a>

          <ul class="dropdown-menu dropdown-menu-matrix dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ route('create.article') }}">Crea un articolo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"
              onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
            </li>
            <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">
              @csrf
            </form>
          </ul>
        </li>

      @else

      <li class="nav-item dropdown">
          <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao , Utente!
          </a>
        
       <ul class="dropdown-menu dropdown-menu-matrix dropdown-menu-end">
        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
        </ul>
      </li>
      
        @endauth

      </ul>
    </div>
  </div>
</nav>