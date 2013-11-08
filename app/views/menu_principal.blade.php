<div class="menu">
	<h1>
		Etienne Vincent
		{{ $title }}
	</h1>
	<nav class="principal">
		<ul>
			@foreach ( $firstMenuList as $item )
				@if ( $item['link'] == Request::segment(1) )
				<li class="isWorking">
				@else
				<li>
				@endif
					<a href="{{ URL::to($item['link']) }}">{{ $item['label'] }}</a>
				</li>
			@endforeach
		</ul>
	</nav>
</div>