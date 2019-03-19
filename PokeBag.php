<?

class PokeBag
{
	public $bag;

	public function add($pokemon){
		for($y = 0; $y < count($this->bag); $y++){

			if($this->bag[$y]->name == $pokemon->name){
				echo 'Kan niet 2 pokemon met de zelfde naam in de pokebag hebben. <br>';
				return;
			}
		}
		if(count($this->bag) < 10){
			$this->bag[] = $pokemon;

		}else{
			echo 'Je pokebag zit vol';
		}
	}

	public function remove($pokemon){

		for($y = 0; $y < count($this->bag); $y++){

			if($this->bag[$y]->name == $pokemon){
				unset($this->bag[$y]);
			}
		}
	}

	public function getPokemons(){
		for($y = 0; $y < count($this->bag); $y++){

			echo $this->bag[$y]->name . '<br>';			
		}
	}

	public function deleteAll(){

		for($y = 0; $y < count($this->bag); $y++){

			$this->bag = NULL;			
		}
	}

	public function __toString() {
        return json_encode($this);
    }
}