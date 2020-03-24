<aside class="left-sidebar">
    {{-- Sidebar scroll --}}
    <div class="scroll-sidebar">
        {{-- User profile --}}
        {{-- <div class="user-profile" style="background: url(assets/images/background/user-info.jpg) no-repeat;"> --}}
        <div class="user-profile" style="background-image: url('{{ asset('assets/images/background/user-info.jpg')}}');">
            {{-- User profile image --}}
            <div class=" profile-img">
                <img src="{{asset('storage/pics/'.Auth::user()->image)}}" class="profile-pic" alt="user">
            </div>
            {{-- User profile text --}}
            <div class="profile-text"> <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{ Auth::user()->name }}</a>
            </div>
        </div>
        {{-- End User profile text --}}

        {{-- Sidebar navigation --}}
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">Uji Kompetensi 2020</li>
                <li>
                    <a class="waves-effect waves-dark" href="{{route('home')}}"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-laptop-windows"></i><span class="hide-menu">Data Master</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Online Auction System</a></li>
                        <li><a href="#">Contribution of Education Development</a></li>
                        <li><a href="#">Public Complaints Report</a></li>
                        <li><a href="#">Laundry Management System</a></li>
                    </ul>
                </li>
                <li>
                    {{-- Ditampilkan hanya untuk admin --}}
                    @role('admin')
                    <a class="waves-effect waves-dark" href="{{route('admin.samples.index')}}"><i class="mdi mdi-database"></i><span class="hide-menu">Data Sample </span></a>
                    @endrole

                    {{-- Ditampilkan hanya untuk staff --}}
                    @role('staff')
                    <a class="waves-effect waves-dark" href="{{route('staff.samples.index')}}"><i class="mdi mdi-database"></i><span class="hide-menu">Data Sample </span></a>                                    
                    @endrole

                    {{-- Ditampilkan hanya untuk user --}}
                    @role('user')
                    <a class="waves-effect waves-dark" href="{{route('user.samples.index')}}"><i class="mdi mdi-database"></i><span class="hide-menu">Data Sample </span></a>
                    @endrole
                </li>
            </ul>
        </nav>
        {{-- End Sidebar navigation  --}}
    </div>
    {{-- End Sidebar scroll --}}
    {{-- Bottom points --}}
    <div class="sidebar-footer">
        {{-- item --}}
        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        {{-- item --}}
        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        {{-- item --}}
        <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    {{-- End Bottom points --}}
</aside>
