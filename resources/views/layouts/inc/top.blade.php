<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 text-center text-lg-left">
                <!-- logo -->
                <a href="/" class="site-logo">
                    <img src="/img/logo.png" alt="">
                </a>
            </div>
            <div class="col-xl-6 col-lg-5">
                <form class="header-search-form">
                    <input type="text" placeholder="Search on gebeya">
                    <button><i class="flaticon-search"></i></button>
                </form>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="user-panel">
                    <i class="flaticon-profile"></i>
                    <div class="up-item">

                        <ul class="navbar-nav ml-auto up-item">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item up-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item up-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item up-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                    <div class="up-item">
                        <div class="shopping-card">
                            <i class="flaticon-bag"></i>
                            <span>0</span>
                        </div>
                        <a href="#">Shopping Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

