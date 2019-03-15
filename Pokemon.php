<?

class Pokemon
{
	public $name, $energyType, $hitpoints, $healht, $attacks, $weakness, $resistance;

	public function attack($attack, $target){
		
	}

	public function __toString() {
        return json_encode($this);
    }


}	