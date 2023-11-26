<?php 

require_once "connection/ApiController.php";
$portCont = new portalController();

if (! empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "scan":
            if(isset($_POST['uid'])){
                date_default_timezone_set('Asia/Manila');
                $uid = $_POST['uid'];
                $date_inserted = date('Y-m-d');
                $current_time = date('g:i A');
                $room_id = $_POST['room_id'];
                if(!empty($uid) && !empty($date_inserted) && !empty($current_time) && !empty($room_id))
                {
                    $validateUid = $portCont->checkScannedUid($uid);
                    if(!empty($validateUid))
                    {
                        //  this is the not unique scan history its an overall dump so this doesnt require validation because it just counts the overall scan
                        //  $checkScanExistence = $portCont->myScannedNotUnique($uid,$room_id,$date_inserted);

                         $checkScanExistence = $portCont->myScannedUid($uid,$room_id,$date_inserted);
                         if(!empty($checkScanExistence))
                         {
                            $myScanCorrection = $portCont->checkCompleteScanability($uid,$room_id,$date_inserted);
                            if(!empty($myScanCorrection)){
                                $portCont->updateScannedUid($uid,$room_id,$current_time,$date_inserted);
                                header('Location:scan.php?view=delay&message=success&uid='.$uid.'&room_id='.$room_id);
                            }else{
                                header('Location:scan.php?view=home&message=success&uid='.$uid.'&room_id='.$room_id);
                            }
                          
                         }else{
                            $portCont->insertScannedNotUnique($uid,$room_id,$current_time,$date_inserted);
                            $portCont->insertScannedUid($uid,$room_id,$current_time,$date_inserted);
                            header('Location:scan.php?view=delay&message=success&uid='.$uid.'&room_id='.$room_id); 
                        }
                    }else{
                        header('Location:scan.php?view=home&message=error&room_id='.$room_id); 
                    }

                }else{
                    header('Location:scan.php?view=home&message=error');
                }

            }
            break;
    }
}

?>

