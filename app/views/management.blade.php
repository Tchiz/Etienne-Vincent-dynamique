@extends ( 'template' )

@section( 'content' )
<div id="management">
	@foreach( $musiciens as $musicien )
		<div>
			{{ $musicien->firstname.' '.$musicien->lastname }}
		</div>
	@endforeach
	<a href="./editerUneBiographie">Ajouter une biographie</a>
</div>
@stop