{{-- Topbar header - style you can find in pages.scss --}}
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        {{-- Logo --}}
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                {{-- Logo icon --}}
                <b>
                    {{-- Dark Logo icon --}}
                    <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />

                    {{-- Light Logo icon --}}
                    <img src="{{asset('assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                </b>
                {{-- End Logo icon --}}
                {{-- Logo text --}}
                <span>
                    {{-- dark Logo text --}}
                    <img src="{{asset('assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />

                    <img src="{{asset('assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" /></span> </a>
        </div>
        {{-- End Logo --}}
        <div class="navbar-collapse">
            {{-- toggle and nav items --}}
            <ul class="navbar-nav mr-auto mt-md-0">
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
            </ul>
            {{-- User profile and search --}}
            <ul class="navbar-nav my-lg-0">
                {{-- Profile --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/users/1.jpg')}}" alt="user"
                          class="profile-pic" /></a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="{{asset('assets/images/users/1.jpg')}}" alt="user">
                                    </div>
                                    <div class="u-text">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <p class=" text-muted">{{ Auth::user()->email }}</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
{{-- End Topbar header --}}
