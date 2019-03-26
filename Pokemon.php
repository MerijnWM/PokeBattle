<?

class Pokemon
{
	protected $name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance;

	public function takeDamage($damage){
		$this->health -= $damage;
	}

	public function attack($attackName, $target){

		foreach($this->attacks as $assault){
			
			if($assault->getAttack() == $attackName){

				$attack = $assault; 
				continue;
			}
		}
		
		if($this->energyType == $target->weakness->getEnergyType()){

			$damage = $target->weakness->getMultiplier() * $attack->getDamage();
			$target->takeDamage($damage);			

		}else if($this->energyType == $target->resistance->getEnergyType()){
			
			$damage = $attack->getDamage() - $target->resistance->getValue();			
			if($damage > 0){
				$target->takeDamage($damage);
			}
		}else{	
			$target->takeDamage($attack->getDamage());		
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