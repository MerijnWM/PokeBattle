<?

class Attack
{
	private $attack, $damage;

	public function __construct($attack, $damage){
		$this->attack = $attack;
		$this->damage = $damage;
	}

	public function getDamage(){
		return $this->damage;
	}

	public function getAttack(){
		return $this->attack;
	}

	public function __toString() {
        return json_encode($this);
    }
}