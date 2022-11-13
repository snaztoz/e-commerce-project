{{-- Mobile view --}}
<ul class="d-lg-none navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
  </li>
  <li class="nav-item">
    <a
        class="nav-link"
        href="#"
        onclick="event.preventDefault(); document.querySelector('#logout-form').submit();" >
      {{ __('Logout') }}
    </a>
  </li>
</ul>

{{-- Desktop view --}}
<ul class="navbar-nav d-none d-lg-block">
  <li class="d-none d-lg-block nav-item dropdown">
    <a
        class="nav-link dropdown-toggle"
        role="button"
        href="#"
        data-bs-toggle="dropdown"
        aria-expanded="false" >
      {{ Auth::user()->name }}
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li>
        <a
            class="dropdown-item"
            href="#"
            onclick="event.preventDefault(); document.querySelector('#logout-form').submit();" >
          {{ __('Logout') }}
        </a>
      </li>
    </ul>
  </li>
</ul>

{{-- Hidden logout form --}}
<form
    id="logout-form"
    action="{{ route('logout') }}"
    method="POST"
    class="d-none" >
  @csrf
</form>
