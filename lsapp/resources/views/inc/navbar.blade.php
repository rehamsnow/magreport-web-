        <nav class="navbar navbar-inverse fixed-top">
          <div class="container">
              <div class="navbar-header">

                  <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                      <span class="sr-only">Toggle Navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

                  <!-- Branding Image -->
                  <a class="navbar-brand" href="{{ url('/') }}">
                      {{ config('app.name', 'Laravel') }}
                  </a>
              </div>

                  <ul class="nav navbar-nav">
                      <!--/.<li><a href="/">Home</a></li> -->
                      <!--/.<li><a href="/about">About</a></li> -->
                      <!--/. <li><a href="/newsandannouncements">News & Announcements</a></li> -->
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="/newsann" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">News & Announcements <span class="caret"></span></a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="drop-down item" href="/newsann">News & Announcements</a></li>
                              <li><a class="drop-down item" href="/newsann/create">Create</a></li>
                          </ul>
                      </li>
                      <li><a href="/report">Reports</a></li>
                      
                    </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-right">
                      <!-- Authentication Links -->
                      @if (Auth::guest())
                          <li><a href="{{ route('login') }}">Login</a></li>
                          <li><a href="{{ route('register') }}">Register</a></li>
                      @else
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::user()->user_fname }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">
                                  <li><a href="/dashboard">Dashboard</a></li>
                                  <li><a href="/dash">Dashboard</a></li>
                                  <li>
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                              </ul>
                          </li>
                      @endif
                  </ul>
              </div>
          </div>
      </nav>