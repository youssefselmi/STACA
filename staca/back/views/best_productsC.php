<?php
include "../connexion.php";
class best_sellers{
    function afficher_best(){
        $sql="SELECT  FROM best_sellers";
        $db=config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}
?>