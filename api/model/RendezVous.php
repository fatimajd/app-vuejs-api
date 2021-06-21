
<?php
require_once "connection.php";

class RendezVous
{
	public $date;
	public $horaire;
	public $type;
	public $referenceuser;

	static $table="rendezvous";

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
		
		return $this->db->insert(self::$table,['date', 'horaire', 'type', 'referenceuser'], [$this->date,$this->horaire,$this->type,$this->referenceuser]);
	}
	static function getOne($id)
	{
		$db = new Connection();
		return $db->selectById(self::$table,$id);
	}
	static function delete($id){
		$db = new Connection();
		$db->delete(self::$table,$id);
	}
	static function update($id){
		 $db = new Connection;
        $db->update(self::$table,['date','horaire','type','referenceuser'],[$this->date,$this->horaire,$this->type,$this->referenceuser],$id);
	}


}