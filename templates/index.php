<?php

require 'fatfree/lib/base.php';

// Include the controllers
require __DIR__.'/controllers/carb.php';
require __DIR__.'/controllers/home.php';

// Configuration settings
F3::config('config/configuration.cfg');

// Set page caching
F3::set('CACHE', F3::get('cache'));

// Set debug level
F3::set('DEBUG', F3::get('debug'));

// Where are the layout and views located?
F3::set('UI','ui/');

// Connect to the database
F3::set('DB', new DB(F3::get('dsn')));

// Include the controllers
F3::set('IMPORTS','controllers/');

// Routes

// Home
F3::route('GET /', 'home->index');

F3::run();

?>
