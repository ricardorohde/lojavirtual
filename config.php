<?php

require 'environment.php';

global $config;
$config = array();

if (ENVIRONMENT == "development") {
	$config['dbname'] = 'loja';
	$config['host'] = 'localhost';
        $config['charset'] = 'utf8';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
        
        define("BASE_URL","http://lojavirtual.pc");
} else {
	$config['dbname'] = 'loja';
	$config['host'] = 'localhost';
        $config['charset'] = 'utf8';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
        
        define("BASE_URL","http://www.lojavirtual.com.br");
}

?>