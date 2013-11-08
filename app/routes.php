<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* 					fonctions privées 						*/

function getPrincipalMenuList(){
	return array( 
		array( 'label' => 'Accueil', 'link' => '' ),
		array( 'label' => 'Biographie', 'link' => 'biographie'),
		array( 'label' => 'Groupes', 'link' => 'groupes'),
		array( 'label' => 'Agenda', 'link' => 'agenda')
		/* array( 'label' => 'Ateliers Jazz', 'link' => 'ateliers') */
		// onglet ateliers jazz temporairement enlevé le 07/11/2013
	);
}

function getMusicGroupMenuList(){
	$etienneVincentQuartetMenuList = array(
		array( 'label' => 'Pr&eacute;sentation', 'link' => '' ),
		array( 'label' => 'Musiciens', 'link' => 'musiciens' )
	);
	
	return array( 
		array( 'label' => 'Etienne Vincent Quartet', 'link' => 'etienneVincentQuartet', 'menuList' => $etienneVincentQuartetMenuList ),
		array( 'label' => 'Swolkin\'', 'link' => 'swolkin'),
		array( 'label' => 'Melophonic Quartet', 'link' => 'melophonicQuartet'),
		array( 'label' => 'Siam trio', 'link' => 'siamTrio')
	);
}

function standardTemplate( $subTemplate, $title, $withBandeau ){

	$firstMenuList = getPrincipalMenuList();
	
	return View::make( $subTemplate, array( 
		'firstMenuList' 	=> $firstMenuList,
		'title'			=> $title,
		'withBandeau' 	=> $withBandeau
		) );
}

function templateWithTwoMenus( $subTemplate, $title, $secondMenuList ){

	$firstMenuList = getPrincipalMenuList();
	
	return View::make( $subTemplate, array(
		'firstMenuList' 	=> $firstMenuList,
		'title'			=> $title,
		'secondMenuList'	=> $secondMenuList
	) );
}

/* 						fonctions publiques 					*/

function templateWithBandeau( $subTemplate ){
	return standardTemplate( $subTemplate, 'Guitariste', true );
}

function templateWithoutBandeau( $subTemplate, $title ){
	return standardTemplate( $subTemplate, $title, false );
}

function vipTemplate ( $subTemplate, $title){
	$secondMenuList = getMusicGroupMenuList();
	return templateWithTwoMenus( $subTemplate, $title, $secondMenuList );
}

/* ---------------------- Gestion page par défaut ---------------- */

App::missing( function( $exception ){
	return View::make( 'error_template', array(
		'title' => 'en construction',
		'firstMenuList' => getPrincipalMenuList()
	) );
} );

Route::get( '/', function()
{
	return templateWithBandeau( 'homepage' );
});

Route::get( '../', function()
{
	return templateWithBandeau( 'homepage' );
});

Route::get( 'biographie', function()
{
	return templateWithBandeau( 'biographie' );
});

Route::get( 'agenda', function()
{
	return templateWithBandeau( 'schedule' );
});

/*                Pages EtienneVincentQuartet                              */

Route::get( 'groupes/etienneVincentQuartet', function()
{
	return vipTemplate( 'vip_presentation', 'Quartet' );
});

Route::get( 'groupes', function()
{
	return Redirect::to('groupes/etienneVincentQuartet');
});

Route::get( 'groupes/etienneVincentQuartet/musiciens', function()
{
	return vipTemplate( 'vip_musiciens', 'quartet - Les musiciens' );
});

/* Route::get( 'ateliers', function()
{
	return templateWithoutBandeau( 'workshop', 'workshop' );
}); */