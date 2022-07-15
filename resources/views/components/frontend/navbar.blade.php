<nav class="navbar navbar-expand-md d-flex bg-light py-3">
    <div class="container">
      <a class="navbar-brand" href="#">EZ-Mart</a>

      <form class="container d-flex justify-content-center align-items-center " role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>


        @guest
            <a class="nav-item btn btn-success d-md-flex justify-content-md-end order-md-second" href="/login">Login</a>
        @else
            <ul class="navbar-nav me-end mb-2 ms-auto mb-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="My Cart" href="#">Action</a></li>
                        <li><a class="My Profile" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                       </li>
                    </ul>
                </li>
            </ul>
        @endguest
    </div>
  </nav>
