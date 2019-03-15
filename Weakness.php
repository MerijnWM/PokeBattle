<?

class Weakness
{

	public $weakness, $multiplier;

	public function __construct($energyType, $multiplier){
		$this->weakness = $energyType;
		$this->multiplier = $multiplier;
	}

	public function __toString() {
	    return json_encode($this);	  
	}
}