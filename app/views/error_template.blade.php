<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Etienne Vincent en construction</title>
		<link href="{{ URL::to('css/principal.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::to('css/vip.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::to('css/atelier.css') }}" rel="stylesheet" type="text/css" />
	</head>
	<body>
		@include('menu_principal' )
		<p style="float:left;margin-top:50px;width: 100%;text-align:center;"> Cette page d'Etienne Vincent est en construction ...<br/><span style="font-size:0.8em;"><a href="{{ URL::previous() }}">Cliquez ici pour revenir &agrave; la page pr&eacute;c&eacute;dente</a></span></p>
	</body>
</html>