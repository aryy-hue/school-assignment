<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="/" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/home">Perjalanan Data</a></li>
                    <li><a class="nav-link" href="/user">User Data</a></li>
                </ul>
            </li>
            <li class="{{ request()->is('/form') ? 'active' : '' }}"><a class="nav-link" href="/form"><i
                        class="far fa-file-alt"></i> <span>Add Member</span></a></li>
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="/register" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-pencil-ruler"></i> Register
                </a>
            </div>
    </aside>
</div>
