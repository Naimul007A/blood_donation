<header class="bg-light py-2">
    <div class="container">
        <div class="main-header ">
            <div class="row">
                <div class="col-12 col-md-6 py-2">
                    <div class="heading">
                        <h2 class="m-0 text-center">
                            <a href="{{ route('home') }}" class="site-title">Blood Donation</a>
                        </h2>
                    </div>
                </div>
                <div class="m-auto col-12 col-md-6 py-2">
                    <div class="d-flex justify-content-end">
                        @guest
                            <a href="{{ route('user.login') }}/" class="btn1 btn">Login</a>
                            <a href="{{ route('user.registration') }}/" class="btn1 btn">Sing up</a>
                        @else
                            <div class="dropdown">
                                <button class="btn btn1 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Hello , {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('user.profile') }}/">Profile</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Change Password</a></li>
                                    <li><a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a></li>
                                </ul>
                            </div>

                        @endguest

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
