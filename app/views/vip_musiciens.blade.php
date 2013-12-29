@extends ( 'vip_template' )

@include ( 'menu_principal' )

@section( 'content' )
<div class="vip">
	<h2>Etienne Vincent Quartet</h2>
	<h3>Les musiciens</h3>
	<figure class="musicien">
		<figcaption>Etienne Vincent - Guitariste</figcaption>
		<img 
			src="../../media/images/guitariste-etienne-vincent.jpg" 
			alt="Etienne Vincent - Guitariste" 
			title="Etienne Vincent - Guitariste" />
		<p>
			<a href="./EtienneVincent">Voir la page d&eacute;di&eacute;e &agrave; sa biographie</a>
		</p>
	</figure>
	<figure class="musicien">
		<figcaption>No&eacute; Macary - Piano</figcaption>
		<img 
			src="../../media/images/piano-noe-macary.jpg" 
			alt="No&eacute; Macary - Piano" 
			title="No&eacute; Macary - Piano" />
		<p>
			<a href="./NoeMacary">Voir la page d&eacute;di&eacute;e &agrave; sa biographie</a>
		</p>
	</figure>
	<figure class="musicien">
		<figcaption>Damien Varaillon - Contrebasse</figcaption>
		<img 
			src="../../media/images/contrebasse-damien-varaillon.jpg" 
			alt="Damien Varaillon - Contrebasse" 
			title="Damien Varaillon - Contrebasse" />
		<p>
			<a href="./DamienVaraillon">Voir la page d&eacute;di&eacute;e &agrave; sa biographie</a>
		</p>
	</figure>
	<figure class="musicien">
		<figcaption>Simon Bernier - Batterie</figcaption>
		<img 
			src="../../media/images/batterie-simon-bernier.jpg" 
			alt="Simon Bernier - Batterie" 
			title="Simon Bernier - Batterie" />
		<p>
			<a href="./SimonBernier">Voir la page d&eacute;di&eacute;e &agrave; sa biographie</a>
		</p>
	</figure>
</div>
@stop