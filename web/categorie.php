
<?PHP
class categorie{
	private $id_cat;
	private $nom;
	
	
	function __construct($id_cat,$nom){
		$this->id_cat=$id_cat;
		$this->nom=$nom;
		}
	function getid(){
		return $this->id_cat;
	}
	
	function getnom(){
		return $this->nom;
	}
}
?>