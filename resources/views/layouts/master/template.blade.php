<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>@section('title') Benitomo @show </title>
	<meta name="Autor" content="Marcelo Hidalgo" />
	<meta name="Descripcion" content="Sistema de Colegiados" />
	{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.css') !!}
	{!! Html::style('css/starter-template.css') !!}
	{{--!! Html::style('bower_components/bootstrap-material-design/dist/css/material.min.css') !!}
	{!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}
	{!! Html::style('bower_components/bootstrap-material-design/dist/css/material-wfont.min.css') !!--}}

</head>
<body style="background-image: url('{{ asset('img/fondo.png') }}');">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="collapse-2">
                <!--form class="navbar-form navbar-left" role="search"-->
                <form style=" padding-top: 10px;" class="form-inline navbar-left" role="form" method="post" action="">

                    @if(Auth::check())
                        <div class="form-group">
                            {if Session::get('level') neq 4}
                            <a href="#" class="btn"><i class="glyphicon glyphicon-fire"> </i> Administrar</a>
                            {else}
                            <a href="#" class="btn"><i class="glyphicon glyphicon-fire"> </i> Afiliado</a>
                            {/if}

                            <a href="#" class="btn"><i class="glyphicon glyphicon-remove-sign"> </i> logout</a>
                        </div>
                    @else
                        <input type="hidden" value="1" name="enviar">
                        <div class="form-group">
                            <label class="sr-only" for="usuario">Login</label>
                            <input type="text" name="usuario" class="form-control input-sm" id="usuario" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="pass">Password</label>
                            <input name="pass" type="password" class="form-control input-sm" id="pass" placeholder="Password">
                        </div>


                        <button type="submit" class="btn btn-primary btn-sm">Login</button>


                        <!--input name="usuario" type="text" class="form-control input-sm" placeholder="Usuario">
                        <input name="pass" type="password" class="form-control input-sm" placeholder="Password"-->
                    @endif


                </form>

                <p class="navbar-text navbar-right">
                    <a style="text-decoration:none" href="#" class="navbar-link">
                        <span class="glyphicon glyphicon-earphone"></span>
                        (+591) 12132432435
                    </a>
                </p>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Fin Barra Superior Fixed -->

    <!-- Contenedor principal blanco -->
    <div class="container" style="background-color: #fff; margin-top: 60px; border-radius: 7px 7px 7px 7px; padding-top: 10px;">
        <div>
            <div style="background-color: #38363a;">
                <div class="nav" role="navigation" style="margin-left: 0px; border-left: 0px;">
                    <ul class="first-level">
                        <li><a href="#" title="login">Log in</a></li>
                        <li><a href="#" title="Regristrarse">Registrarse</a></li>
                        <li><a href="#" title="Pedido">Pedido</a></li>
                        <li><a href="#" title="Mi Cuenta">Mi Cuenta</a></li>


                    </ul>

                </div>


            </div>

            <div class="row" style="background-color: #424044; margin: 0px;">

                <div class="col-md-4" style="padding: 20px;">
                    <img src="{{ asset('img/logo.png') }}" class="img-responsive" alt="Responsive image">
                </div>



                <div class="col-md-8" style="background-image: url('{{ asset('img/buscador.png') }}'); background-repeat: no-repeat; background-position: bottom right; padding-bottom: 10px;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <form name="buscador" id="buscador" style="text-align: right;">
                        <input type="text" id="buscador" name="buscador" placeholder="Buscar...">
                        <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                        </button>
                    </form>
                </div>

            </div>

            <!-- MENU PRINCIPAL -->
            <div>
                <nav class="navbar navbar-default" style="background-color: #e5e5e5;  margin-bottom: 10px; border-bottom: 1px solid #C6C6C6;">
                    <div class="container-fluid" style="padding: 0px; border: 0px;">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="MenuPrincipal" >
                            <ul class="nav navbar-nav" id="menu_ul">
                                <li > <a href="#">INICIO</a></li>
                                <li > <a href="#">NOSOTROS </a></li>
                                <li > <a href="#">PARTES</a></li>
                                <li > <a href="#">PREGUNTAS</a></li>
                                <li > <a href="#">CONTACTENOS</a></li>

                            </ul>


                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
            <!-- FIN MENU PRINCIPAL -->
        </div>


        <!-- CONTENIDO CENTRAL CAMBIANTE -->
        <div>
            <noscript><p>Para el correcto funcionamiento debe tener el soporte para javascript habilitado</p></noscript>

            @if (isset($errors) && count($errors) > 0)
                <div id="_errorList" class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <strong>Ups!</strong> Las credenciales que ingresaste no coinciden con nuestros registros.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (isset($mensajes) && count($mensajes) > 0)
                <div id="_mensajesList" class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Ups!</strong> Las credenciales que ingresaste no coinciden con nuestros registros.<br><br>
                    <ul>
                        @foreach ($mensajes->all() as $msn)
                            <li>{{ $msn }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('contenido')



        </div>

        <!-- FIN CONTENIDO CENTRAL CAMBIANTE -->


        <!-- Footer -->

        <div class="panel-footer" style="background-color: #424044; padding-top:0; margin-bottom: 10px; border-top: 5px solid #C80C1A;">
            <h3 style="color:#FFF; text-align: center;">BENITOMO</h3><!--h5 style="color:#b8b8b8;">KONRAD &copy; 2014 - All right reserved</h5-->
        </div>
        <!-- Fin Footer -->
    </div>
    <!-- Fin contenedor principal blanco -->


	
	{!! Html::script('bower_components/jquery/dist/jquery.js') !!}
	{!! Html::script('bower_components/bootstrap/dist/js/bootstrap.js') !!}
	{{--!! Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js') !!}
	{!! Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js') !!--}}
	
	<script type="text/javascript">

		/*$(document).on('ready', function(){
			$.material.init();
		});*/

	</script>

	@yield('js')

</body>
</html>