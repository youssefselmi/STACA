<?PHP
class Produit{
	private $id;
	private $nom;
	private $prix;
	private $image;
	private $quantite;
	
	

	function __construct($id,$nom,$prix,$image,$quantite){
		$this->id=$id;
		$this->nom=$nom;
		$this->prix=$prix;
		$this->image=$image;
		$this->quantite=$quantite;
	
	}


	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->Nom;
	}
	function getPrix(){
		return $this->prix;
	}
	
	function getImage(){
		return $this->image;
	}
	
    function getQuantite(){
		return $this->quantite;
	}


	
	

	function setId($id){
		$this->id=$id;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	
	function setImage($image){
		 $this->image=$image;
	}
	
   
	function setQuantite($quantite){
		 $this->quantite=$quantite;
	}
	function setGouvernerat($gouvernerat){
		 $this->Gouvernerat=$gouvernerat;
	}
	function setPays($pays){
		 $this->Pays=$pays;
	}
	function setEmail($email){
		 $this->Email=$email;
	}

    function setCodePostal($codepostal){
		 $this->CodePostal=$codepostal;
	}
	
}

?>