<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Etienne Vincent {{ $title }}</title>
		<link href="{{ URL::to('css/principal.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::to('css/vip.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::to('css/atelier.css') }}" rel="stylesheet" type="text/css" />
	</head>
<body>
	@yield('menu_principal' )
	<nav class="secondaire">
		<ul>
			@foreach ( $secondMenuList as $item )
				@if ( $item['link'] == Request::segment(2) )
				<li class="actif">
				@else
				<li>
				@endif
					<a href="{{ URL::to('groupes/'.$item['link']) }}">{{ $item['label'] }}</a>
					@if ( isset($item['menuList']) )
						<span class="sous-secondaire">
						@foreach ( $item['menuList'] as $subItem )
							@if ( $subItem['link'] == Request::segment(3) )
							<a class="actif" href="./{{ $subItem['link'] }}">{{ $subItem['label'] }}</a>
							@else
							<a href="./{{ $subItem['link'] }}">{{ $subItem['label'] }}</a>
							@endif
						@endforeach
						</span>
					@endif
				</li>
			@endforeach
		</ul>
	</nav>
	@yield ( 'content' )
</body>
</html>