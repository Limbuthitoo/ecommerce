

<nav class="navbar bg-light py-3">
    <div class="container d-flex">
        <div>
            <a class="navbar-brand" href="/"><img src="{{asset($company->logo)}}" width="150" alt="" class="img-fluid"></a>
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

                <div class="dropdown px-2 nav-item">
                    <button type="button" class="btn btn-success nav-link text-white" style="width:100px; height:40px" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span>{{ count((array) session('cart')) }}</span>
                    </button>
                    <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
                        <div class="row total-header-section">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i><span> Your Cart</span><span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-6 text-end">
                                <a href="{{ route('cart') }}" class="text-Success">View all</a>
                            </div>

                        </div>
                        <table>
                            @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <tr class="row cart-detail" data-id="{{ $id }}">
                                    <td class="col-lg-3 col-sm-3 col-3 cart-detail-img">
                                        <img src="{{ $details['image'] }}" />
                                    </td>
                                    <td class="col-lg-7 col-sm-7 col-7 cart-detail-product">
                                        <p>{{ $details['name'] }}</p>
                                        <span class="price text-success fw-bold"> Rs {{ $details['price'] }}</span> <span class="count" style="font-size: 12px"> Quantity:{{ $details['quantity'] }}</span>
                                    </td>
                                    <td class="col-lg-2 col-sm-2 col-2 p-3 ">
                                        <button class="btn btn-danger btn-sm text-white remove-from-cart" type="button"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </table>
                        <hr>
                        <div class="row align-items-center">
                            @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach
                            <div class="col-lg-6 col-sm-6 col-6">
                                <p><span>{{ count((array) session('cart')) }} items </span> <br> <span class="text-success" style="font-size: 15px;"> Rs {{ $total }}</span></p>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-6 text-end ">
                                @guest
                                <a type="button" class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Checkout
                                </a>
                                <x-frontend.login />
                                @else
                                    <a href="/" class="btn btn-success text-white">Checkout</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="container py-3">
    <form class="d-flex w-100" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>

