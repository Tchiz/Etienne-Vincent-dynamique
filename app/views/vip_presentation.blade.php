@extends ( 'vip_template' )

@include ( 'menu_principal' )

@section( 'content' )
<div class="vip">
	<h2>Etienne Vincent Quartet</h2>
	<h3></h3>
	<figure class="presentation">
		<img 
			src="{{ URL::to( 'media/images/presentation_etiennevincentquartet.jpg' ) }}" 
			alt="Etienne Vincent - Guitariste" 
			title="Etienne Vincent - Guitariste" />
		<div style="background: none;margin-bottom:25px;width: 100%;font-size: 0.8em; text-align:center;">
			Damien Varaillon (contrebasse), 
			Simon Bernier (batterie), 
			Etienne Vincent (guitare), 
			Noé Macary (piano)
		</div>
		<p>
			<span style="font-weight: bold;font-size: 1.4em;">N</span>ouveau projet du guitariste Etienne Vincent, adepte d’une musique vivante, 
			m&eacute;lodique et nuanc&eacute;e. Privil&eacute;giant l'&eacute;coute et le dialogue, 
			le quartet joue une musique de l’instant, o&ugrave; les influences du guitariste 
			(Peter Bernstein, John Abercrombie...) se fondent dans un univers tr&egrave;s personnel.
		</p>
	</figure>
	
	<figure>
		<figcaption>Dernières actualités du groupe</figcaption>
		<p>
			<span style="font-weight: bold;">S</span>ortie du disque "Courants" en mai 2013 <br><br>
			<span style="font-weight: bold;">C</span>oncerts au Sunset (Paris) et au Train théâtre (26) cet été <br><br>
			<span style="font-weight: bold;">R</span>écompensé aux trophées du Sunside (Paris) en 2013. <br><br>
			<span style="font-weight: bold;">D</span>epuis, nombreux concerts dans les clubs parisiens.
		</p>
	</figure>
	
	<figure>
		<figcaption>Presse</figcaption>
		<p>
			"...compositions dans lesquelles on perçoit l'influence de quelques grands guitaristes de référence (les "John": Scofield et Abercrombie). A écouter sur scène."<br>
			<span style="font-weight: bold;">Culture Jazz</span>
			<br><br>

			"Ponderous and absorbing (...) Add to your Radar." (A propos du titre "The Lake")<br>
			<span style="font-weight: bold;">All About Jazz (USA)</span>
		</p>
	</figure>
	
	<!-- <figure class="audio">
		<figcaption>In The Wind - The Lake - Extraits de l'EP Courants</figcaption>
		<audio controls>
			<source src="{{ URL::to( 'media/musique/inTheWind.ogg' ) }}" type="audio/ogg">
			<source src="{{ URL::to( 'media/musique/inTheWind.mp3' ) }}" type="audio/mpeg">
		</audio>
		<audio controls>
			<source src="{{ URL::to( 'media/musique/theLake.ogg' ) }}" type="audio/ogg">
			<source src="{{ URL::to( 'media/musique/theLake.mp3' ) }}" type="audio/mpeg">
		</audio>
		<audio controls>
			<source src="{{ URL::to( 'media/musique/courants_extraits.ogg' ) }}" type="audio/ogg">
			<source src="{{ URL::to( 'media/musique/courants_extraits.mp3' ) }}" type="audio/mpeg">
			<!-- voir avec JQuery pour plus d'option 
			<!-- Your browser does not support the audio element.
		</audio>
	</figure> -->
</div>
@stop