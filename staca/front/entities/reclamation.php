<?PHP
class reclamation{
	private $email;
	private $id;
	private $objet;
	private $message;
	
	function __construct($email,$objet,$message){
		$this->email=$email;
	
		$this->objet=$objet;
		$this->message=$message;

	}
	
	function getemail(){
		return $this->email;
	}
	function getid(){
		return $this->id;
	}
	function getobjet(){
		return $this->objet;
	}

	function getmessage(){
		return $this->message;
	}



	function setemail($email){
		$this->email=$email;
	}

	function setid($id){
		$this->id=$id;
	}
	function setobjet($objet){
		$this->objet;
	}
	
	function setmessage($message){
		$this->message=$message;
	}
	
}

?>