<div class="menu">
	<h1>
		Etienne Vincent
		Guitariste
	</h1>
	<nav class="principal">
		<ul>
			@foreach ( $firstMenuList as $item )
				@if ( $item['link'] == Request::segment(1) )
				<li class="isWorking">
				@else
				<li>
				@endif
					<a href="./{{ $item['link'] }}">{{ $item['label'] }}</a>
				</li>
			@endforeach
		</ul>
	</nav>
</div>