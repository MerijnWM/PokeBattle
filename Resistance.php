<?

class Resistance
{
	public $energyType, $value;

	public function __construct($energyType, $value){
		$this->energyType = $energyType;
		$this->value = $value;
	}

	public function __toString() {
        return json_encode($this);
    }
}