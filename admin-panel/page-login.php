<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <title>Admin Panel</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.mialin.js')
    -->
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Admin Panel</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="index.php">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>INICIAR SESI&Oacute;N</h3>
          <div class="form-group">
            <label class="control-label">USUARIO</label>
            <input class="form-control" type="text" placeholder="Usuario" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">CONTRASE&Ntilde;A</label>
            <input class="form-control" type="password" placeholder="Contrase&ntilde;a">
          </div>
          <div class="form-group">
            <!--
            <div class="utility">
              <div class="animated-checkbox">
                <label class="semibold-text">
                  <input type="checkbox"><span class="label-text">Mantener conectado</span>
                </label>
              </div>
              <p class="semibold-text mb-0"><a data-toggle="flip">Olvid&eacute; la contrase&ntilde;a</a></p>
            </div>
            -->
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" style="line-height:30px;margin-top:35px;"><i class="fa fa-sign-in fa-lg fa-fw"></i>INGRESAR</button>
          </div>
        </form>
        <!--
        <form class="forget-form" action="index.php">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Olvid&eacute; la contrase&ntilde;a</h3>
          <div class="form-group">
            <label class="control-label">CORREO</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESTABLECER</button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i>Volver a Iniciar Sesi&oacute;n</a></p>
          </div>
        </form>
        -->
      </div>
    </section>
  </body>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script src="js/main.js"></script>
</html>