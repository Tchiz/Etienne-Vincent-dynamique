@extends ( 'template' )

@include ( 'menu_principal' )

@section( 'content' )
<div id="management">
	<p>Voulez-vous vraiment supprimer {{ $label }} ?</p>
	{{ Form::open( array( 'enctype' => 'multipart/form-data', 'url' => '/admin/'.$deleteURL.'/'.$id ) ) }}
	<input class="button" type="submit" value="Valider"/>
	{{ Form::close() }}
	<a class="button" href="../{{ $managementURL }}">Précédent</a>
</div>
@stop