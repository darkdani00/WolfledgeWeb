<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">

    <title>Login Wolfedge</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-8 col-md-8 col-sm-8 col-12 mt-5">
                <div class="card">

                    <div class="card-body">
                        <div class="text-center">
                            <h2>Wolfedge</h2>
                            <br>
                            <p>Ingresa con tu correo y contraseña</p>
                        </div>
                    </div>
                    <!--Mensaje error-->
                    <?php if($this->session->flashdata('error_msg')){ ?>
                    <div class="text-center">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><?=@$this->session->flashdata('error_msg');?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <?php } ?>
                    <!---->

                    <?=form_open('Access/doLogin');?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">

                                <label for="pEmail">Email</label>
                                <input type="email" class="form-control" aria-describedby="emailHelp" name="pEmail"
                                    placeholder="ejemplo@ejemplo.com">
                                <small
                                    class="text-help text-danger"><?=@$this->session->flashdata('errores')['pEmail'];?>
                                </small>

                            </div>
                            <div class="col-1"></div>
                        </div>

                    </div>
                    <br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <label for="pPassword">Contraseña</label>
                                <input class="form-control" placeholder="Contraseña" autocomplete="off" type="password"
                                    name="pPassword">
                                <small
                                    class="text-help text-danger"><?=@$this->session->flashdata('errores')['pPassword'];?>
                                </small>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>

                    <br>

                    <div class="text-center">
                        <button type="submit" class="btn btn-dark btn-lg btn-block">Entrar</button>
                    </div>

                    <br>
                    <?=form_close();?>
                    <div class="mt-2 text-center">
                        <a href="<?=base_url('Nuevo_usuario');?>">¿No tienes cuenta? / Crea una nueva</a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="<?=base_url("assets/js/plugins/bootstrap/dist/js/bootstrap.min.js");?>"></script>
</body>

</html>