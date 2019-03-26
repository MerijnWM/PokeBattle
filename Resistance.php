<?

class Resistance
{
	private $energyType, $value;

	public function __construct($energyType, $value){
		$this->energyType = $energyType;
		$this->value = $value;
	}

	public function getEnergyType(){
		return $this->energyType;
	}

	public function getValue(){
		return $this->value;
	}

	public function __toString() {
        return json_encode($this);
    }
}