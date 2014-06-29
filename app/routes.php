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
		array( 'label' => 'Agenda', 'link' => 'agenda'),
		array( 'label' => 'Contact', 'link' => 'contact')
		/* array( 'label' => 'Ateliers Jazz', 'link' => 'ateliers') */
		// onglet ateliers jazz temporairement enlevé le 07/11/2013
	);
}

function getMusicGroupMenuList(){
	$etienneVincentQuartetMenuList = array(
		array( 'label' => 'Pr&eacute;sentation', 'link' => '' ),
		array( 'label' => 'Musiciens', 'link' => 'musiciens' ),
		array( 'label' => 'Media', 'link' => 'media' ),
		array( 'label' => 'Pro', 'link' => 'pro' )
	);
	
	return array( 
		array( 'label' => 'Etienne Vincent Quartet', 'link' => 'etienneVincentQuartet', 'menuList' => $etienneVincentQuartetMenuList )
	);
}

function standardTemplate( $subTemplate, $title, $withBandeau ){

	$dynamicContent = array( 
		'firstMenuList' => getPrincipalMenuList(),
		'withBandeau' 	=> $withBandeau
	);
	
	return templateWithDynamicContent($subTemplate, $title, $dynamicContent);
}

function templateWithDynamicContent($template, $title, $dynamicContent){
	$contents = array_merge(
		array( 'title' => $title ), 
		$dynamicContent
	);
	return View::make($template, $contents);
}

/* 						fonctions publiques 					*/

function templateWithBandeau( $subTemplate ){
	return standardTemplate( $subTemplate, 'Guitariste', true );
}

/*
function templateWithoutBandeau( $subTemplate, $title ){
	return standardTemplate( $subTemplate, $title, false );
}
*/

function vipTemplate( $template, $title, $more=null ){
	$twoMenusContents = array(
		'firstMenuList' 	=> getPrincipalMenuList(),
		'secondMenuList'	=> getMusicGroupMenuList()
	);
	
	$contents = $twoMenusContents;
	if($more){
		$contents = array_merge($twoMenusContents, $more);
	}
	
	return templateWithDynamicContent($template, $title, $contents);
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

Route::get( 'contact', function()
{
	return templateWithBandeau( 'contact' );
});

/*                Pages EtienneVincentQuartet                              */

Route::get( 'groupes/etienneVincentQuartet', function()
{
	return vipTemplate( 'vip_presentation', 'Quartet' );
});

Route::get( 'groupes/etienneVincentQuartet/EtienneVincent', function()
{
	return templateWithBandeau( 'biographie' );
});

Route::get( 'groupes', function()
{
	return Redirect::to('groupes/etienneVincentQuartet');
});

Route::get( 'groupes/etienneVincentQuartet/musiciens', function()
{
	return vipTemplate( 'vip_musiciens', 'Quartet', array( 'musiciens' => Musician::all()) );
});

Route::get( 'groupes/etienneVincentQuartet/media', function()
{
	return vipTemplate( 'vip_media', 'Quartet' );
});

Route::get( 'groupes/etienneVincentQuartet/pro', function()
{
	return vipTemplate( 'vip_pro', 'Quartet' );
});

Route::get( 'groupes/etienneVincentQuartet/media', function()
{
	return vipTemplate( 'vip_media', 'Quartet' );
});

Route::get( 'groupes/etienneVincentQuartet/pro', function()
{
	return vipTemplate( 'vip_pro', 'Quartet' );
});

/* Route::get( 'ateliers', function()
{
	return templateWithoutBandeau( 'workshop', 'workshop' );
}); */

// ------------ Administration du site

// voir pour CSRF

Route::get( 'admin/gestionDesBiographies', 'ManagementController@gestionDesBiographies');

Route::get( 'admin/gestionDesGroupesVIP', 'ManagementController@gestionDesGroupesVIP');

Route::get( 'admin/editerUneBiographie/{index?}', 'ManagementController@displayEditAMusicianForm');

Route::get( 'admin/editerUnGroupeVIP/{index?}', 'ManagementController@displayEditAGroupVIPForm' );

Route::any( 'admin/ajouterUneBiographie', 'ManagementController@addAMusician');

Route::any( 'admin/ajouterUnGroupeVIP', 'ManagementController@addAGroupVIP' );

Route::any('admin/modifierUneBiographie', 'ManagementController@updateAMusician' );

Route::any('admin/modifierUnGroupeVIP', 'ManagementController@updateAGroup' );

Route::any('admin/GererGroupesDuMusicien/{index?}', 'ManagementController@updateToBePartOf' );

Route::any('admin/validationSupprUneBiographie/{index?}', 'ManagementController@displayBiographyDeleteConfirmPage');

Route::any('admin/validationSupprUnGroupeVIP/{index?}', 'ManagementController@displayGroupDeleteConfirmPage');

Route::any('admin/supprimerUneBiographie/{index?}', 'ManagementController@deleteAMusician');

Route::any('admin/supprimerUnGroupeVIP/{index?}', 'ManagementController@deleteAGroup');