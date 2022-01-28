<?PHP
class commentaire{
	private $id;
	private $contenue;
	private $nom;
	private $email;
	private $date;
	function __construct($id,$contenue,$nom,$email,$date){
		$this->id=$id;
		$this->contenue=$contenue;
		$this->nom=$nom;
		$this->email=$email;
		$this->date=$date;
	}
	
	function getid(){
		return $this->id;
	}
	function getcontenue(){
		return $this->contenue;
	}
	function getnom(){
		return $this->nom;
	}
	function getdate(){
		return $this->date;
	}
	function getemail(){
		return $this->email;
	}

	function setcontenue($contenue){
		$this->contenue=$contenue;
	}
	function setnom($nom){
		$this->nom;
	}
	function setdate($date){
		$this->date=$date;
	}
	function setemail($email){
		$this->email=$email;
	}
	
}

?>