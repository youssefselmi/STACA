<?php
require_once "../connexion.php";
class customerC{
    // afficher tous les clients ... 
function afficher_client(){
        $sql="SELECT * FROM best_customers where nbr_visites > 0";
        $db=config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function top_5_customers(){
        $sql="SELECT * from best_customers ORDER BY nbr_visites DESC LIMIT 5";
        $db=config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    
    
    function total_sales_today(){
        $sql="SELECT sum(prix) as total_prix from sales where date_commande=DATE( NOW() )";
        $db=config::getConnexion();
        try{
            $req=$db->query($sql);
            $ss=$req->fetch();
            return intval($ss['total_prix']); 
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function total_income(){
        $sql="SELECT sum(prix) as total_prix from sales where etat='delivered'";
        $db=config::getConnexion();
        try{
            $req=$db->query($sql);
            $ss=$req->fetch();
            return intval($ss['total_prix']); 
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function total_new_orders(){
        $sql="SELECT count(*) as nombre_commande_today from commande where EXTRACT(Day from date_commande)=EXTRACT(Day from DATE( NOW() ))";
        $db=config::getConnexion();
        try{
            $req=$db->query($sql);
            $ss=$req->fetch();
            return intval($ss['nombre_commande_today']); 
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
    }
}
function recommended_products(){
    $sql="SELECT *  from best_sellers ORDER BY nbr_ventes DESC)";
    $db=config::getConnexion();
    try{
        $liste=$db->query($sql);
        return $liste;
         
        }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
}
}
    function view_new_orders(){
        $sql="SELECT *  from commande where EXTRACT(Day from date_commande)=EXTRACT(Day from DATE( NOW() ))";
        $db=config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
             
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
    }
}
    function view_total_orders(){
        $sql="SELECT *  from sales WHERE etat='pending' ";
        $db=config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
             
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
    }
}
function pending_orders(){
    $sql="SELECT count(*) as pendin_orders from sales where etat='pending' ";
    $db=config::getConnexion();
    try{
        $req=$db->query($sql);
        $ss=$req->fetch();
        return intval($ss['pendin_orders']); 
        }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
}
}

function recuperer_customer($id_best){
    $sql="SELECT * FROM best_customers where id_best=$id_best";
    $db=config::getConnexion();
    try{
        $liste=$db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

function ajouter_customer($customer){
    $sql="INSERT INTO best_customers (id_best,id_client,nom,prenom,nbr_visites) VALUES (:id_best,:id_client,:nom,:prenom,:nbr_visites)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $id_best=$customer->getid_best();
        $id_client=$customer->getid_client();
        $nom=$customer->getnom();
        $prenom=$customer->getprenom();
        $nbr_visites=$customer->getnbr_visites();
        // attribuer les valeurs d'employe à labase de donnée ...
        $req->bindValue(':id_best',$id_best);
        $req->bindValue(':id_client',$id_client);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':nbr_visites',$nbr_visites);
        // executer le requete...
        $req->execute();

        }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}

function modifier_customer($customer,$id_best){
    $sql="UPDATE best_customers SET id_best=:id_bestn,id_client=:id_client,nom=:nom,prenom=:prenom,nbr_visites=:nbr_visites WHERE id_best=:id_best";
    
    $db=config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    try{		
    $req=$db->prepare($sql);
    $id_bestn=$customer->getid_best();
    $id_client=$customer->getid_client();
    $nom=$customer->getnom();
    $prenom=$customer->getprenom();
    $nbr_visites=$customer->getnbr_visites();
    //$datas = array(':id_bestn'=>$id_bestn,':id_best'=>$id_best,':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
    
    
    $req->bindValue(':id_best',$id_best);
    $req->bindValue(':id_bestn',$id_bestn);
    $req->bindValue(':id_client',$id_client);
    $req->bindValue(':nom',$nom);
    $req->bindValue(':prenom',$prenom);
    $req->bindValue(':nbr_visites',$nbr_visites);
    
    
        $s=$req->execute();
        
       // header('Location: index.php');
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();
//echo " Les datas : " ;
//print_r($datas);
    }

}

function loyal_customers(){
    $sql="INSERT INTO fidelite SELECT id_client as id_c,sum(prix) as sales,sum(prix)/10 as ptsfidelite from commande GROUP BY id_client";
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