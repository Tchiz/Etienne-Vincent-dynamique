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

/* fonctions */

function template( $subTemplate, $title, $withBandeau ){

	/* Gestion du menu */
	$firstMenuList = array( 
		array( 'label' => 'Accueil', 'link' => '' ),
		array( 'label' => 'Biographie', 'link' => 'biographie'),
		array( 'label' => 'Groupes', 'link' => 'vip'),
		array( 'label' => 'Agenda', 'link' => 'agenda'),
		array( 'label' => 'Ateliers Jazz', 'link' => 'ateliers')
	);
	
	return View::make( $subTemplate, array( 
		'firstMenuList' 	=> $firstMenuList,
		'title'			=> $title,
		'withBandeau' 	=> $withBandeau
		));
}

function templateWithBandeau( $subTemplate ){
	return template( $subTemplate, 'guitariste', true );
}

function templateWithoutBandeau( $subTemplate, $title ){
	return template( $subTemplate, $title, false );
}

/* Gestion page par défaut */
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

Route::get( 'vip', function()
{
	return templateWithoutBandeau( 'vip_presentation', 'quartet' );
});

Route::get( 'ateliers', function()
{
	return templateWithoutBandeau( 'workshop', 'workshop' );
});