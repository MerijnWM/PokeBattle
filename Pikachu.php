<?

class Pikachu extends Pokemon
{
	public function __construct($name){
		$this->name = $name;
		$this->energyType = new Energytype('Lightning'); 
		$this->hitpoints = 60;
		$this->health = 60;
		$this->attacks = [new Attack('Electric Ring', 50), new Attack('Pika Punch', 20)];
		$this->weakness = new Weakness(new Energytype('Fire'), 1.5);
		$this->resistance = new Resistance(new Energytype('Fire'), 20);
	}
} 