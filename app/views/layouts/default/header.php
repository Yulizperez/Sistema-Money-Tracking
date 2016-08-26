
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Gestión</title>
    <link rel="stylesheet" href="<?php echo APP_URL; ?>views/layouts/default/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>views/layouts/default/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>views/layouts/default/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="<?php echo APP_URL; ?>views/layouts/default/js/jquery-3.1.0.min.js"></script>
    <script src="<?php echo APP_URL; ?>views/layouts/default/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Money System</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="<?php echo APP_URL; ?>users">Usuarios</a></li>
                    <li><a href="<?php echo APP_URL; ?>transactions">Trassacciones</a></li>
                    <li><a href="<?php echo APP_URL; ?>categories">Categorias</a></li>
                    <li><a href="<?php echo APP_URL; ?>accounts">Cuentas</a></li>
                    <li><a href="<?php echo APP_URL; ?>users/logout">Salir</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">