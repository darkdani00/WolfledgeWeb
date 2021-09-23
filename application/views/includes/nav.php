<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
  <div class="container-fluid">
    <a class="h4 mb-0 text-white text-uppercase d-lg-inline-block ml-1" href="javascript:;"><?=@$modulo ? $modulo :  'Sin título';?></a>
    <ul class="navbar-nav align-items-center d-md-flex">
      <li class="nav-item dropdown">
        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
              <img alt="Image placeholder" src="<?=base_url('assets/img/theme/team-4-800x800.jpg');?>">
            </span>
            <div class="media-body ml-2 d-lg-block">
              <span class="mb-0 text-sm text-white font-weight-bold mr-1">Nombre de usuario</span>
            </div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
          <div class=" dropdown-header noti-title">
            <h6 class="text-overflow m-0">Bienvenido</h6>
          </div>
          <a href="javascript:;" class="dropdown-item">
            <i class="ni ni-single-02"></i>
            <span>Mi perfil</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#!" class="dropdown-item">
            <i class="ni ni-user-run"></i>
            <span>Salir</span>
          </a>
        </div>
      </li>
    </ul>
  </div>
</nav>
