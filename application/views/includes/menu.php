<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand pt-0" href="javascript:;">
      <img src="<?=base_url('assets/img/brand/blue.png');?>" class="navbar-brand-img" alt="...">
    </a>
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="javascript:;">
              <img src="<?=base_url('assets/img/brand/blue.png');?>">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <ul class="navbar-nav">
        <li class="nav-item <?=@$selected == 'Home' ? 'active' : ''; ?>">
        <a class=" nav-link " href="<?=site_url('home');?>"> <i class="ni ni-tv-2 text-primary"></i> Home
          </a>
        </li>
        <li class="nav-item <?=@$selected == 'Users' ? 'active' : ''; ?>">
        <a class=" nav-link " href="<?=site_url('users');?>"> <i class="fas fa-users text-primary"></i> Usuarios
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
