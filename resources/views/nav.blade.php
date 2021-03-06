
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow with-3d-shadow">
        <div class="container">




            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel Test') }}
            </a>




            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>




            <div class="collapse navbar-collapse" id="navbarSupportedContent">


                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/customers">customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">contact</a>
                    </li>
                </ul>


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <div class="btn-group">
                                    <a id="" class="btn btn-secondary btn-sm" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        
                                        <a class="btn btn-secondary btn-sm" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                        </a>
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                        </li>
                    @endguest
                </ul>


            </div>




        </div>
</nav>