<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand align-items-center justify-content-center mb-5" href="{{url('/admin')}}">
        <div class="sidebar-brand-icon ">
            <img src="{{asset('images/website/headerLogo.png')}}" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">Edumodo</div>
    </a>
    <hr class="sidebar-divider my-0 mt-4">
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Contact
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('comments.index')}}">
            <i class="fas fa-envelope"></i>
            <span>Messages</span>
        </a>
    </li>
    <div class="sidebar-heading">
        Shop
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('products.index')}}">
            <i class="fas fa-store"></i>
            <span>Products</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('categories.index')}}">
            <i class="fas fa-stream"></i>
            <span>Categories</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('schooltypes.index')}}">
            <i class="fas fa-graduation-cap"></i>
            <span>School-types</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('comments.index')}}">
            <i class="fas fa-shipping-fast"></i>
            <span>Orders</span>
        </a>
    </li>
    <div class="sidebar-heading">
        Content
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="fas fa-user"></i>
            <span>Users</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('roles.index')}}">
            <i class="fas fa-users-cog"></i>
            <span>Roles</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('media.index')}}">
            <i class="fas fa-camera-retro"></i>
            <span>Photos</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
</ul>
