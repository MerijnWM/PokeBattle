<?

class Pikachu extends Pokemon
{
	public function __construct($name){
		$this->name = $name;
		$this->energy_type = energytype::LIGHTNING; 
		$this->hitpoints = 60;
		$this->attack = 'hoi';
		$this->weakness = new weakness(energytype::FIRE, 1.5);
	}
} 