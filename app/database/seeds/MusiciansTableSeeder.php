<?php 

class MusiciansTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table( 'musicians' )->insert(
			array(
				array(
					'firstname' => 'etienne',  
					'lastname' => 'vincent', 
					'instrument' => 'guitare', 
					'biography' => 'Etienne Vincent commence la guitare roc à treize ans et découvre ensuite le jazz grâce au guitariste Gilles Trial. Il suit son enseignement à Jazz Action Valence jusqu\' en 1999, puis étudie à l\'ENM de Villeurbanne et au CNR de Lyon. Il y obtient son DEM jazz en 2004.',
					'pictureName' => 'guitariste-etienne-vincent.jpg'
				),
				
				array(
					'firstname' => 'Noé',
					'lastname' => 'Macary',
					'instrument' => 'piano',
					'biography' => 'Noé Macary, pianiste/claviériste, joue dans de nombreuses formations pour lesquelles il arrange et compose. Son penchant pour les musiques dansantes et populaires l\'a amené à fonder (ou à se fondre dans...) plusieurs projets aux esthétiques bien différentes, allant de la pop-rock anglaise des années 70 (A*Song & the B*sides) au groove des musiques actuelles (Trio Magochi), en passant par la musique traditionnelle réunionnaise (Fonnzié)...et le jazz (Raphaël Reiter trio), véritable racine commune à toutes ses recherches stylistiques.',
					'pictureName' => 'piano-noe-macary.jpg'
				)
			)
		);
	}
	
}

?>