<?

class Pokemon
{
	public $name, $energyType, $hitpoints, $healht, $attacks, $weakness, $resistance;

	public function attack($attack, $target){

		echo '<br>~ ' . $target->name . 's healht is ' . $target->healht . '<br>';
		echo '~ ' . $this->name . ' attacks ' . $target->name .' met ' . $attack->attack . '<br>';

		if($this->energyType == $target->weakness->energyType){

			$damage = $target->weakness->multiplier * $attack->damage;
			$target->healht -= $damage;			

		}else if($this->energyType == $target->resistance->energyType){	

			$damage = $attack->damage - $target->resistance->value;
			if($damage > 0){
				$target->healht -= $damage;
			}

		}else{			
			$target->healht -= $attack->damage;
		}

		echo '~ ' . $target->name . 's healht is ' . $target->healht . '<br>';
	}

	public function __toString() {
        return json_encode($this);
    }


}	