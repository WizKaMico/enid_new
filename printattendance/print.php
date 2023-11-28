
<?php
function generateRow() {
    $contents = '';
    require_once "../connection/ApiController.php";
    $portCont = new portalController();
    $sid = $_GET['sid'];
    $attendanceToday = $portCont->myAttendanceMonitoringOverallTeacher($sid);
    foreach ($attendanceToday as $item) {


        $contents .= "
            <tr>
                <td>".$item['scid']."</td>
                <td>".$item['fname']."</td>
                <td>".$item['room']."</td>
                <td>".$item['building']."</td>
                <td>".$item['timein']."</td>
                <td>".$item['timeout']."</td>
                <td>".$item['date_inserted']."</td>
            </tr>
        ";
    }

    return $contents;
}

require_once('../tcpdf/tcpdf.php');
$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetTitle("ABULALAS ELEMENTARY SCHOOL");
$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont('helvetica');
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetAutoPageBreak(TRUE, 10);
$pdf->SetFont('helvetica', '', 11);
$pdf->AddPage();
$content = '';
$content .= '
    <h2 align="center">ABULALAS ELEMENTARY SCHOOL</h2>
    <table border="1" cellspacing="0" cellpadding="3">  
        <tr>  
            <th width="10%">AID</th>
            <th width="20%">STUDENT</th>
            <th width="20%">ROOM</th>
            <th width="20%">BUILDING</th>
            <th width="20%">TIME-IN</th>
            <th width="10%">DATE</th>
        </tr>  
';  
$content .= generateRow();  
$content .= '</table>';  
$pdf->writeHTML($content); 
ob_clean(); 
$pdf->Output('receipt.pdf', 'I');
?>
