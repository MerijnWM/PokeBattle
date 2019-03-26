<?

class Pokemon
{
	protected $name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance;

	public function attack($attackName, $target){
		foreach($this->attacks as $assault){
			
			if($assault->getAttack() == $attackName){

				$attack = $assault; 
				continue;
			}
		}

		$target->takeDamage($attack, $this->energyType);
	}

	public function takeDamage($attack, $energyType){		
		
		if($energyType == $this->weakness->getEnergyType()){

			$damage = $this->weakness->getMultiplier() * $attack->getDamage();
			$this->health -= $damage;			

		}else if($energyType == $this->resistance->getEnergyType()){
			
			$damage = $attack->getDamage() - $this->resistance->getValue();			
			if($damage > 0){
				$this->health -= $damage;
			}
		}else{	
			$this->health -= $attack->getDamage();
		}
	}	

	public function getName(){
		return $this->name;
	}

	public function getHealth(){
		return $this->health;
	}



	public function __toString() {
        return json_encode($this);
    }


}	