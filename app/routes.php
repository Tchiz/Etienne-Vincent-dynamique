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

// REDONDANDE avec template ?!
View::composer( 'template_workshop', function( $view, $isWorkingItem = '' )
{
	$firstMenuList = array( 
		array( 'label' => 'Accueil', 'link' => '' ),
		array( 'label' => 'Biographie', 'link' => 'biographie'),
		array( 'label' => 'Groupes', 'link' => 'vip'),
		array( 'label' => 'Agenda', 'link' => 'agenda'),
		array( 'label' => 'Ateliers Jazz', 'link' => 'ateliers')
	);
	
	$data = array(
		'firstMenuList' => $firstMenuList,
		'isWorking'	=> $isWorkingItem
	);
	
	$view->nest( 'firstMenu', 'menu_principal', array( 'data' => $data ) );
});

// REDONDANDE avec template ?!
View::composer( 'template_vip', function( $view, $isWorkingItem = '' )
{
	$firstMenuList = array( 
		array( 'label' => 'Accueil', 'link' => '' ),
		array( 'label' => 'Biographie', 'link' => 'biographie'),
		array( 'label' => 'Groupes', 'link' => 'vip'),
		array( 'label' => 'Agenda', 'link' => 'agenda'),
		array( 'label' => 'Ateliers Jazz', 'link' => 'ateliers')
	);
	
	$data = array(
		'firstMenuList' => $firstMenuList,
		'isWorking'	=> $isWorkingItem
	);
	
	$view->nest( 'firstMenu', 'menu_principal', array( 'data' => $data ) );
});

/* Gestion du menu */
View::composer( 'template', function( $view, $isWorkingItem = '' )
{
	$firstMenuList = array( 
		array( 'label' => 'Accueil', 'link' => '' ),
		array( 'label' => 'Biographie', 'link' => 'biographie'),
		array( 'label' => 'Groupes', 'link' => 'vip'),
		array( 'label' => 'Agenda', 'link' => 'agenda'),
		array( 'label' => 'Ateliers Jazz', 'link' => 'ateliers')
	);
	
	$data = array(
		'firstMenuList' => $firstMenuList,
		'isWorking'	=> $isWorkingItem
	);
	
	$view->nest( 'firstMenu', 'menu_principal', array( 'data' => $data ) );
});

/* Gestion page par défaut */
Route::get( '/', function()
{
	return View::make( 'template' )->nest( 'content', 'homepage' );
});

Route::get( '../', function()
{
	return View::make( 'template' )->nest( 'content', 'homepage' );
});

Route::get( 'biographie', function()
{
	return View::make( 'template' )->nest( 'content', 'biographie' );
});

Route::get( 'agenda', function()
{
	return View::make( 'template' )->nest( 'content', 'schedule' );
});

Route::get( 'vip', function()
{
	return View::make( 'template_vip' )->nest( 'content', 'vip_presentation' );
});

Route::get( 'ateliers', function()
{
	return View::make( 'template_workshop' )->nest( 'content', 'workshop' );
});