@extends ( 'template' )

@include ( 'menu_principal' )

@section( 'content' )
<div>
	@if ($musicien['id'])
		{{ Form::open( array( 'enctype' => 'multipart/form-data', 'url' => '/admin/modifierUneBiographie') ) }}
		{{ Form::hidden( 'id', $musicien['id'] ) }}
	@else
		{{ Form::open( array( 'enctype' => 'multipart/form-data', 'url' => '/admin/ajouterUneBiographie') ) }}
	@endif
	
	{{ Form::label( 'id_group_of_musicians', 'Fait parti du groupe : ' ) }}
	{{ Form::select('id_group_of_musicians', $groups, $musicien['id_group']) }}
	{{ Form::label( 'lastname', 'Nom du musicien : ' ) }}
	{{ Form::text( 'lastname', $musicien['lastname'] ) }}
	{{ Form::label( 'firstname', 'Prénom du musicien : ' ) }}
	{{ Form::text( 'firstname', $musicien['firstname'] ) }}
	{{ Form::label( 'biography', 'Sa biographie : ' ) }}
	{{ Form::textarea( 'biography', $musicien['biography'] ) }}
	{{ Form::label( 'instrument', 'Son instrument : ' ) }}
	{{ Form::text( 'instrument', $musicien['instrument'] ) }}
	{{ Form::label( 'uploadedPicture', 'Son portrait : ' ) }}
	{{ Form::hidden( 'MAX_FILE_SIZE', '1600000' ) }}
	{{ Form::file( 'uploadedPicture' ) }}
	<!-- 
		Limiter la taille du fichier en poids et en hauteur/largeur
		Renommer le fichier
	-->
	{{ Form::submit( 'Ajouter/Modifier une biographie' ) }}
	{{ Form::close() }}
</div>
@stop