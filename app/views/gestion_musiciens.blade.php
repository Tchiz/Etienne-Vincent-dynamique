@extends ( 'template' )

@include ( 'menu_principal' )

@section( 'content' )
<div>	
	@if ($musicien['id'])
	
		<!-- le formulaire de liens vers des groupes n'apparaît que lorsque le musicien existe (= à la modification) -->
		{{ Form::open( array( 'enctype' => 'multipart/form-data', 'url' => '/admin/GererGroupesDuMusicien/'.$musicien['id']) ) }}
		{{ Form::label( 'id_group_of_musicians', 'Fait parti du groupe : ' ) }}
		@foreach($groups as $group)
			{{ Form::checkbox('options[]', $group['id'], isset($checkedGroupList[$group['id']])? true : false) }}
			{{	$group['label'] }}
		@endforeach
		{{ Form::submit( 'Modifier les groupes liés' ) }}
		{{ Form::close() }}
		<!-- fin formulaire -->
		
		{{ Form::open( array( 'enctype' => 'multipart/form-data', 'url' => '/admin/modifierUneBiographie') ) }}
		{{ Form::hidden( 'id', $musicien['id'] ) }}
	@else
		{{ Form::open( array( 'enctype' => 'multipart/form-data', 'url' => '/admin/ajouterUneBiographie') ) }}
	@endif
	{{ Form::label( 'lastname', 'Nom du musicien : ' ) }}
	{{ Form::text( 'lastname', $musicien['lastname'] ) }}
	{{ Form::label( 'firstname', 'Prénom du musicien : ' ) }}
	{{ Form::text( 'firstname', $musicien['firstname'] ) }}
	{{ Form::label( 'biography', 'Sa biographie : ' ) }}
	{{ Form::textarea( 'biography', $musicien['biography'] ) }}
	{{ Form::label( 'instrument', 'Son instrument : ' ) }}
	{{ Form::text( 'instrument', $musicien['instrument'] ) }}
	{{ Form::label( 'uploadedPicture', 'Son portrait (270 x 270 pixels): ' ) }}
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