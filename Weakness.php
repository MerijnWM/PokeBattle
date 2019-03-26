<?

class Weakness
{
	private $energyType, $multiplier;

	public function __construct($energyType, $multiplier){
		$this->energyType = $energyType;
		$this->multiplier = $multiplier;
	}

	public function getEnergyType(){
		return $this->energyType;
	}

	public function getMultiplier(){
		return $this->multiplier;
	}

	public function __toString() {
	    return json_encode($this);	  
	}
}