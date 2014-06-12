<?php 

class GroupeVIPSeeder extends Seeder {
	
	public function run()
	{
		DB::table( 'groups_of_musicians' )->insert(
			array(
				array(
					'label' => 'Etienne Vincent Quartet',  
					'description' => 'Nouveau projet du guitariste Etienne Vincent, adepte d’une musique vivante, mélodique et nuancée. Privilégiant l\'écoute et le dialogue, le quartet joue une musique de l’instant, où les influences du guitariste (Peter Bernstein, John Abercrombie...) se fondent dans un univers très personnel.'
				)
			)
		);
	}
}

?>