 <nav class="navbar navbar-expand-sm navbar-light navbar-laravel">
        <a class="navbar-brand" href="{{ url('/') }}">
           <img src="https://i.ibb.co/GvP1KsC/logo.jpg" id="mylogo">
        </a>
        <!--  -->
        <!-- <div class="center search-dashboard">
          <form action="/userdashboard" method="get">
            <div class="input-group mb-3 w-50">
              <input type="text" class="form-control" placeholder="Search Jobs" aria-label="Amount (rounded to the nearest dollar)" aria-describedby="basic-addon" name="search">
              <div class="input-group-append">
                <button class="input-group-text bg-info text-light" id="basic-addon" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>
        </div> -->
        <!--  -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @guest
            <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/userdashboard">Gaseste Anunturi<span class="sr-only">(current)</span></a>
                </li>
              </ul>
            @else
            @if(Auth::user()->role == 1)
                <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/userdashboard">Gaseste Anunturi<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/profile/{{str_slug(strtolower(Auth::user()->name), '-')}}">Profil</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/my-jobs">Anunturile Mele</a>
                    </li> -->

                  </ul>
             @endif

             @if(Auth::user()->role == 2)
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/jobs">Anunturi<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/dashboard">Panou de Control</a>
                    </li>

                 </ul>
             @endif
             @if(Auth::user()->role == 3)
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/panel/freelancer">Clienti<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/panel/clients">Vanzatori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/panel/jobs">Anunturi</a>
                    </li>
                  </ul>
              @endif


            @endguest


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto list-group">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="{{ route('login') }}">Autentificare</a></li>
                    <li><a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="{{ route('register') }}">Inregistrare</a></li>
                    <li><a class="nav-link" href=""><button class="btn btn-sm align-middle btn-info" type="button">Posteaza Anunt</button></a></li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if(Auth::user()->role == 1)
                                <a href="/dashboard" class="dropdown-item" >Setarile Contului</a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
</nav>

<!-- <nav class="navigation-header-container">
  <div class="navigation-header-wrapper">
    <div class="left-side-navigation">
      <a class="navbar-brand" href="{{ url('/') }}">
         <img src="{{ asset('storage/assets/logo.jpeg') }}" id="mylogo">
      </a>
    </div>
    <div class="right-side-navigation">
<ul>
  <li></li>
  <li></li>
</ul>
    </div>
  </div>
</nav> -->
