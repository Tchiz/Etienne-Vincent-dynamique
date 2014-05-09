@extends ( 'vip_template' )

@include ( 'menu_principal' )

@section( 'content' )
<div class="vip">
	<h2>Etienne Vincent Quartet</h2>
	<h3>Pro</h3>
	<figure class="pro">
		<figcaption>
			<a href="{{ URL::to( 'media/images/etienneVincentQuartet_Pro_FicheTechnique.pdf') }}">
				Fiche technique en format PDF
			</a>
		</figcaption>
	</figure>
	<figure class="pro">
		<figcaption>
			<a href="{{ URL::to( 'media/images/plan_de_scene.png') }}">
				Plan de scène
			</a>
		</figcaption>
	</figure>
	<figure class="pro">
		<figcaption>
			Photographies en HD
		</figcaption>
		<p style="text-align: center;">
			<a href="{{ URL::to( 'media/images/etienneVincentQuartet_Pro_1.jpg') }}">
				Photographie du groupe 1
			</a><br/>
			<a href="{{ URL::to( 'media/images/etienneVincentQuartet_Pro_2.jpg') }}">
				Photographie du groupe 2
			</a>
		</p>
	</figure>
</div>
@stop