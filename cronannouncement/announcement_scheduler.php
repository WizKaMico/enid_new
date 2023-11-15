<?php 

require_once "../connection/ApiController.php";

$portCont = new portalController();

date_default_timezone_set('Asia/Manila'); 

$date_today = date('Y-m-d');
$portCont->checkAnnouncement();
