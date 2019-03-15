<?

spl_autoload_register(function($class) {
	require_once "{$class}.php";
});


$pikachu = new pikachu('pikachu');
$charmeleon = new Charmeleon('charmeleon');

echo $pikachu;
echo "<br><br>";
echo $charmeleon;
echo "<br><br>";

$charmeleon->attack($charmeleon->attacks[1],$pikachu);

echo $pikachu;