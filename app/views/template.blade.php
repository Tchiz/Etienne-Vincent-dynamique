<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Etienne Vincent {{ $title }}</title>
		<link href="css/principal.css" rel="stylesheet" type="text/css" />
		<link href="css/vip.css" rel="stylesheet" type="text/css" />
		<link href="css/atelier.css" rel="stylesheet" type="text/css" />
	</head>
<body>
	@yield('menu_principal' )
	@if ( $withBandeau )
	<div class="bandeau"></div>
	@endif
	@yield ( 'content' )
</body>
</html>