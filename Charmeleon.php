<?

class Charmeleon extends Pokemon
{
	public function __construct($name){
		$this->name = $name;
		$this->energyType = new energytype('Fire'); 
		$this->hitpoints = 60;
		$this->healht = 60;
		$this->attacks = [new Attack('Head Butt', 10), new Attack('flare', 30)];
		$this->weakness = new weakness(new energytype('Water'), 2);
		$this->resistance = new Resistance(new energytype('Lightning'), 20);
	}
}