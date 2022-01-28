                     <table class="table table-hover">
            <thead>
              <tr>
                <th  style="width: 20%">ID</th>
                <th>Nom</th>
                 <th>Date_debut</th>
                 <th>Date_fin</th>                 
                 <th>Prix_nouveau</th>
                 <th style="width: 20%">Description</th>
                 <th>supprimer</th>
                 <th>modifier</th>
                 


                </tr>
            </thead>
<?php

if(isset($_POST['price_range'])){
 
    //Include database configuration file
  $dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "staca";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //set conditions for filter by price range
    $whereSQL = $orderSQL = '';
    $priceRange = $_POST['price_range'];
    if(!empty($priceRange)){
       
        $priceRangeArr = explode(',', $priceRange);
        $whereSQL = "WHERE prix_nouveau BETWEEN '".$priceRangeArr[0]."' AND '".$priceRangeArr[1]."'";
     $orderSQL = " ORDER BY prix_nouveau DESC ";
    }else{
        $orderSQL = " ORDER BY prix_nouveau DESC ";
    }
    
    //get product rows
    $query = $db->query("SELECT * FROM promo $whereSQL $orderSQL");
    
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
             $idppp=$row['idProd'];
    $sql="SELECT * from produit where id=$idppp";
    $NomProd=$db->query($sql);
    foreach($NomProd as $nn)
    {
        $nompp=$nn['nom'];
    }
    ?>
                   
      
<tr>
    <td><?PHP echo $row['id']; ?></td>
    <td><?PHP echo $nompp; ?></td> 
    <td><?PHP echo $row['date_debut']; ?></td>
    <td><?PHP echo $row['date_fin']; ?></td>
    <td><?PHP echo $row['prix_nouveau']; ?></td>
    <td><?PHP echo $row['description']; ?></td>
  <!--  <td><img width="80" src="images/<?php echo $row['image']?>" alt="<?php echo $row['image'] ?>"></td> -->
    <td>
    <form method="POST" action="supprimerPromo.php">
    <input type="submit" name="supprimer" value="supprimer" class="btn btn-danger btn-block">
    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    </form>
    </td>
    <td><a class="btn btn-success btn-block" href="modifiePromo.php?id=<?PHP echo $row['id']; ?>">
    Modifier</a></td>
    </tr>


                             
                
    <?php }
    }else{
        echo 'Product(s) not found';
    }
}
?>
</table>