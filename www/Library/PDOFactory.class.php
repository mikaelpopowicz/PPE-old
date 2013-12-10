<?php
namespace Library;
 
class PDOFactory
{
	public static function getMysqlConnexion()
	{
<<<<<<< HEAD
		$db = new \PDO('mysql:host=localhost;dbname=coaching', 'root', 'root');
=======
		$db = new \PDO('mysql:host=localhost;dbname=coaching', 'coaching', 'motdepasse');
>>>>>>> 0d740969407ba16e6e5df105589b6b0e75cd2c49
		$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
     
		return $db;
	}
}