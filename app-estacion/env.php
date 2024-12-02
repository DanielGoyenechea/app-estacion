<?php 

	/**
	 * 
	 * En el caso de utilizar el archivo .env
	 * 
	 * $host = $_ENV["HOST"];
	 * otra forma
	 * define("HOST", $_ENV["HOST"]);
	 * 
	 * */

	/*< Sección para ejecutar la app en modo release o debug*/
	define("RELEASE", 0); // Ejecución
	define("DEBUG", 1); // Desarrollo

	/*< Para modo debug o release cambiar */
	define("MODE", DEBUG);

	define("TOKEN", "C5xZAVJGKkhwQr8hiPhmlh32rjDIBc0tbGuY5fO1MtMAe2UZsvKll2ycOUcwwrXf");

	// Token unico de acceso a la apliacion (varia para cada cliente)
	$_ENV['TOKEN_APP'] = TOKEN;

	// variables de entorno para nombres de la aplicacion y rutas
	$_ENV["PROJECT_NAME"] = "app-estacion";
	$_ENV["PROJECT_DESCRIPTION"] = "Somos app-estacion un sitio donde podras ver la informacion de distintas estaciones meteorologicas";
	$_ENV["PROJECT_AUTHOR"] = "Daniel-Goyenechea";
	$_ENV["PROJECT_AUTHOR_CONTACT"] = "Dany1goyenechea@gmail.com";
	$_ENV["PROJECT_WEB"] = "";
	$_ENV["PROJECT_KEYWORDS"] = "Daniel goyenechea,programación,programacion,robotica,robótica,informática,informatica,desarrollo,web";

	$_ENV["PROJECT_MODE"] = MODE ? "?v=".mt_rand(0, 9999) : "";

	// variables de entorno para acceso a la base de datos
	$_ENV["HOST"] = "localhost";
	$_ENV["USER"] = "6929";
	$_ENV["PASS"] = "tigre.manzano.silla";
	$_ENV["DB"] = "6929";

	// variables de entorno para acceso al correo electrónico
	$_ENV["MAILER_REMITENTE"] = 'huertaenred@gmail.com'; // <=== correo de la app
	$_ENV["MAILER_NOMBRE"] = 'Huerta en Red'; // <=== Nombre que se muestra al destinatario
	$_ENV["MAILER_PASSWORD"] = 'aaaa bbbb cccc dddd'; // <=== token

	$_ENV["MAILER_HOST"] = 'smtp.gmail.com';
	$_ENV["MAILER_PORT"] = '587';
	$_ENV["MAILER_SMTP_AUTH"] = true;
	$_ENV["MAILER_SMTP_SECURE"] = 'tls';


 ?>