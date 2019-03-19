<?

spl_autoload_register(function($class) {
	require_once "{$class}.php";
});


$pikachu = new pikachu('pikachu');
$charmeleon = new Charmeleon('charmeleon');

$pikachu->attack($pikachu->attacks[0],$charmeleon);
$charmeleon->attack($charmeleon->attacks[1],$pikachu);

echo '<br> <br>';

$pokebag =  new PokeBag();
$pokebag->add($charmeleon);
$pokebag->add($pikachu);

print_r($pokebag);

echo '<br><br>';
echo $pokebag->getPokemons();

$pokebag->remove($charmeleon->name);

echo '<br>';
print_r($pokebag);




