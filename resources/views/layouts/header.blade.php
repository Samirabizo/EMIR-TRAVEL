<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">EMIR TRAVEL</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" class="active">Accueil</a></li>
          <li><a href="about.html">À propos</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="pricing.html">Tarifs</a></li>
          <li class="dropdown"><a href="#"><span>Pays</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Nigeria</a></li>
              <li><a href="#">Togo</a></li>
              <li><a href="#">Chine</a></li>
              <li><a href="#">Ghana</a></li>
              <li><a href="#">Corée</a></li>
            </ul>
          </li>
          <li><a href="{{ route("contact.form") }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{route('devis.send')}}">Demander un devis</a>

    </div>
  </header>
