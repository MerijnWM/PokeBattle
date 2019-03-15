<?

class Attack
{
	public $attack, $damage;

	public function __construct($attack, $damage){
		$this->attack = $attack;
		$this->damage = $damage;
	}

	public function __toString() {
        return json_encode($this);
    }
}