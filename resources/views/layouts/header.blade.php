<style>
.dropbtn {
  background-color: #4bbd89;
  color: #FFFFFF;
  padding: 3px;
  font-size: 14px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #FFFFFF;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  background-color:  #4bbd89;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color:  #4bbd89;
}
</style>


<header class="site-header" style="background-color: #4bbd89; width: 400px;">
    <div class="container-fluid">
        <div class="site-header-content">
            <div class="site-header-content-in">
                <div class="site-header-shown">
                    
                </div>
            </div>
        </div>

        <ul class="main-nav nav-inline" style="padding: px 0; text-align: align-left;">
            <div class="row" style="background-image: linear-gradient(to right, #4bbd89 , white);">
                <a class="nav-link kz-nav-link " href="{{ url('/home') }}" style="background-color: #8bd5b3; color:#FFFFFF">
                    <i class="fa fa-home "></i>
                    <div class="dropdown">
                    <button class="dropbtn" id="dd-user-menu" type="button" data-toggle="dropdown" ria-haspopup="true" aria-expanded="false" style="background-color: #8bd5b3;">
                            <span><img src="https://img.icons8.com/ios/15/000000/menu.png">    Menu</span>
                            <div class="dropdown-menu-center dropdown-content" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}">
                                    {{ __('Home') }}
                                </a>
                                <a class="dropdown-item" href="{{ url('/antrian/antrian') }}">
                                    {{ __('Antrian') }}
                                </a>
                                <a class="dropdown-item" href="{{ url('/delivery') }}">
                                    {{ __('Delivery') }}
                                </a>
                                <a class="dropdown-item" href="{{ url('/riwayatOrder') }}">
                                    {{ __('Riwayat Order') }}
                                </a>
                                <a class="dropdown-item" href="{{ url('/Invoice') }}">
                                    {{ __('Invoice') }}
                                </a>
                                <a class="dropdown-item" href="{{ url('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </button>
                    </div>
                </a>
            
            </div>
        </ul>
    </div>
</header>
