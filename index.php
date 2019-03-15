<?

spl_autoload_register(function($class) {
	require_once "{$class}.php";
});


$pikachu = new pikachu('pikachu');

echo $pikachu->name;
echo "<br>";
echo $pikachu->energy_type;
echo '<br>';
echo $pikachu->hitpoints;
echo "<br>";
echo $pikachu->weakness;
