    <!-- style Form -->
<style>
    #modal{
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    input{
        width:100%;
        padding:10px 15px;
        margin: 8px;
    }
</style>


        <div class="page">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="/"><img src="../images/logo-default-450x37.png" alt="" width="225" height="18"/></a>
                  </div>
                </div>
                <div class="rd-navbar-aside-right rd-navbar-collapse">
                  <ul class="rd-navbar-corporate-contacts">
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                        <div class="unit-body">
                          <p>09:00<span>am</span> — 05:00<span>pm</span></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                        <div class="unit-body"><a class="link-phone" href="tel:#">+62 888-777-6666</a></div>
                      </div>
                    </li>
                    <li>
                    @guest
                        @if (Route::has('login'))
                          <button type="button" class="button button-md button-default-outline-2 button-ujarak" data-toggle="modal" data-target="#loginModal">
                            LOGIN
                          </button>
                        @endif
                    @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                    @endguest
                    </li>
                  </ul>

                  <!-- class="button button-md button-default-outline-2 button-ujarak" -->
                  <!-- Modal -->
                  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginModal">Login Your Account</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="modal" method="POST" action="{{ route('login') }}">
                            @csrf
                                <table align="center">
                                <tr>
                                    <td><label for="email">E-mail</label></td>
                                    <td><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus></td>
                                    
                                    @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </tr>

                                <tr>
                                    <td><label for="password">password</label></td>
                                    <td><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"></td>
                                    
                                    @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </tr>

                                <tr>
                                    <td colspan="2"><br> belum memiliki akun? <a href="/register"> Klik disini!</a></td>
                                </tr>
                                </table>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                                  <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!-- end of modal -->

              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
                  <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                  </ul>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item {{ request()->is('/') ? 'active' : '' }}"><a class="rd-nav-link" href="/">Home</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">About</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Typography</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contact Us</a>
                    </li>
                    <li class="rd-nav-item {{ request()->is('register') ? 'active' : '' }}"><a class="rd-nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="rd-nav-item {{ request()->is('destinasi/') ? 'active' : '' }}">
                      <a class="rd-nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Destinasi
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item {{ request()->is('destinasi/1') ? 'active' : '' }}" href="/destinasi/1">Gorontalo</a>
                        <a class="dropdown-item {{ request()->is('destinasi/2') ? 'active' : '' }}" href="/destinasi/2">Sulawesi Barat</a>
                        <a class="dropdown-item {{ request()->is('destinasi/3') ? 'active' : '' }}" href="/destinasi/3">Sulawesi Selatan</a>
                        <a class="dropdown-item {{ request()->is('destinasi/4') ? 'active' : '' }}" href="/destinasi/4">Sulawesi Tenggara</a>
                        <a class="dropdown-item {{ request()->is('destinasi/5') ? 'active' : '' }}" href="/destinasi/5">Sulawesi Tengah</a>
                        <a class="dropdown-item {{ request()->is('destinasi/6') ? 'active' : '' }}" href="/destinasi/6">Sulawesi Utara</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>