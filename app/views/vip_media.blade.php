@extends ( 'vip_template' )

@include ( 'menu_principal' )

@section( 'content' )
<div class="vip">
	<h2>Etienne Vincent Quartet</h2>
	<h3>Media</h3>
	<figure class="presentation">
		<figcaption>Etienne Vincent Quartet- EP</figcaption>
		<img 
			src="../../media/images/ep_courants_grand.jpg" 
			alt="Etienne Vincent Quartet- EP Courants" 
			title="Etienne Vincent Quartet- EP Courants" />
		<p>
			<a href="http://www.amazon.fr/etienne-vincent-quartet-T%C3%A9l%C3%A9chargements-MP3/s?ie=UTF8&page=1&rh=n%3A77196031%2Ck%3AEtienne%20Vincent%20Quartet">Sur Amazone</a> -
			<a href="https://itunes.apple.com/us/album/courants/id633100251"> Sur Itunes </a> -
			<a href="http://www.virginmega.fr/musique/album/courants-etienne-vincent-quartet-117384665,page1.htm"> Sur Virgin Mega</a>
		</p>
	</figure>
	
 	<figure class="presentation">
		<figcaption>Musiques de l'EP Courants</figcaption>
		<article class="musicPlayer">
			<h2>In the wind</h2>
			<audio controls>
				<source src="{{ URL::to( 'media/musique/inTheWind.ogg' ) }}" type="audio/ogg">
				<source src="{{ URL::to( 'media/musique/inTheWind.mp3' ) }}" type="audio/mpeg">
			</audio>
		</article>
		<article class="musicPlayer">
			<h2>The Lake</h2>
			<audio controls>
				<source src="{{ URL::to( 'media/musique/theLake.ogg' ) }}" type="audio/ogg">
				<source src="{{ URL::to( 'media/musique/theLake.mp3' ) }}" type="audio/mpeg">
			</audio>
		</article>
		<article class="musicPlayer">
			<h2>Extraits</h2>
			<audio controls>
				<source src="{{ URL::to( 'media/musique/courants_extraits.ogg' ) }}" type="audio/ogg">
				<source src="{{ URL::to( 'media/musique/courants_extraits.mp3' ) }}" type="audio/mpeg">
				<!-- voir avec JQuery pour plus d'option -->
				<!-- Your browser does not support the audio element. -->
			</audio>
		</article>
	</figure>
</div>
@stop