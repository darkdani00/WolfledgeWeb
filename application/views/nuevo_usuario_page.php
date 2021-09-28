<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">

    <title>Crear Wolfedge</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-12 col-sm-8 col-12 mt-5">
                <div class="card">

                    <div class="card-body">
                        <div class="text-center">
                            <h2>Wolfedge</h2>
                            <br>
                            <p>Crea tu cuenta para ingresar <br>(Todos los campos son obligatorios).</p>
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
                    <?=form_open('Nuevo_usuario/crear_usuario');?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-1"></div>

                            <div class="col-5">
                                <label for="pName">Nombre (*)</label>
                                <input type="text" class="form-control" name="pName" placeholder="Ejemplo de Nombre">
                                <small
                                    class="text-help text-danger"><?=@$this->session->flashdata('errores')['pName'];?>
                                </small>
                            </div>

                            <div class="col-5">
                                <label for="pApellido1">Apellido Paterno (*)</label>
                                <input type="text" class="form-control" name="pApellido1"
                                    placeholder="Ejemplo Apellido">
                                <small
                                    class="text-help text-danger"><?=@$this->session->flashdata('errores')['pApellido1'];?>
                                </small>
                            </div>

                            <div class="col-1"></div>

                        </div>

                    </div>


                    <br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-1"></div>

                            <div class="col-5">
                                <label for="pApellido2">Apellido Materno (*)</label>
                                <input type="text" class="form-control" name="pApellido2"
                                    placeholder="Ejemplo de Apellido">
                                <small
                                    class="text-help text-danger"><?=@$this->session->flashdata('errores')['pApellido2'];?>
                                </small>
                            </div>

                            <div class="col-5">
                                <label for="pEdad">Edad (*)</label>
                                <input type="number" class="form-control" name="pEdad" placeholder="0">
                                <small
                                    class="text-help text-danger"><?=@$this->session->flashdata('errores')['pEdad'];?>
                                </small>
                            </div>

                            <div class="col-1"></div>

                        </div>

                    </div>

                    <br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-1"></div>

                            <div class="col-5">
                                <label for="pPais">Pais(*)</label>
                                <input type="text" class="form-control" name="pPais" placeholder="México">
                                <small
                                    class="text-help text-danger"><?=@$this->session->flashdata('errores')['pPais'];?>
                                </small>
                            </div>

                            <div class="col-5">
                                <label for="pEmail">Correo (*)</label>
                                <input type="email" class="form-control" aria-describedby="emailHelp" name="pEmail"
                                    placeholder="Ejemplo@ejemplo.com">
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
                                <label for="pPassword">Contraseña (*)</label>
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
                    <div class="form-group">
                        <div class="row">

                            <div class="col-1"></div>
                            <div class="col-10">
                                <p>Si quieres subir contendio, debes seleccionar "Profesor" de lo contrario sería
                                    "Estudiante".</p>
                                <label for="pPrivilegios">¿Quieres subir contenido a la plataforma? (*)</label>
                                <select class="form-control" id="pPrivilegios" name="pPrivilegios">
                                    <option>Estudiante</option>
                                    <option>Profesor</option>
                                </select>
                                <small
                                    class="text-help text-danger"><?=@$this->session->flashdata('errores')['pPrivilegios'];?>
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
                        <a href="<?=base_url('Access');?>">Regresa si tienes cuenta</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>
</body>

</html>