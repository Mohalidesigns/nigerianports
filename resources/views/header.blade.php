<header>
          <nav class="navbar navbar-expand-lg topnav-menu navbar-light zindex-10" >
            <div class="container">
              <a class="navbar-brand" href="/">
                <img src="{{asset('ui/images/logo.png')}}" height="70" class="d-inline-block align-top" alt="" />
              </a>
              <a href="#" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content3"
                aria-controls="topnav-menu-content3" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </a>
              <div class="collapse navbar-collapse" id="topnav-menu-content3">

                  <ul class="navbar-nav align-items-lg-center mx-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="/">Home</a>
                      </li>
                       <li class="nav-item">
                          <a class="nav-link" href="/search">Truck Search</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('truck.create')}}">Truck Requirement</a>
                      </li>

                  </ul>

                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="btn btn-secondary btn-sm" href="{{ route('login') }}">Login</a>
                    </li>
                  </ul>


              </div>
            </div>
          </nav>
        </header>
