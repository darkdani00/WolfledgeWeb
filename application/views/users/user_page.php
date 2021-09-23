<!DOCTYPE html>
<html lang="es">
<?=@$head;?>

<body class="">
    <?=@$menu;?>
    <div class="main-content">
        <?=@$nav;?>
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">

                </div>
            </div>
        </div>
        <div class="container-fluid mt--7">
            <!-- Table -->
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <h3 class="mb-0">Lista de Usuarios</h3>
                        </div>
                        <div class="card-content m-2">
                            <div class="row">
                                <div class="col-12">
                                <button class="btn btn-default" id="add_user"><i class="fas fa-plus"></i> New User</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?=@$footer;?>
        </div>
    </div>
    <?=@$scripts;?>
</body>

</html>