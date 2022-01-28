<?PHP
class livreur{
	private $cin;
	private $nom;
	private $prenom;
	private $adresse;
	private $ville;
	private $telephone;
	private $email;
	private $code_postal;

	function __construct($cin,$nom,$prenom,$adresse,$ville,$telephone,$email,$code_postal){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
		$this->ville=$ville;
		$this->telephone=$telephone;
		$this->email=$email;
        $this->code_postal=$code_postal;


	}
	
	function getcin(){
		return $this->cin;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}

	function getadresse(){
		return $this->adresse;
	}

	
	function getville(){
		return $this->ville;
	}

	
    function gettelephone(){
		return $this->telephone;
	}
	
	

	
	function getemail(){
		return $this->email;
	}

    function getcode_postal(){
		return $this->code_postal;
	}



function setcin($cin){
		$this->nom=$cin;
	}



	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom;
	}
	

    function setadresse($adresse){
		 $this->adresse=$adresse;
	}

	function setville($ville){
		 $this->ville=$ville;
	}
	

    function settelephone($telephone){
		 $this->telephone=$telephone;
	}


	function setemail($email){
		 $this->email=$email;
	}

    function setcode_postal($code_postal){
		 $this->code_postal=$code_postal;
	}
	

}
?>