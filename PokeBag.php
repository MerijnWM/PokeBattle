<?

class PokeBag
{
	private $bag;

	public function add($pokemon){

		for($y = 0; $y < count($this->bag); $y++){

			if($this->bag[$y]->getName() == $pokemon->getName()){
				return 'Kan niet 2 pokemon met de zelfde naam in de pokebag hebben.';
			}
		}  

		if(count($this->bag) < 10){
			$this->bag[] = $pokemon;

		}else{
			return 'Je pokebag zit vol';
		}
	}

	public function remove($pokemonName){

		for($y = 0; $y < count($this->bag); $y++){
	
			if($this->bag[$y]->getName() == $pokemonName){
				unset($this->bag[$y]);
				return;
			}
		}
	}

	public function getPokemons(){

		foreach($this->bag as $pokemon){

			$pokemons[] = $pokemon->getName();			
		}

		return $pokemons;
	}

	public function deleteAll(){

		$this->bag = [];		
	}

	public function __toString() {
        return json_encode($this);
    }
}