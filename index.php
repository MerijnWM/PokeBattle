<?

spl_autoload_register(function($class) {
	require_once "{$class}.php";
});


$pikachu = new Pikachu('pikachu');
$charmeleon = new Charmeleon('charmeleon');

echo $charmeleon->getName() . '<br>';
print($charmeleon->getHealth());
echo '<br>';
$pikachu->attack('Electric Ring',$charmeleon);
print($charmeleon->getHealth());

echo '<br>'. $pikachu->getName() . '<br>';
print($pikachu->getHealth());
$charmeleon->attack('Flare',$pikachu);
echo '<br>';
print($pikachu->getHealth());

$pokebag =  new PokeBag();
$pokebag->add($charmeleon);
$pokebag->add($pikachu);

var_dump($pokebag);
var_dump($pokebag->getPokemons());

$pokebag->remove($charmeleon->getName());
var_dump($pokebag);




