@extends ( 'template' )

@include ( 'menu_principal' )

@section( 'content' )
<div id="management">
	@foreach( $musiciens as $musicien )
		<div class="item">
			<div>{{ $musicien->firstname.' '.$musicien->lastname }}</div>
			<div class="button">+</div>
			<div class="button">-</div>
		</div>
	@endforeach
	<a href="./editerUneBiographie">Ajouter une biographie</a>
</div>
@stop