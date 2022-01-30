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
          <li class="nav-item "> <a href="/" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
          <li class="{{ (request()->is('/form')) ? 'active' : '' }}"><a class="nav-link" href="/form"><i class="far fa-file-alt"></i> <span>Form Member</span></a></li>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Information
          </a>
        </div>
    </aside>
  </div>