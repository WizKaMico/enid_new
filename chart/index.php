<?php
	//connection
    require_once "../connection/ApiController.php";
    $portCont = new portalController();
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<!-- this is where we show our chart -->
<center><div id="piechart" style="width: 900px; height: 500px;"></div></center>
 
<!-- Load our Scripts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
<script type="text/javascript">  
	google.charts.load('current', {'packages':['corechart']});  
	google.charts.setOnLoadCallback(drawChart);  
	function drawChart(){  
    var data = google.visualization.arrayToDataTable([  
              	['Gender', 'Number'],  
              	<?php               
                                    $gid = $_GET['gid'];
                                    $checkStat = $portCont->getChartActiveSchoolYearSpecificChartForSy($gid);
                                    if(!empty($checkStat)){
                                        foreach ($checkStat as $key => $value) {  
                                        echo "['".$checkStat[$key]["gender"]."', ".$checkStat[$key]["number"]."],";  
                                        }
                                    }  
                ?>  
         	]);  
    var options = {  
          		title: 'Percentage of Male and Female Members',  
          		//is3D:true,  
          		pieHole: 0.4  
         	};  
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
    chart.draw(data, options);  
}  
</script>
</body>
</html>