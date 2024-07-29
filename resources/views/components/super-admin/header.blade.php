<div class="topbar">            
                
    <nav class="navbar-custom">    
        <ul class="list-unstyled topbar-nav float-right mb-0">  
           

            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <span class="ml-1 nav-user-name hidden-sm">{{Auth::guard('super-admin')->user()->nama}}</span>
                    <i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i data-feather="settings" class="align-self-center icon-xs icon-dual mr-1"></i> Settings</a>
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" onclick="return confirm('Yakin Akan Logout !!')" href="{{url('logout')}}"><i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i> Logout</a>
                </div>
            </li>
        </ul>

        <ul class="list-unstyled topbar-nav mb-0">                        
            <li>
                <button class="nav-link button-menu-mobile">
                    <i data-feather="menu" class="align-self-center topbar-icon"></i>
                </button>
            </li> 
                                      
        </ul>
    </nav>
    
</div>