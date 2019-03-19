<?

spl_autoload_register(function($class) {
	require_once "{$class}.php";
});


$pikachu = new pikachu('pikachu');
$charmeleon = new Charmeleon('charmeleon');

$pikachu->attack($pikachu->attacks[0],$charmeleon);
$charmeleon->attack($charmeleon->attacks[1],$pikachu);

