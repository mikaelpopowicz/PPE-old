<?php
namespace Library;
 
class PDOFactory
{
	public static function getMysqlConnexion()
	{
		$db = new \PDO('mysql:host=localhost;dbname=coaching', 'root', 'toor');
		$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
     
		return $db;
	}
}