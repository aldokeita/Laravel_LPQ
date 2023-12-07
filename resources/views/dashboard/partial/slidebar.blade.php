<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
            <span style="font-size: 10px">LPQ AL-MUHAJIRUN</span>
            <p style="font-size: 8px">{{auth()->user()->name}}</p>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main Menu
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{Request::is('dashboard')? 'active' : ''}}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <!-- Nav Item - SISWA -->
    <li class="nav-item {{Request::is('dashboard/siswa*')? 'active' : ''}}">
        <a class="nav-link collapse#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
            <span>Siswa</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @can('manage_siswa')
                <a class="collapse-item" href="{{route('siswa.index')}}">Siswa</a>
                <a class="collapse-item" href="{{route('kelas.index')}}">Kelas</a>
                <a class="collapse-item" href="{{route('jadwal.index')}}">Jadwal</a>
                @endcan
                @can('manage_infaq')
                <a class="collapse-item" href="{{route('infaq.index')}}">Infaq</a>
                @endcan

            </div>
        </div>
    </li>


    @can('manage_news')
    <!-- Nav Item - News -->
    <li class="nav-item {{Request::is('dashboard/news*')? 'active' : ''}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsenews"
            aria-expanded="true" aria-controls="collapsenews">
            <i class="fas fa-fw fa-folder"></i>
            <span>News</span>
        </a>
        <div id="collapsenews" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('news.index')}}">News</a>
                <a class="collapse-item" href="{{route('category.index')}}">Category</a>
            </div>
        </div>
    </li>
    @endcan

    @can('manage_user')
    <!-- Nav Item - setting -->
    <li class="nav-item {{Request::is('dashboard/setting*')? 'active' : ''}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesetting"
            aria-expanded="true" aria-controls="collapsesetting">
            <i class="fas fa-fw fa-folder"></i>
            <span>Setting</span>
        </a>
        <div id="collapsesetting" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{route('user.index')}}">User</a>
            </div>
        </div>
    </li>
    @endcan

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{Request::is('dashboard/setting*')? 'active' : ''}}">
        <a class="nav-link" href="{{route('setting')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
