<!DOCTYPE html>

<!--Verificacion de el inicio de sesion-->
<?php
    //creamos la sesion
    session_start();
    //validamos si se ha hecho o no el inicio de sesion correctamente
    //si no se ha hecho la sesion nos regresará a login.php
    if(!isset($_SESSION['usuarioFacultad']))
    {
      header('Location: ../index.php');
      exit();
    }
?>


<!--
<?php
 require_once '../clases/trabajoGraduacion.php';
 $trabajoGraduacion = TrabajoGraduacion::recuperarMensajes($_GET['id']);
?>
-->


<html>
  <head>
    <meta charset="utf-8">
    <title>Trabajos de graduacion | Unicaes</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="../plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="../plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="../plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="../plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-red">

    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="facultad.php" class="logo">UNICAES</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">

           <!--Cuadro superior de usuarios-->
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Facultad</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $_SESSION['identificador']?>  - Facultad
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">

                    <div class="pull-right">
                      <a href="../logout.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>


          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Facultad</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->


          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU DE NAVEGACIÓN</li>
            <li class="active treeview">
              <a href="../facultad.php">
                <i class="fa fa-home"></i> <span>Escritorio</span>
              </a>
            </li>
            <li class="treeview">
              <a href="estadoMenu.php?patron=">
                <i class="fa fa-puzzle-piece"></i>
                <span>Asignar Nuevo Trabajo</span>
              </a>
            </li>
            <li>
              <a href="estadoMenu.php?patron=">
                <i class="fa fa-th"></i> <span>Trabajos de Graduación</span>
              </a>
            </li>
            <li>
              <a href="revisionMenu.php?patron=">
                <i class="fa fa-check-square-o"></i>
                <span>Revisiones</span>
              </a>
            </li>
            <li>
              <a href="calendarioMenu.php?patron=">
                <i class="fa fa-calendar"></i> <span>Calendario</span>

              </a>
            </li>
            <li>
              <a href="mensajeMenu.php?patron=">
                <i class="fa fa-comments"></i> <span>Mensajes</span>

              </a>
            </li>

            <li><a href="expedienteMenu.php?patron="><i class="fa fa-book"></i> Expediente</a></li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
              <h1>
                Mensajes
                <small>Trabajo de Graduacion</small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="../facultad.php"><i class="fa fa-dashboard"></i> Escritorio</a></li>
                <li class="active">Mensajes</li>
              </ol>
        </section>


        <!-- Main content -->
        <section class="content">


          <div class="box box-danger direct-chat direct-chat-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Chat</h3>
                  <div class="box-tools pull-right">

                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">




                <?php foreach($trabajoGraduacion as $item): ?>

                <?php if ($item['usuario']==1): ?>
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left"><?php echo $item['Remitente']; ?></span>
                        <span class="direct-chat-timestamp pull-right"><?php echo $item['Fecha']; ?></span>
                      </div><!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="../dist/img/avatar.png" alt="message user image"><!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                       <?php echo $item['Mensajecol']; ?>
                      </div><!-- /.direct-chat-text -->
                    </div>


                <?php else: ?>
                            <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right"><?php echo $item['Remitente']; ?></span>
                        <span class="direct-chat-timestamp pull-left"><?php echo $item['Fecha']; ?></span>
                      </div><!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="../dist/img/avatar.png" alt="message user image"><!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        <?php echo $item['Mensajecol']; ?>
                      </div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->



                <?php endif ?>


                <?php endforeach; ?>












                  </div><!--/.direct-chat-messages-->



                </div><!-- /.box-body -->
                <!-- /.box-footer-->
              </div>

        </section>

        <!-- /.content -->
      </div><!-- /.content-wrapper -->



    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="../plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="../plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
