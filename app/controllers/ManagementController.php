<?php

class ManagementController extends BaseController {
	
	function managementTemplate( $template, $title, $more=array() ){
		$content = array(
			'title' => $title,
			'firstMenuList' => array(
				array( 'label' => 'gestion des biographies', 'link' => '/admin/gestionDesBiographies' ),
				array( 'label' => 'gestion des groupes VIP', 'link' => '/admin/gestionDesGroupesVIP' )
			),
			'withBandeau' 	=> false
		);
		$content = array_merge($content, $more);
		return View::make($template, $content);
	}
	
	// ATTENTION cette fonciton n'est pas utlisée ---
	
	function gestionDItems(){
		$items = array();
		foreach( Musician::all() as $musicien ){
			$items[] = array(
				'id' => $musicien->id,
				'label' => $musicien->firstname.' '.$musicien->lastname
			);
		}
		return $this->managementTemplate( 'management', 'biographies', array(
			'items' => $items,
			'deleteURL' => 'validationSupprUneBiographie',
			'editURL' => 'editerUneBiographie'
		) );
	}
	
	function getMusicianFromIndex( $index ){
		$musician = array(
			'id' => $index,
			'firstname' => '',
			'lastname' => '',
			'instrument' => '',
			'biography' => ''
		);
		if($index && Musician::find($index)){
			foreach($musician as $key => $value){
				$musician[$key] = Musician::find($index)[$key];
			}
		}
		return $musician;
	}
	
	function getGroupFromIndex( $index ){
		$group = array(
			'id' => $index,
			'label' => '',
			'description' => ''
		);
		
		if($index && GroupOfMusicians::find($index)){
			foreach($group as $key => $value){
				$group[$key] = GroupOfMusicians::find($index)[$key];
			}
		}
		
		return $group;
	}
	
	function getMusicianFromPostArray( $postArray ){
		$musician  = array(
			'firstname' => '',
			'lastname' => '',
			'instrument' => '',
			'biography' => ''
		);
		
		foreach( $musician as $key => $value){
			$musician[ $key ] = $postArray[ $key ];
		}
		
		return $musician;
	}
	
	function getGroupFromPostArray( $postArray ){
		$group = array(
			'label' => '',
			'description' => ''
		);
		
		foreach( $group as $key => $value){
			$group[ $key ] = $postArray[ $key ];
		}
		
		return $group;
	}
	
	function getPictureNameAndPutFileOnDirectory( $filePath ){
		$pictureName = Input::file('uploadedPicture')->getClientOriginalName();
		
		echo Input::file('uploadedPicture')->getSize();
		echo Input::file('uploadedPicture')->getClientOriginalExtension();
		
		echo Input::file('uploadedPicture')->move($filePath , $pictureName);
		
		return $pictureName;
	}
	
	// --- fonctions publiques
	
	public function gestionDesBiographies(){
		$items = array();
		foreach( Musician::all() as $musicien ){
			$items[] = array(
				'id' => $musicien->id,
				'label' => $musicien->firstname.' '.$musicien->lastname
			);
		}
		
		return $this->managementTemplate( 'management', 'biographies', array(
			'items' => $items,
			'buttonText' => 'Ajouter une biographie',
			'deleteURL' => 'validationSupprUneBiographie',
			'editURL' => 'editerUneBiographie'
		) );
	}
	
	public function gestionDesGroupesVIP(){
		$items = array();
		foreach( GroupOfMusicians::all() as $groupVIP ){
			$items[] = array(
				'id' => $groupVIP->id,
				'label' => $groupVIP->label
			);
		}
		return $this->managementTemplate( 'management', 'groupes VIP', array(
			'items' => $items,
			'buttonText' => 'Ajouter un groupe VIP',
			'deleteURL' => 'validationSupprUnGroupeVIP',
			'editURL' => 'editerUnGroupeVIP'
		) );
	}
	
	public function addAMusician(){
		$musician = $this->getMusicianFromPostArray($_POST);
		$musician['pictureName'] = $this->getPictureNameAndPutFileOnDirectory( 'media/images/' );
		DB::table( 'musicians' )->insert($musician);
		return Redirect::to('admin/gestionDesBiographies');
	}
	
	public function addAGroupVIP(){
		$group  = getGroupFromPostArray($_POST);
		
		DB::table( 'groups_of_musicians' )->insert( $group );
		return Redirect::to('admin/gestionDesGroupesVIP');
	}
	
	public function updateAMusician(){
		$musician = $this->getMusicianFromPostArray($_POST);
		if(Input::hasFile( 'uploadedPicture' )){
			$musician['pictureName'] = getPictureNameAndPutFileOnDirectory( 'media/images/');
		}
		DB::table( 'musicians' )
			->where( 'id', '=',  $_POST[ 'id' ])
			->update( $musician );
		return Redirect::to('admin/gestionDesBiographies');
	}
	
	public function updateAGroup(){
		$group = $this->getGroupFromPostArray($_POST);
		DB::table( 'groups_of_musicians' )
			->where( 'id', '=',  $_POST[ 'id' ])
			->update( $group );
		return Redirect::to('admin/gestionDesGroupesVIP');
	}
	
	public function deleteAMusician($index = null){
		$pictureName = Musician::find($index)['pictureName'];
		File::delete('media/images/'.$pictureName);
		DB::table( 'musicians' )
			->where( 'id', '=',  $index)
			->delete();
		return Redirect::to('admin/gestionDesBiographies');
	}
	
	public function deleteAGroup($index = null){
		DB::table( 'groups_of_musicians' )
			->where( 'id', '=',  $index)
			->delete();
		return Redirect::to('admin/gestionDesGroupesVIP');
	}

// ---functions for displaying page

	public function displayBiographyDeleteConfirmPage($index = null){
		$musicien = Musician::find( $index );
		$deleteAttr = array(
			'id' => $index,
			'label' => $musicien->firstname.' '.$musicien->lastname,
			'deleteURL' => 'supprimerUneBiographie',
			'managementURL' => 'gestionDesBiographies'
		);
		return $this->managementTemplate(
			'gestion_suppression_item',
			'biographies',
			$deleteAttr
		);
	}
	
	public function displayGroupDeleteConfirmPage( $index=null ){
		$group = GroupOfMusicians::find( $index );
		$deleteAttr = array(
			'id' => $index,
			'label' => $group->label,
			'deleteURL' => 'supprimerUnGroupeVIP',
			'managementURL' => 'gestionDesGroupesVIP'
		);
		return $this->managementTemplate(
			'gestion_suppression_item',
			'groupes VIP',
			$deleteAttr
		);
	}
	
	public function displayEditAMusicianForm($index = null){
		$musicien = $this->getMusicianFromIndex( $index );
		return $this->managementTemplate(
			'gestion_musiciens',
			'biographies', 
			array('musicien' => $musicien)
		);
	}
	
	public function displayEditAGroupVIPForm($index = null){
		$content = array( 'groupe' => $this->getGroupFromIndex( $index ) );
		return $this->managementTemplate(
			'gestion_groupe_musiciens',
			'groupe VIP',
			$content
		);
	}
}