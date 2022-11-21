<li class="nav-item dropdown">
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
        Logout
      </a>
      <form
          id="logout-form"
          action="{{ route('logout') }}"
          method="POST"
          class="d-none" >
        @csrf
      </form>
    </li>
  </ul>
</li>
