<?php
require_once("fusioncharts.php");

require_once("../config.php"); 
$conn = config::getConnexion();
//$conn=$c->cnx;
$strQuery = "SELECT count(*) as numeroP FROM reclamationproduit";

// Execute the query, or else return the error message.
$result = $conn->query($strQuery);
$s = $result->fetchAll();

foreach ($s as $row) { $x = $row['numeroP']; }

$query = "SELECT COUNT(id) as nbr , Round(numerofacture,0) as numerofacture FROM reclamationproduit GROUP BY round(numerofacture,0) ORDER BY COUNT(id) DESC limit 6";
$r = $conn->query($query);
$m = $r->fetchAll();

$arrData = array(
    "chart" => array(
      "caption" => "Pourcentage des produits clasés par note",
      "subCaption"  =>  "2017",
      "numberPrefix"  =>  "",
      "showBorder"  =>  "0",
      "use3DLighting"  =>  "0",
      "enableSmartLabels"  =>  "0",
      "startingAngle"  => "310",
      "showLabels"  =>  "0",
      "showPercentValues"  =>  "1",
      "showLegend"  =>  "1",
      "defaultCenterLabel"  =>  "Total : $x",
      //"centerLabel"  => "Revenue from $label: $value",
      "centerLabelBold"  =>  "1",
      "showTooltip"  => "0",
      "decimals"  =>  "0",
      "useDataPlotColorForLabels"  =>  "1",
      "theme"  =>  "fint"
    )
);
$arrData["data"] = array();

// Push the data into the array
 foreach ($m as $row) {
 array_push($arrData["data"], array(
     "label" => $row["numerofacture"],
     "value" => $row["nbr"]
     )
 );
 }
 $jsonEncodedData = json_encode($arrData);

 $fusioncharts = new FusionCharts("doughnut2d", "ex2", 500,500,"chart-1",'json', $jsonEncodedData);
    $fusioncharts->render();
?>
