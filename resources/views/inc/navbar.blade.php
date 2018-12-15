<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
         
      

 <div class = "container" >

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
           <li> <a class="nav-link" href="{{ route('index') }}">{{config('app.name')}}</a></li>
           <li class="nav-item active">
            <a class="nav-link" href="/tourguide/public">Home <span class="sr-only">(current)</span></a>
          </li>
           <li class="nav-item">
            <a class="nav-link disabled" href="/tourguide/public/posts">Blog</a>
          </li>
   
        </ul>
  
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
              
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Admin-Login') }}</a>
            </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                   
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/tourguide/public/dashboard">Dashboard</a> 
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
    </div>
</nav>