<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-md">
    <a class="navbar-brand" href="{{ route('dashboard') }}">
      {{ config('app.name', 'Laravel') }}
    </a>

    <x-navbar.toggler target="navbarNavDropdown" />

    <div
        class="collapse navbar-collapse justify-content-end"
        id="navbarNavDropdown">
      <ul class="navbar-nav">
        @auth
          <x-navbar.nav-authenticated />
        @endauth
        @guest
          <x-navbar.nav-guest />
        @endguest
      </ul>
    </div>
  </div>
</nav>
