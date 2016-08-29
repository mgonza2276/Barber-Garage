<?php
	
	class BarberGarage_BD{
		private static $db_host="localhost";
		private static $db_name="barberia";
		private static $db_user ="root";
		private static $db_pass ="";
		// private static $db_host="dnjs2.wnkserver2.com:3306";
		// private static $db_name="bsstudio_equipo1";
		// private static $db_user ="bsstudio_equipo1";
		// private static $db_pass ="adsiequipo1";
		private static $conexion= null;


		public static function Connect(){	
			if (self::$conexion==null) {
				try{
					self::$conexion = new PDO("mysql:host=".self::$db_host.";dbname=".self::$db_name, self::$db_user, self::$db_pass);
 					self::$conexion -> exec("SET CHARACTER SET utf8");
 					
 						 
				}
				catch(PDOException $e){
					die($e->getMessage());
					echo "sin conexion";
				}
			}
		return self::$conexion;
		}
		public static function Disconect(){
			self::$conexion==null;
			}

	}
  ?>