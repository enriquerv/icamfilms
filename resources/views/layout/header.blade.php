<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
   <div class="container-fluid">
      <a class="navbar-brand" href="#">
         <img src="{{ asset('assets/images/logo.png') }}" alt="Logo ICam Films" class="nav-logo ms-5">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav ms-auto me-5">
            <li class="nav-item">
               <a class="nav-link {{ $active == 'index' ? 'active' : '' }}" aria-current="page" href="{{ env('APP_URL') }}/">HOME</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ $active == 'aboutus' ? 'active' : '' }}" href="#">NOSOTROS</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ $active == 'products' ? 'active' : '' }}" href="#">SERVICIOS</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ $active == 'portfolio' ? 'active' : '' }}" href="#">PORTAFOLIO</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ $active == 'contact' ? 'active' : '' }}" href="#">CONTÁCTANOS</a>
            </li>
         </ul>
      </div>
   </div>
</nav>