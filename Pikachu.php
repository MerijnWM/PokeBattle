<?

class Pikachu extends Pokemon
{
	public function __construct($name){
		$this->name = $name;
		$this->energyType = new energytype('Lightning'); 
		$this->hitpoints = 60;
		$this->healht = 60;
		$this->attacks = [new attack('Electric Ring', 50), new attack('Pika Punch', 20)];
		$this->weakness = new weakness(new energytype('Fire'), 1.5);
		$this->resistance = new Resistance(new energytype('Fire'), 20);
	}
} 