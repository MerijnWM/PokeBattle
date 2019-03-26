<?

class Charmeleon extends Pokemon
{
	public function __construct($name){
		$this->name = $name;
		$this->energyType = new Energytype('Fire'); 
		$this->hitpoints = 60;
		$this->health = 60;
		$this->attacks = [new Attack('Head Butt', 10), new Attack('Flare', 30)];
		$this->weakness = new Weakness(new Energytype('Water'), 2);
		$this->resistance = new Resistance(new Energytype('Lightning'), 20);
	}
}