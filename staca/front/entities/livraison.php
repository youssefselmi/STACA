<?PHP
class livraison{
	private $ref;
	private $id;
	private $adress;
	private $day;
	private $delivery_man;
	private $code_postal;
	private $statut;
	private $price;
	private $phone;
	function __construct($ref,$adress,$day,$delivery_man,$code_postal,$statut,$price,$phone){
		$this->ref=$ref;
	
		$this->adress=$adress;
		$this->day=$day;
		$this->delivery_man=$delivery_man;
		$this->code_postal=$code_postal;
		$this->statut=$statut;
		$this->price=$price;
		$this->phone=$phone;
	}
	
	function getref(){
		return $this->ref;
	}
	function getid(){
		return $this->id;
	}
	function getadress(){
		return $this->adress;
	}
	function getdelivery_man(){
		return $this->delivery_man;
	}
	function getday(){
		return $this->day;
	}

	function getcode_postal(){
		return $this->code_postal;
	}

	function getstatut(){
		return $this->statut;
	}

	function getprice(){
		return $this->price;
	}

	function getphone(){
		return $this->phone;
	}

	function setref($ref){
		$this->ref=$ref;
	}

	function setid($id){
		$this->id=$id;
	}
	function setadress($adress){
		$this->adress;
	}
	function setdelivery_man($delivery_man){
		$this->delivery_man=$delivery_man;
	}
	function setday($day){
		$this->day=$day;
	}
	
	function setcode_postal($code_postal){
		$this->code_postal=$code_postal;
	}

	function setstatut($statut){
		$this->statut=$statut;
	}

	function setprice($price){
		$this->price=$price;
	}

	function setphone($phone){
		$this->phone=$phone;
	}
}

?>