
<?php
require_once "connection.php";

class User
{
	public $cin;
	public $nom;
	public $prenom;
	public $age;
	public $email;
	public $telephone;

	static $table="user";

	function __construct()
	{
		$this->db = new Connection();
	}
	/**
	 * getAll
	 * 
	 **/
	static function getAll()
	{
		$db = new Connection();
		return $db->select(self::$table);
	}

	function insert()
	{
		
		return $this->db->insert(self::$table,['cin', 'nom', 'prenom', 'age','email','telephone'], [$this->cin,$this->nom,$this->prenom,$this->age,$this->email,$this->telephone]);
	}
		static function getOne($cin)
	{
		$db = new Connection();
		$requette="SELECT * FROM ".$table." where cin='".$cin."'";
		$query=$db->sql->query($requette);
	}
	static function delete($cin){
		$db = new Connection();
		$requette="DELETE FROM ".$table." where cin='".$cin."'";
		$query=$db->sql->query($requette);
	}
	static function update($cin){
		 $db = new Connection;
		 $requette="UPDATE ".$table." SET ".$nom."=".$this->nom."AND".$prenom."=".$this->prenom."AND".$age."=".$this->age."AND".$email."=".$this->email."AND".$telephone."=".$this->telephone." WHERE cin=".$cin;
		$query=$db->sql->query($requette);
        
	}


}