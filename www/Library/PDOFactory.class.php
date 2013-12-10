<?php
namespace Library;
 
class PDOFactory
{
	public static function getMysqlConnexion()
	{
<<<<<<< HEAD
		$db = new \PDO('mysql:host=localhost;dbname=coaching', 'root', 'toor');
=======
		$db = new \PDO('mysql:host=localhost;dbname=coaching', 'root', 'root');
>>>>>>> 9ec8f32198a5ed7ad8c931d0ca56652edc82cfb4
		$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
     
		return $db;
	}
}