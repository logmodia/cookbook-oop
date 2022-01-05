<?php

declare(strict_types=1);

class Recipe
{
	private $title;
	public $ingredients = array();
	public $instructions = array();
	public $yield;
	public $tags = array();
	public $source = "The crazy cooker";
	private $measurements = array(
		"liter",
		"g",
		"kg",
		"cup",
		"soup spoon",
		"coffee spoon",
		"ounce"
	);

	public function setTitle($title) {
		$this -> title = ucwords($title);
	}

	private function formatTitle() {
		return $this -> title.' Add after';
	}
	
	public function getTitle() {
		return $this -> formatTitle();
	}

	public function addIngredient($item, $amount = null, $measure = null)
	{
		if( $amount != null && !is_float($amount) && !is_int($amount) ) {
			exit("The amount must be a float: " . gettype($amount) . " $amount given.");
		}

		if( $measure!= null && !in_array(strtolower($measure), $this->measurements) ) {
			exit("Please enter a valid measurement: " .implode(", ", $this->measurements ));
		}

		$this->ingredients[] = array(
			"item" 		=> ucwords($item),
			"amount" 	=> $amount,
			"measure" 	=> strtolower($measure)
		);
	}

	public function getIngredients() {
		return $this->ingredients;
	}
}
