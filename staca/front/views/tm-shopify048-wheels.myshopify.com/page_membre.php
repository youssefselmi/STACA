<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 

	 echo 'Votre login est <b>'.$_SESSION['l'].'</b> <br>et votre mot de passe est <b>'.$_SESSION['p'].
	'</b><br>Votre role est : '.$_SESSION['r'].' <br/> Identifiant de la session est :'.session_id().'</br>'; 
	echo '<a href="./logout.php">Cliquer pour se déconnecter</a>';
	if($_SESSION['r']=='Admin')
		header('Location: cart.php');
	if($_SESSION['r']=='Client')

echo("<script> window.location.replace(\" ../../../STACA_ADMIN/html.designstream.co.in/pink-desh/dark/index.html\")</script>");

}

else { 
      echo 'Veuillez vous connecter </br>';  
	  echo '<a href="./auth.html">Cliquer pour se connecter</a>';

}  
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>