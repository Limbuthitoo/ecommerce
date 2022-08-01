<nav class="navbar navbar-expand-md  bg-light py-3">
    <div class="container d-flex">
        <div>
            <a class="navbar-brand" href="/"><img src="{{asset($company->logo)}}" width="225" alt="" class="img-fluid"></a>
        </div>

        <div class="container">
            <form class=" d-flex align-items-center" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>

        <div class="ms-auto">
            <div class="d-flex align-items-center">
                <div class="align-items-end">
                    @guest
                    <a type="button" class="fw-bold fs-5 py-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Login
                    </a>
                    <x-frontend.login />
                    @else
                        <ul class="navbar-nav me-end mb-2 ms-auto mb-md-0">
                            <li class="nav-item dropdown d-flex">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user" style="font-size:25px"><span> {{Auth::user()->name}}</span></i>
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
                <div class="text-end" style="width:100px">
                    <a type="button" class="btn btn-success text-white" href=""><span><i class="fa fa-shopping-cart" style="font-size: 25px" aria-hidden="true"></i></span><span class="fs-5 fw-bold"> Cart</span> </a>
                </div>
            </div>

        </div>
    </div>
  </nav>
