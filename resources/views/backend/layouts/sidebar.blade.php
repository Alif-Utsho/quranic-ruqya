<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/" target="_blank">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ $generalsetting->name }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Medias
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#audios"
            aria-expanded="true" aria-controls="audios">
            <i class="fas fa-fw fa-book"></i>
            <span>Audios</span>
        </a>
        <div id="audios" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('audio.add') }}">Create</a>
                <a class="collapse-item" href="{{ route('audio.manage') }}">Manage</a>
            </div>
        </div>
    </li>
    {{--

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Services</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('service.create') }}">Create</a>
    <a class="collapse-item" href="{{ route('service.manage') }}">Manage</a>
    </div>
    </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#concerns"
            aria-expanded="true" aria-controls="concerns">
            <i class="fas fa-fw fa-business-time"></i>
            <span>Concerns</span>
        </a>
        <div id="concerns" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('concern.create') }}">Create</a>
                <a class="collapse-item" href="{{ route('concern.manage') }}">Manage</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Sections
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#homesectionCollapse"
            aria-expanded="true" aria-controls="homesectionCollapse">
            <i class="fas fa-fw fa-table"></i>
            <span>Home</span>
        </a>
        <div id="homesectionCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('homesection.edit') }}">Sections</a>
                <a class="collapse-item" href="{{ route('homeoffer.manage') }}">Offers</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('about.edit') }}">
            <i class="fas fa-fw fa-address-card"></i>
            <span>About</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#aboutCollapse"
            aria-expanded="true" aria-controls="aboutCollapse">
            <i class="fas fa-fw fa-table"></i>
            <span>About Contents</span>
        </a>
        <div id="aboutCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('aboutsection.create') }}">Create</a>
                <a class="collapse-item" href="{{ route('aboutsection.manage') }}">Manage</a>
            </div>
        </div>
    </li>
    --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Website Settings
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('user.add') }}">Add</a>
                <a class="collapse-item" href="{{ route('user.manage') }}">Manage</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#banners"
            aria-expanded="true" aria-controls="banners">
            <i class="fas fa-fw fa-images"></i>
            <span>Banners</span>
        </a>
        <div id="banners" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('banner.add') }}">Add</a>
                <a class="collapse-item" href="{{ route('banner.manage') }}">Manage</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#category"
            aria-expanded="true" aria-controls="category">
            <i class="fas fa-fw fa-list-ul"></i>
            <span>Categories</span>
        </a>
        <div id="category" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('category.add') }}">Add</a>
                <a class="collapse-item" href="{{ route('category.manage') }}">Manage</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('generalsetting.edit') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>General Settings</span></a>
    </li>

    {{--
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contact.edit') }}">
    <i class="fas fa-fw fa-address-book"></i>
    <span>Contacts</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('socialicon.manage') }}">
            <i class="fas fa-fw fa-link"></i>
            <span>Social Links</span></a>
    </li>
    --}}



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->