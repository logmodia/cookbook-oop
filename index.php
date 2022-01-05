<?php
include 'recipes.php';
$recipe1 = new Recipe();
echo $recipe1->source.'</br>';
$recipe1->setTitle('exemple1');
echo $recipe1->getTitle().'</br>';

$recipe1->setTitle('boulets liégeois');
echo $recipe1->getTitle().'</br>';

$recipe1->addIngredient('flour',2.5,'cup');

foreach ($recipe1->getIngredients() as $ing ) {
	echo $ing["amount"] . " " . $ing["measure"] . " " . $ing["itemccc"] . "</br>";
}