<?php

	/**
	* @file Users.php
	* @brief Implementación de la clase Users para el manejo de usuario.
	* @author Matias Leonardo Baez
	* @date 2024
	* @contact elmattprofe@gmail.com
	*/
	
	// Incluimos la clase que conecta a la base de datos
	include_once 'DBAbstract.php';

	/*< incluimos la clase para enviar correo electrónico*/
	include_once 'Mailer.php';
	
	/**
	 * 
	 * Clase para trabajar con la tabla de usuarios
	 * 
	 * */
	class Users extends DBAbstract{

		private $attributes = array();
		/**
		 * 
		 * @brief Al instanciar hace autocarga de atributos
		 * 
		 * ejectuta el constructor de DBAbstract
		 * Realiza auto creación de atributos en la clase en base a la tabla
		 * 
		 * */
		function __construct(){
			parent::__construct();


			/**< Obtiene información de la tabla */
		 	$request = $this->query("DESCRIBE usuarios");

		 	$request = $request->fetch_all(MYSQLI_ASSOC);

			foreach ($request as $key => $value) {

				$var = $value["Field"];

				/**< Guarda los nombres de las columnas */
				$this->atrributes[] = $var;

				$this->$var = "";
			}
		}

}
 ?>