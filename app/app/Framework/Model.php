<?php 

namespace App\Framework;

class Model
{
	protected static $dbh;

	public static function init(\PDO $dbh)
	{
		static::$dbh = $dbh;
		//self::$dbh = $dbh;
	}

	

	public function all()
	{
		$query = 'SELECT * FROM ' . $this->table;
		$stmt = static::$dbh->query($query);
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function find($key)
	{
		$query = 'SELECT * FROM ' . $this->table . ' WHERE '. $this->key .' = :key';
		$stmt = static::$dbh->prepare($query);
		$params = array(':key' => $key);
		$stmt->execute($params);
		return $stmt->fetch(\PDO::FETCH_ASSOC);
	}

// ends class
}
