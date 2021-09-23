<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Login Wolfledge
    </title>

</head>

<body class="bg-default">
    <div class="main-content">
        <div class="header bg-gradient-primary py-7 py-lg-8">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">Sistema de control de Alamacen</h1>
                            <p class="text-lead text-light">Ingresa tu usuario y clave para acceder al Sistema, acceso
                                restringido para Almacenistas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Entrar usandos tus credenciales</small>
                            </div>
                            <?php if(@$this->session->flashdata('error_msg')) { ?>
                            <div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times</span>
                                </button>
                                <h3><?=$this->session->flashdata('error_msg');?></h3>
                            </div>
                            <?php } ?>
                            <?=form_open('access/doLogin');?>

                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Email" type="email" name="pEmail">
                                </div>
                                <small
                                    class="text-help text-danger"><?=@$this->session->flashdata('errores')['pEmail'];?></small>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Password" type="password" name="pPassword">
                                </div>
                                <small
                                    class="text-help text-danger"><?=@$this->session->flashdata('errores')['pPassword'];?></small>
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                <label class="custom-control-label" for=" customCheckLogin">
                                    <span class="text-muted">Mantener la sesión</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Entrar</button>
                            </div>
                            <?=form_close();?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <a href="#" class="text-light"><small>¿Olvidaste tu contraseña?</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="py-5">
            <div class="container">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-12">
                        <div class="copyright text-center text-muted">
                            © 2021 <a href="https://upsrj.edu.mx/ingenieria-en-software/" class="font-weight-bold ml-1"
                                target="_blank">UPSRJ - Ing. Software - SW14 </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="<?=base_url('assets/js/plugins/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?=base_url('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?=base_url('assets/js/argon-dashboard.min.js?v=1.1.0');?>"></script>
</body>

</html>