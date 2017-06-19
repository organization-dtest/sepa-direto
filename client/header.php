<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de Atendimento de Chamados</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Sistema de Atendimento de Chamados</a>
            </div>
             <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
				<button type="button" action = "<?php session_destroy();?>">Sair</button>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="editarPerfil.html"><i class="fa fa-user fa-fw"></i> Perfil do usuário</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
 
                             <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Chamados<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Visualização de Chamados</a>
                                </li>
                                <li>
                                    <a href="meusChamados.php"><i class="fa fa-table fa-fw"></i> Meus Chamados</a>
                                </li>
                                <li>
                                    <a href="pesquisarChamado.php"><i class="fa fa-edit fa-fw"></i> Pesquisar Chamado</a>
                                </li>
                                <li>
                                    <a href="abrirChamado.php"><i class="fa fa-edit fa-fw"></i> Abrir Chamado</a>
								</li>
                        </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Gerenciamento<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="criarFila.html"><i class="fa fa-dashboard fa-fw"></i>Criar Fila</a>
                                </li>
                                <li>
                                    <a href="criarEtapa.html"><i class="fa fa-table fa-fw"></i> Criar Etapa</a>
                                </li>
                                <li>
                                    <a href="criarUsuario.html"><i class="fa fa-edit fa-fw"></i>Criar Usuário</a>
								</li>
								<li>
                                    <a href="listarFilas.html"><i class="fa fa-edit fa-fw"></i>Listagem de Filas</a>
								</li>
                        </li>
                            </ul>
                        </li>
						<li>
						<a href="#"><i class="fa fa-sitemap fa-fw"></i>Conta<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="trocarSenha.html"><i class="fa fa-dashboard fa-fw"></i>Trocar senha</a>
                                </li>
								<li>
                                    <a href="login.php"><i class="fa fa-dashboard fa-fw"></i>Login</a>
                                </li>
                        </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
	</body>