<?PHP
class adresse{
	
	private $nom;
	private $prenom;
	private $adresse;
	private $postal;
	private $city;
	function __construct($nom,$prenom,$adresse,$postal,$city){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
		$this->postal=$postal;
		$this->city=$city;
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
	function getpostal(){
		return $this->postal;
	}
	function getcity(){
		return $this->city;
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
	function setpostal($postal){
		$this->postal=$postal;
	}
	function setcity($city){
		$this->city=$city;
	}
	
}

?>