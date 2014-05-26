@extends ( 'template' )

@include ( 'menu_principal' )

@section( 'content' )
<div id="management">
	<p>Voulez-vous vraiment supprimer la biographie de {{ $musicien['firstname'] }} {{ $musicien['lastname'] }} ?</p>
	{{ Form::open( array( 'enctype' => 'multipart/form-data', 'url' => '/admin/supprimerUneBiographie/'.$musicien['id']) ) }}
	<input class="button" type="submit" value="Valider"/>
	{{ Form::close() }}
	<a class="button" href="../gestionDesBiographies">Retourner aux biographies</a>
</div>
@stop