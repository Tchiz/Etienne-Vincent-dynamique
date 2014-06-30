@extends ( 'vip_template' )

@include ( 'menu_principal' )

@section( 'content' )
<div class="vip">
	<h2>Etienne Vincent Quartet</h2>
	<h3>Les musiciens</h3>
	@foreach( $musiciens as $musicien )
		<figure class="musicien">
			<figcaption>
				{{ $musicien->firstname.' '.$musicien->lastname }} 
				- {{ $musicien->instrument }}
			</figcaption>
			<img 
				src="../../media/images/{{ $musicien->pictureName }}" 
				alt="
					{{ $musicien->firstname.' '.$musicien->lastname }} 
					- {{ $musicien->instrument }}
				" 
				title="
					{{ $musicien->firstname.' '.$musicien->lastname }} 
					- {{ $musicien->instrument }}
				" />
			<p>
				{{ $musicien->biography }}
			</p>
		</figure>
	@endforeach
</div>
@stop