<?PHP


include "../entities/livraison.php";
include "../core/livraisonC.php";

//if (isset($_POST['modifier2'])){
    $livraison=new livraison($_POST['ref'],$_POST['adress'],$_POST['day'],$_POST['delivery_man'],$_POST['code_postal'],$_POST['statut'],$_POST['price'],$_POST['phone']);
    

    $livraisonC->modifierlivraison($livraison,$_POST['id_ini']);
    echo $_POST['id_ini'];
    //header('Location: livraison.php');
//}


//
?>