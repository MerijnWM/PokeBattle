<?

class Pokemon
{
	public $name, $energyType, $hitpoints, $healht, $attacks, $weakness, $resistance;

	public function attack($attack, $target){

		if($this->energyType == $target->weakness->energyType){

			$damage = $target->weakness->multiplier * $attack->damage;
			$target->healht -= $damage;

		}else if($this->energyType == $target->resistance->energyType){	

			$damage = $target->resistance->value - $attack->damage;
			if($damage > 0){
				$target->healht -= $attack->damage;
			}

		}else{
			$target->healht -= $damage;
		}
	}

	public function __toString() {
        return json_encode($this);
    }


}	