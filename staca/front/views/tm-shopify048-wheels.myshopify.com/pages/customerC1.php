<?php
require_once  "../../config.php";
class customerC{
    // afficher tous les clients ... 

function top_prod(){
    $sql="INSERT INTO tab2 SELECT nom as nom,prix as prix,image as image from produit ORDER BY prix DESC LIMIT 3";
    $db=config::getConnexion();
    try{
        $liste=$db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
/*
function recuperer_customer($id_best){
    $sql="SELECT * FROM commande where id_best=$id_best";
    $db=config::getConnexion();
    try{
        $liste=$db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}*/

}
?>