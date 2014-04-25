@extends ( 'template' )

@include ( 'menu_principal' )

@section( 'content' )
<div>
	{{ Form::open( array( 'enctype' => 'multipart/form-data', 'url' => '/admin/ajouterUneBiographie') ) }}
	{{ Form::label( 'lastname', 'Nom du musicien : ' ) }}
	{{ Form::text( 'lastname' ) }}
	{{ Form::label( 'firstname', 'Prénom du musicien : ' ) }}
	{{ Form::text( 'firstname' ) }}
	{{ Form::label( 'biography', 'Sa biographie : ' ) }}
	{{ Form::textarea( 'biography' ) }}
	{{ Form::label( 'instrument', 'Son instrument : ' ) }}
	{{ Form::text( 'instrument' ) }}
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