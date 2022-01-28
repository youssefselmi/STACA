<?php
include "../connexion.php";
$db=config::getConnexion();

   $req1= $db->query("SELECT id_produit as products,sum(qte),DATE_FORMAT(date_vente,'%m/%Y') as date_de_vente from ventes_produits GROUP BY id_produit,DATE_FORMAT(date_vente,'%m/%Y')");
   $req1->execute();
         $liste= $req1->fetchALL(PDO::FETCH_OBJ);

 $dataPoints = array();
 
foreach ($liste as $row) {
    $dataPoints[] = array('label' => $row->date_de_vente, 'y' => $row->products);
}
?>

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Gold Reserves"
	},
	axisY: {
		title: "Gold Reserves (in tonnes)"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>               