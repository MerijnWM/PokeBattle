<?

class Resistance
{
	public $resistance, $value;

	public function __construct($energyType, $value){
		$this->resistance = $energyType;
		$this->value = $value;
	}

	public function __toString() {
        return json_encode($this);
    }
}