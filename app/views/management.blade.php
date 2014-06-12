@extends ( 'template' )

@include ( 'menu_principal' )

@section( 'content' )
<div id="management">
	@foreach( $items as $item )
		<div class="item">
			<div>{{ $item['label'] }}</div>
			<div class="button"><a href="./{{ $editURL }}/{{ $item['id'] }}">+</a></div>
			@if ( $deleteURL )
			<div class="button"><a href="./{{ $deleteURL }}/{{ $item['id'] }}">-</a></div>
			@endif
		</div>
	@endforeach
	<a class="button" href="./{{ $editURL }}">{{ $buttonText }}</a>
</div>
@stop