<?

spl_autoload_register(function($class) {
	require_once "{$class}.php";
});


$pikachu = new pikachu('pikachu');
$charmeleon = new Charmeleon('charmeleon');

echo $pikachu->name;
echo '<br>';
echo $pikachu;
echo "<br>";
echo $charmeleon->name;
echo "<br>";
echo $charmeleon;
