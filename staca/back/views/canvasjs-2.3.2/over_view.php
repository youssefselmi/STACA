<?php 
$db=config::getConnexion();

$req2= $db->query("SELECT id_client as client,nbr_visites as nbr from best_customers ");
$req2->execute();
      $liste_C= $req2->fetchALL(PDO::FETCH_OBJ);

$dataPoints2 = array();

foreach ($liste_C as $row) {
 $dataPoints2[] = array('label' => $row->client, 'y' => $row->nbr);
}

?>
<?php 
$db=config::getConnexion();

$req1= $db->query("SELECT count(*) as number_orders, DATE_FORMAT(date_commande,'%b') as date_de_commande from sales GROUP BY DATE_FORMAT(date_commande,'%b')");
$req1->execute();
      $overview_monthly_orders= $req1->fetchALL(PDO::FETCH_OBJ);

$dataPoints1 = array();

foreach ($overview_monthly_orders as $row) {
 $dataPoints1[] = array('label' => $row->date_de_commande, 'y' => $row->number_orders);
}



?>

<script>
var chart = new CanvasJS.Chart("chartContainer1",
    {
        animationEnabled: true,
        title: {
            text: "Spline Area Chart"
        },
        axisX: {
            interval: 10,
        },
        data: [
        {
            type: "splineArea",
            color: "rgba(255,12,32,.3)",
            dataPoints:  <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
        },
        ]
    });
chart.render();



var chart = new CanvasJS.Chart("chartContainer2",
{
    animationEnabled: true,
    theme: "light3",
    title:{
        text: ""
    },
    axisY: {
        title: "Order's Number"
    },
    data: [{
        type: "column",
        yValueFormatString: "#,##0.## tonnes",
        dataPoints:  <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
</script>