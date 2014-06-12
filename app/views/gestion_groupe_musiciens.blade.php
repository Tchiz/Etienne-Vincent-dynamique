@extends ( 'template' )

@include ( 'menu_principal' )

@section( 'content' )
<div>
	{{ Form::open( array( 'enctype' => 'multipart/form-data', 'url' => '/admin/ajouterUnGroupeVIP') ) }}
	{{ Form::label( 'label', 'Libellé : ' ) }}
	{{ Form::text( 'label' ) }}
	{{ Form::label( 'description', 'Description : ' ) }}
	{{ Form::textarea( 'description' ) }}
	{{ Form::submit( 'Ajouter un groupe' ) }}
	{{ Form::close() }}
</div>
@stop