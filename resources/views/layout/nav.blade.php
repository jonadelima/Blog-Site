<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40px">
      </a>

      <!-- Hamburger Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible Menu -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto align-items-center">
          <!-- Home Link -->
          <li class="nav-item">
            @if(Auth::check())
              <a class="nav-link text-light" href="{{ route('home') }}">Home</a>
            @else
              <a class="nav-link text-light" href="{{ route('user-home') }}">Home</a>
            @endif
          </li>

          <!-- Places Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="placesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Places
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="placesDropdown">
              <li><a class="dropdown-item" href="{{ route('places.beaches_resorts') }}">Beaches/Resorts</a></li>
              <li><a class="dropdown-item" href="{{ route('places.cities') }}">Cities</a></li>
              <li><a class="dropdown-item" href="{{ route('places.landscapes') }}">Landscapes</a></li>
            </ul>
          </li>

          <!-- About Us Link -->
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('about') }}">About Us</a>
          </li>

          <!-- User Dropdown -->
          @if(Auth::check())
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                @if(Auth::user()->profile)
                  <img src="{{ asset('storage/' . Auth::user()->profile) }}" style="width: 30px; height: 30px; border-radius: 50%;" alt="Profile">
                @endif
                {{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a></li>
              </ul>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary nav-link text-light" href="{{ route('register') }}">Sign Up</a>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
