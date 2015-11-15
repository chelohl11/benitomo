<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>@section('title') Colegio @show </title>
	<meta name="Autor" content="Marcelo Hidalgo" />
	<meta name="Descripcion" content="Sistema de Colegiados" />
	{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.css') !!}
	{!! Html::style('css/starter-template.css') !!}
	{!! Html::style('bower_components/bootstrap-material-design/dist/css/material.min.css') !!}
	{!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}
	{!! Html::style('bower_components/bootstrap-material-design/dist/css/material-wfont.min.css') !!}

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sistema Colegiados</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="#about">Quienes Somos</a></li>
            <li><a href="#contact">Preguntas Frecuentes</a></li>
            <li><a href="#contact">Contactenos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<!-- Cabecera de la pagina -->
	<div class="jumbotron">
		<div class="container">
			<h1>Hola Mundo</h1>
			<p>Estamos usando template para crear plantillas en laravel</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Ver mas...</a></p>
		</div>
	</div>
<!-- Contenido cambiante -->
	<div class="container">
		@yield('contenido')
	</div>
	
	{!! Html::script('bower_components/jquery/dist/jquery.js') !!}
	{!! Html::script('bower_components/bootstrap/dist/js/bootstrap.js') !!}
	{!! Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js') !!}
	{!! Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js') !!}
	
	<script type="text/javascript">

		$(document).on('ready', function(){
			$.material.init();
		});

	</script>

	@yield('js')

</body>
</html>