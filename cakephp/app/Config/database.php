<?php
define('SQLITE', TMP . 'database.sqlite');
class DATABASE_CONFIG {
	public $default = array(
		'datasource' => 'Database/Sqlite',
		'database' => SQLITE,
		'prefix' => 'shifty_',
	);
}
