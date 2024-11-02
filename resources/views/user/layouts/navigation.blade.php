<div class="header">
   
    <nav class="navbar top-navbar navbar-expand-md navbar-light" style="background: #29347a">
        <div class="navbar-header">
            <a class="navbar-brand" href="/user">
                     <img src="{{ asset('chevron/chevron-logo.jpg') }}" alt="homepage" class="dark-logo" style="width:40px"/> 
                <span class="small text-light">{{ env('SITE_NAME') }}</span>
            </a>
        </div>

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
                <li class="nav-item">
                    <a class="nav-link toggle-nav hidden-md-up text-muted" href="javascript:void(0)">
                        <i class="fa fa-bars text-light"></i>
                    </a>
                </li>
                <li class="nav-item m-l-10">
                    <a class="nav-link sidebartoggle hidden-sm-down text-muted" href="javascript:void(0)">
                        <i class="fa fa-bars text-light"></i>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                    <div class="dropdown-menu dropdown-menu-right animated slideInRight">
                        <ul class="dropdown-user">
                            
                            <li><a href="{{ route('user.dashboard') }}"> User Dashboard</a></li>
                            
                            {{-- <li><a href="/user/security"> Security</a></li>
                            
                            <li><a href="/user/logout"> Logout</a></li> --}}
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>