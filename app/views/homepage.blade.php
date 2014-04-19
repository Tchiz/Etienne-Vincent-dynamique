@extends ( 'template' )

@include ( 'menu_principal' )

@section( 'content' )
<div class="homepage">
	<article>
		<header>L'entrepot</header>
		<img 
			src="./media/images/logo_entrepot.png" 
			alt="L'entrepôt - Votre biosphère à Paris" 
			title="L'entrepôt - Votre biosphère à Paris" />
		Etienne Vincent Quartet à l'entrepôt le jeudi 24 Avril 2014 à 21 h 30
		<footer>
			<a href="http://lentrepot.fr/Etienne-Vincent-Quartet.html">
				En savoir plus...
			</a>
		</footer>
	</article>
	<article>
		<header>Etienne Vincent Quartet</header>
		<img 
			src="./media/images/ep_courants.png" 
			alt="Sunset Sunside - Club de jazz parisien" 
			title="Sunset Sunside - Club de jazz parisien" />
		Nouvel EP, <em>Courants</em> sorti en Mai 2013, disponible sur toutes les plateformes de t&eacute;l&eacute;chargements. 
		<footer><a href="https://itunes.apple.com/us/album/courants/id633100251">En savoir plus...</a></footer>
	</article>
</div>
@stop