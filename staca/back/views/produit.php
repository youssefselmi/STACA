<?PHP
class produit{
	private $id;
	private $nom;
	private $prix;
	private $quantite;
	private $image;
	
	function __construct($id,$nom,$prix,$quantite,$image){
		$this->id=$id;
		$this->nom=$nom;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->image=$image;
	}
	function getid(){
		return $this->id;
	}
	
	function getnom(){
		return $this->nom;
	}
	function getprix(){
		return $this->prix;
	}
	function getquantite(){
		return $this->quantite;
	}
	
		function getimage(){
		return $this->image;
	}
	
	}
?>