<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/home">RESTO AGAWNN</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('home') }}"><i
                        class="fa-solid fa-chart-pie"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Pages</li>
            <li class="{{ Request::is('users') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="fa-solid fa-user"></i><span>Users</span>
                </a>
            </li>
            <li class="{{ Request::is('categories') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('categories.index') }}">
                    <i class="fa-solid fa-layer-group"></i><span>Category</span>
                </a>
            </li>
            <li class="{{ Request::is('products') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('products.index') }}">
                    <i class="fa-solid fa-cube"></i><span>Product</span>
                </a>
            </li>
</div>
