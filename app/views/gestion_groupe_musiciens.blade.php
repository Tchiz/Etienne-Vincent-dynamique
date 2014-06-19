@extends ( 'template' )

@include ( 'menu_principal' )

@section( 'content' )
<div>
	@if ($groupe['id'])
	{{ Form::open( array( 'enctype' => 'multipart/form-data', 'url' => '/admin/modifierUnGroupeVIP') ) }}
	{{ Form::hidden( 'id', $groupe['id'] ) }}
	@else
	{{ Form::open( array( 'enctype' => 'multipart/form-data', 'url' => '/admin/ajouterUnGroupeVIP') ) }}
	@endif
	
	{{ Form::label( 'label', 'Libellé : ' ) }}
	{{ Form::text( 'label', $groupe['label'] ) }}
	{{ Form::label( 'description', 'Description : ' ) }}
	{{ Form::textarea( 'description', $groupe['description'] ) }}
	{{ Form::submit( 'Ajouter/Modifier un groupe' ) }}
	{{ Form::close() }}
</div>
@stop