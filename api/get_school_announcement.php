<?php 

require_once "../connection/ApiController.php";

$portCont = new portalController();

$eventArray = $portCont->allAnnoucement();

header('Content-Type: application/json');
echo json_encode($eventArray);

?>