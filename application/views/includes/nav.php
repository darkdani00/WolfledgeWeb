<div>

    <nav class="navbar navbar-blue" style="background-color: #6a11cb;">

        <div class="container-fluid">


            <!--Buscar-->
            <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Buscar</button>
                </form>
            </div>
            <!--Buscar-->

            <!--Perfil-->
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="media align-items-center">
                        <div class="media-body ml-2 d-lg-block">
                            <span class="mb-0 text-sm text-white font-weight-bold mr-1">
                            <?=@$session->correo_usuario;?>Usuario
                            </span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Wolflede</h6>
                    </div>
                    <a href="javascript:;" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>Perfil</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?=base_url('Access/logout');?>" class="dropdown-item">
                        <i class="ni ni-log-out"></i>
                        <span>Cerrar Sesión</span>
                    </a>
                </div>
            </li>
        </div>
        <!--Perfil-->

    </nav>
</div>