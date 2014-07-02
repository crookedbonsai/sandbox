<?php

class PlayerConfig extends CI_Controller {
	
	public function PlayerConfig () {
		$this->load->model("player_model");
		
		echo "Player Configuration";
	}

	private function __construct () {
		
	}


	private function NewPlayer () {
		$player = new Player();
		$new_player = object Player($nickname => "bob");
		$new_player = object $player->CreatePlayer($nickname, $firstname, $lastname, $info);
	}
	
}

public function AddPlayer () {
	// if GET then collect form details and create a new player object and add this to database if it doesnt exist aready
}


class Player {
	
	// Set up variables for Player Object
	
	/** @var string */
	private $nickname = "";
	/** @var string */
	private $firstname = "";
	/** @var string */
	private $lastname = "";
	/** @var string */
	private $info = "";
	

	private $attributes = array();
	foreach(self::$db_fields as $field) {
		 if(property_exists($this, $field)) {
			  $attributes[$field] = $this->$field; // dynamic variable with the name of the value of the field
		 }
	}
	
	private function CreatePlayer ($nickname, $firstname, $lastname, $info) {
		
		// Validate Data
		
		// Check if player exists already
		
		// add player to Player Table
		$this->player_model->addPlayer();
	}

	public function form () {
		// Handle form data?
	}
}