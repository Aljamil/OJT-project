


<?php
  require('../ojt/fpdf/fpdf.php');
  require('../ojt/connectDB.php');

  							  if (isset($_POST['employeeName'])) {
                                $nameEmploy = $_POST["employeeName"];
                                }

                                else{
                                    $nameEmploy = "";
                                }

                                if(isset($_POST['idE'])){
                                    $employID = $_POST['idE'];
                                }
                                else{
                                    $employID = "";
                                }
           
                                if(isset($_POST["month"]))
                                {
                                  $month = $_POST["month"];
                                }

                                else{
                                    $month = "";
                                }



                                if(isset($_POST["year"]))
                                {
                                  $year = $_POST["year"];
                                }

                                else{
                                    $year = "";
                                }

                                for($i = 1; $i <= 31; $i++){
                                if(isset($_POST["date" . $i])) {
                                        $date[$i] = $_POST["date" . $i];
                                    }
                                    else{
                                         $date[$i] = "";
                                    }
                                }

                                if(isset($_POST["number"]))
                                {
                                  $num = $_POST["number"];
                                }

                                else{
                                    $num = 0;
                                }

                                if(isset($_POST["season"]))
                                {
                                  $period = $_POST["season"];
                                }

                                else{
                                    $period = 0;
                                }

                $absSum = 0.0;
								$utSum = 0.0;
								$otSum = 0.0;

								$monthName = date('F', mktime(0,0,0, $month, 10)); 

        $sql = mysqli_query($connection, "SELECT FormatDTRCopy from setting where ID = '1' ");
        $row = $sql-> fetch_assoc();


$pdf = new FPDF('P', 'pt', 'Letter');
$pdf->AddPage();

$yPos=$pdf->GetY();
$xPos=$pdf->GetX();

if(($period == "1st Half (28-12)") || ($period == "2nd Half (13-27)") ){
$pdf->Rect(27, 22, 262, 540, 'D');
}

else{
$pdf->Rect(27, 22, 262, 750, 'D'); 
}
$pdf->SetFont('Arial','',10);
$pdf->Cell(260,10, "",0, 1, 'C');
$pdf->Cell(260,10, "",0, 1, 'C');
$pdf->Cell(260,10, "",0, 1, 'C');
$pdf->SetFont('Arial','B',15);
$pdf->Cell(260,15, "Daily Time Record",0, 1, 'C');
$pdf->Ln(5.0);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(60,10, "ID: " . $employID , 0, 1);
$pdf->Cell(60,20, "NAME: " . $nameEmploy, 0, 1);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(60,10, "For the months of " . $monthName . ", " . $year , 0, 1);
$pdf->Cell(60,10, "Official hours of arrival      (Regular days  23)", 0, 1);
$pdf->Cell(60,10, "and departure                   (Saturdays   4) " , 0, 1);

$pdf->Cell(23, 15, "DAY", 'LTR', 0, 'L');
$pdf->Cell(64, 15, "MORNING", 'LTR', 0, 'C'); 
$pdf->Cell(64, 15, "AFTERNOON", 'LTR', 0, 'C');  
$pdf->Cell(64, 15, "OVERTIME", 'LTR', 0, 'C');    
$pdf->Cell(23, 15, "ABS", 'LTR', 0, 'C');  
$pdf->Cell(23, 15, "UT", 'LTR', 1, 'C');
$pdf->Cell(23, 15, "", 'LRB', 0, 'C');
$pdf->Cell(32, 15, "IN", 1, 0, 'C');  
$pdf->Cell(32, 15, "OUT", 1, 0, 'C');
$pdf->Cell(32, 15, "IN", 1, 0, 'C');  
$pdf->Cell(32, 15, "OUT", 1, 0, 'C');
$pdf->Cell(32, 15, "IN", 1, 0, 'C');  
$pdf->Cell(32, 15, "OUT", 1, 0, 'C');
$pdf->Cell(23, 15, "", 'LRB', 0, 'C');
$pdf->Cell(23, 15, "", 'LRB', 1, 'C');

$inam[] = $outam[] = $inpm[] = $inot[] = $outpm[] = $outot[] = $abs[] = $ut[] = $lt[] = $ot[] = $lateam[] = $latepm[] = " ";


for($i = 1; $i <= 31; $i++){
$sql = mysqli_query($connection, "SELECT DISTINCT DateDTR, AmIN, AmOUT, PmIN, PmOUT, OtIN, OtOUT, Absent, Undertime, Overtime, LateAm, LatePm from tmpdtr Where DateDTR = '$date[$i]' AND EmployeeID = '$employID' order by ID");
        if($sql->num_rows > 0){
                        while($row = $sql->fetch_assoc()){
                          $inam[$i] = $row['AmIN'];
                          $outam[$i] = $row['AmOUT'];
                          $inpm[$i] = $row['PmIN'];
                          $outpm[$i] = $row['PmOUT'];
                          $inot[$i] = $row['OtIN'];
                          $outot[$i] = $row['OtOUT'];
                          $abs[$i] = $row['Absent'];
                          $ut[$i] = $row['Undertime'];
                          $ot[$i] = $row['Overtime'];
                          $lateam[$i] = $row['LateAm'];
                          $latepm[$i] = $row['LatePm'];       
                     }  
                     }
                     else{
                      
                      $inam[$i] = "";
                      $outam[$i] = "";
                      $inpm[$i] = "";
                      $outpm[$i] = "";
                      $inot[$i] = "";
                      $outot[$i] = "";
                      $abs[$i] = "";
                      $ut[$i] = "";
                      $ot[$i] = "";
                      $lateam[$i] = "";
                      $latepm[$i] = "";
                      
                     }
                 }

                  function knowLate($time, $late, &$pdf){

                  if($late == 1){
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->Cell(32, 15, $time , 1, 0, 'C');
                    $pdf->SetTextColor(0, 0, 0);
                  }
                  else{
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(32, 15, $time , 1, 0, 'C');
                    $pdf->SetTextColor(0, 0, 0);
                  }

                }


for($i = 1; $i <= intval($num); $i++){


$pdf->Cell(23, 15, $i , 1, 0, 'C', false);
knowLate($inam[$i], $lateam[$i], $pdf);  
$pdf->Cell(32, 15, $outam[$i], 1, 0, 'C', false);
knowLate($inpm[$i], $latepm[$i], $pdf);  
$pdf->Cell(32, 15, $outpm[$i], 1, 0, 'C', false);
$pdf->Cell(32, 15, $inot[$i] , 1, 0, 'C', false);  
$pdf->Cell(32, 15, $outot[$i], 1, 0, 'C', false);
$pdf->Cell(23, 15, $abs[$i] , 1 , 0, 'C', false);
$pdf->Cell(23, 15, $ut[$i] , 1, 1, 'C', false);

    $absSum += $abs[$i];
    $utSum += $ut[$i];
    $otSum += $ot[$i];

}

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(23, 13, "OVERTIME: " , 0, 0, 'L');
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetTextColor(255, 0, 0);
$pdf->Cell(100, 13, $otSum , 0, 0, 'C');
$pdf->Cell(100, 13, $absSum , 0, 0, 'R');
$pdf->Cell(40, 13, $utSum , 0, 1, 'R');
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(0, 8, "______________________________________________", 0, 1, 'L');
$pdf->SetFont('Arial', '', 7);
$pdf->MultiCell(250, 10, "   I CERTIFY on my honor that the above is a true and a correct report of the hours of work performed, record of which was made daily at the time or arrival and departure from office.", 0, 'J', false);
$pdf->MultiCell(250, 10, "\n _________________________ \n Signature \n Verified as to prescribed office hours.", 0, 'C');

$pdf->SetAutoPageBreak(false);
$pdf->Cell(250, 30, " _______________________       _______________________", 0, 1, 'C');
$pdf->Cell(250, 1,  "       HR MANAGER                           FINANCE MANAGER   ", 0 , 0, 'C');

//This is for Duplicate

if ($row['FormatDTRCopy'] == '1') {
$xAdd=280;
$xAddText=560;
$pdf->SetX($xPos);
$pdf->SetY($yPos);
$pdf->Rect(27+$xAdd, 22, 262, 750, 'D');
$pdf->SetFont('Arial','',10);
$pdf->Cell(260+$xAddText,10, "",0, 1, 'C');
$pdf->Cell(260+$xAddText,10, "",0, 1, 'C');
$pdf->Cell(260+$xAddText,10, "",0, 1, 'C');
$pdf->SetFont('Arial','B',15);
$pdf->SetX($xPos+$xAdd);
$pdf->Cell(260,15, "Daily Time Record", 0, 1,'C');
$pdf->Ln(5.0);

$pdf->SetFont('Arial', '', 10);
$pdf->SetX($xPos+$xAdd);
$pdf->Cell(60+$xAddText,10, "ID: ", 0, 1, 'L', false);
$pdf->SetX($xPos+$xAdd);
$pdf->Cell(60+$xAddText,20, "NAME: ", 0, 1, 'L');
$pdf->SetFont('Arial', '', 8);
$pdf->SetX($xPos+$xAdd);
$pdf->Cell(60,10, "For the months of " . '' . ", " . '' , 0, 1);
$pdf->SetX($xPos+$xAdd);
$pdf->Cell(60,10, "Official hours of arrival  		(Regular days  23)", 0, 1);
$pdf->SetX($xPos+$xAdd);
$pdf->Cell(60,10, "and departure               		 (Saturdays   4) " , 0, 1);

$pdf->SetX($xPos+$xAdd);
$pdf->Cell(23, 15, "DAY", 'LTR', 0, 'L');
$pdf->Cell(64, 15, "MORNING", 'LTR', 0, 'C'); 
$pdf->Cell(64, 15, "AFTERNOON", 'LTR', 0, 'C');  
$pdf->Cell(64, 15, "OVERTIME", 'LTR', 0, 'C');    
$pdf->Cell(23, 15, "ABS", 'LTR', 0, 'C');  
$pdf->Cell(23, 15, "UT", 'LTR', 1, 'C');
$pdf->SetX($xPos+$xAdd);
$pdf->Cell(23, 15, "", 'LRB', 0, 'C');
$pdf->Cell(32, 15, "IN", 1, 0, 'C');  
$pdf->Cell(32, 15, "OUT", 1, 0, 'C');
$pdf->Cell(32, 15, "IN", 1, 0, 'C');  
$pdf->Cell(32, 15, "OUT", 1, 0, 'C');
$pdf->Cell(32, 15, "IN", 1, 0, 'C');  
$pdf->Cell(32, 15, "OUT", 1, 0, 'C');
$pdf->Cell(23, 15, "", 'LRB', 0, 'C');
$pdf->Cell(23, 15, "", 'LRB', 1, 'C');

/*
$inam[] = $outam[] = $inpm[] = $inot[] = $outpm[] = $outot[] = $abs[] = $ut[] = $lt[] = $ot[] = " ";
for($i = 1; $i <= 31; $i++){
$sql = mysqli_query($connection, "SELECT DISTINCT DateDTR, AmIN, AmOUT, PmIN, PmOUT, OtIN, OtOUT, Absent, Undertime, Overtime from tmpdtr Where DateDTR = '$date[$i]' AND EmployeeID = '$employID' order by ID");
				if($sql->num_rows > 0){
                        while($row = $sql->fetch_assoc()){
                          $inam[$i] = $row['AmIN'];
                          $outam[$i] = $row['AmOUT'];
                          $inpm[$i] = $row['PmIN'];
                          $outpm[$i] = $row['PmOUT'];
                          $inot[$i] = $row['OtIN'];
                          $outot[$i] = $row['OtOUT'];
                          $abs[$i] = $row['Absent'];
                          $ut[$i] = $row['Undertime'];
                          $ot[$i] = $row['Overtime'];       
                     }  
                     }
                     else{
                     	
                     	$inam[$i] = "";
                     	$outam[$i] = "";
                     	$inpm[$i] = "";
                     	$outpm[$i] = "";
                     	$inot[$i] = "";
                     	$outot[$i] = "";
                     	$abs[$i] = "";
                     	$ut[$i] = "";
                     	$ot[$i] = "";
                     	
                     }
                 }

*/

for($i = 1; $i <= 31; $i++){

$pdf->SetX($xPos+$xAdd);
$pdf->Cell(23, 15, $i , 1, 0, 'C', false);
$pdf->Cell(32, 15, '' , 1, 0, 'C', false);  
$pdf->Cell(32, 15, '' , 1, 0, 'C', false);
$pdf->Cell(32, 15, '', 1, 0, 'C', false);  
$pdf->Cell(32, 15, '', 1, 0, 'C', false);
$pdf->Cell(32, 15, '' , 1, 0, 'C', false);  
$pdf->Cell(32, 15, '', 1, 0, 'C', false);
$pdf->Cell(23, 15, '' , 1 , 0, 'C', false);
$pdf->Cell(23, 15, '' , 1, 1, 'C', false);

}

$pdf->SetX($xPos+$xAdd);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(23, 13, "OVERTIME: " , 0, 0, 'L');
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetTextColor(255, 0, 0);
$pdf->Cell(100, 13, '' , 0, 0, 'C');
$pdf->Cell(100, 13, '' , 0, 0, 'R');
$pdf->Cell(40, 13, '' , 0, 1, 'R');
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetX($xPos+$xAdd);
$pdf->Cell(0, 8, "______________________________________________", 0, 1, 'L');
$pdf->SetFont('Arial', '', 7);
$pdf->SetX($xPos+$xAdd);
$pdf->MultiCell(250, 10, "   I CERTIFY on my honor that the above is a true and a correct report of the hours of work performed, record of which was made daily at the time or arrival and departure from office.", 0, 'J', false);
$pdf->SetX($xPos+$xAdd);
$pdf->MultiCell(250, 10, "\n _________________________ \n Signature \n Verified as to prescribed office hours.", 0, 'C');

$pdf->SetAutoPageBreak(false);
$pdf->SetX($xPos+$xAdd);
$pdf->Cell(250, 30, " _______________________       _______________________", 0, 1, 'C');
$pdf->SetX($xPos+$xAdd);  
$pdf->Cell(250, 1,  "       HR MANAGER                           FINANCE MANAGER   ", 0 , 0, 'C');

}



$pdf->Output();
?>