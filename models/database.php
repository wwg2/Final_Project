<?php
class Database {
	protected static $sql;
	private static $dsn = 'mysql:host=sql2.njit.edu;dbname=wwg2';
	private static $username = "wwg2";
	private static $password = "JF6UOlD8";
		//PDO object is returned
		public function connect() {
			if(!isset(self::$sql)) {
				try {
					self::$sql = new PDO(self::$dsn, self::$username, self::$password);
				} catch (PDOException $e) {
					echo $e->getMessage();
					exit();
				}
			}
			return self::$sql;
		}
    public function query($query) {
	        try {
	    		$sql = $this->connect();
	    		$statement = $sql->prepare($query);
	    		$statement->execute();
	    		$result = $statement->fetchAll();
	    		$statement->closeCursor();
	        } catch (PDOException $e) {
	            return $e;
	        }
			return $result;
		}
}
?>
