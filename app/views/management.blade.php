@extends ( 'template' )

@include ( 'menu_principal' )

@section( 'content' )
<div id="management">
	@foreach( $musiciens as $musicien )
		<div class="item">
			<div>{{ $musicien->firstname.' '.$musicien->lastname }}</div>
			<div class="button"><a href="./editerUneBiographie/{{ $musicien->id }}">+</a></div>
			<div class="button"><a href="./supprimerUneBiographie/{{ $musicien->id }}">-</a></div>
		</div>
	@endforeach
	<a class="button" href="./editerUneBiographie">Ajouter une biographie</a>
</div>
@stop