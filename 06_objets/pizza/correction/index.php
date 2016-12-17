<?php
include('commande.class.php');

$cmd = new Cmd();
$cmd->stock(array(
	'tomate' => 10,
	'chorizo' => 9,
	'champignon' => 25,
	'pate' => 7,
	'gruyere' => 5
));
$cmd->stock();


$cmd->pizzaCreate(
	'royale',
	10,
	['tomate', 'champignon', 'pate', 'gruyere']
);
$cmd->pizzaCreate(
	'chorizo',
	15,
	['tomate', 'chorizo', 'pate', 'gruyere']
);

$cmd->pizzaBuy('royale');
$cmd->pizzaBuy('chorizo');

$cmd->view();





?>