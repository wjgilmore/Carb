<?php

class carb {
		
	// Execute before routing
	function beforeRoute() {

	}	
	
	// Execute after routing
	function afterRoute() {
		echo Template::serve('layout.html');	
	}
	
}