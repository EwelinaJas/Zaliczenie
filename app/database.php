<!-- Połączenie z bazą danych
$db - tworzenie obiektu db klasy PDO, który posiada 4 parametry inicjujące (1: silnik bazy: mysql, 
namiary na bazę, nazwa bazy, kodowanie znaków, 2:użytkownik bazy 'user', 3:hasło 'password', 4: opcjonalny,
dodatkowa tablica, dwa parametry:  'ATTR_EMULATE_PREPARES' (dla bezpieczeństwa) i 'ATTR_ERRMODE' 
(kod i opis błędu) -->
<?php

$config = require_once 'config.php';

try {

	
	$db = new PDO("mysql:host={$config['host']};dbname={$config['database']};charset=utf8", $config['user'], $config['password'], [
		PDO::ATTR_EMULATE_PREPARES => false, 
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	]);
	
} catch (PDOException $error) {
	
	echo $error->getMessage();
	exit('Database error');
	
}

