<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
        <img src="{{asset('frontend/images/apilink_logo_dark.png')}}" alt="ApiLink" style="max-height: 40px;
    width: auto;
    margin: 0 auto;
    text-align: center;opacity: .8">
        <!-- <span class="brand-text font-weight-light">ApiLink</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <a href="javascript:void(0);">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
        </div> -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="javascript:void(0);" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                        {{__("messages.dashboard")}}
                        </p>
                    </a>
                </li>
                @php $locale = session()->get('locale'); @endphp
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        @switch($locale)
                        @case('en')
                        <img height="20px" width="30px" src="{{asset('admin\dist\img\EN.png')}}">English
                        @break
                        @case('fr')
                        <img height="20px" width="30px" src="{{asset('admin\dist\img\fr.png')}}">French
                        @break
                        @default
                        <img height="20px" width="30px" src="{{asset('admin\dist\img\fr.png')}}"> <p>French</p>
                        @endswitch
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu lang  dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('languagee/en')}}"><img height="20px" width="30px" src="{{asset('admin\dist\img\EN.png')}}">English</a>
                        <a class="dropdown-item" href="{{url('languagee/fr')}}"><img height="20px" width="30px" src="{{asset('admin\dist\img\fr.png')}}">French</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{route('widget.index')}}" class="nav-link {{ request()->is('widget*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            {{__("messages.widget")}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('partner.index')}}" class="nav-link {{ request()->is('partner*') ? 'active' : '' }}">
                        <i class="far fa-handshake"></i>&nbsp;&nbsp;
                        <p>
                            {{__("messages.partner")}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link {{ request()->is('user*') ? 'active' : '' }}">
                        <i class="far fa-user"></i>&nbsp;&nbsp;
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('job.index')}}" class="nav-link {{ request()->is('job*') ? 'active' : '' }}">
                        <i class="far fa-user"></i>&nbsp;&nbsp;
                        <p>
                            Jobs
                        </p>
                    </a>
                </li>
                @php $i=1; @endphp
                <li class="nav-item">
                    <a href="{{route('contact.edit',$i)}}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                        <i class="far fa-address-book"></i>&nbsp;&nbsp;
                        <p>
                            {{__("messages.contact")}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('skill.index')}}" class="nav-link {{ request()->is('skill*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            {{__("messages.skills")}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contact.index')}}" class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            {{__("messages.contact us")}}
                        </p>
                    </a>
                </li>


                <!-- <li class="nav-item menu-open">
                    @if(Auth::guard('admin')->check())
                    <form action="{{route('admin.logout')}}" method="POST">
                        @csrf
                        <a href="javascript:void(0);" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>{{__("messages.logout")}}</p>
                        </a>
                    </form>
                    @else

                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <a href="#" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </form>

                    @endif
                </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>