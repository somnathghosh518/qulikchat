<?php
/*
 * @package AJAX_Chat
 */

class CustomAJAXChatInterface extends CustomAJAXChat {

	function initialize() {
		// Initialize configuration settings:
		$this->initConfig();

		// Initialize the DataBase connection:
		$this->initDataBaseConnection();
	}

}
