<?php 
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
?>

<?php
	require('../ojt/connectDB.php');
    require('../ojt/fpdf/fpdf.php');
    
    date_default_timezone_set('Asia/Manila');
    
    class PDF extends FPDF {
        var $msg;
        function ModifiedFooter($msg) {
            $this->SetLineWidth(2);
            $this->SetFont('Arial', '', 8);
            $this->SetXY(5,915);
            if ($msg == ''){
                $this->Cell(602, 10, "Page ".$this->PageNo()." of {nb}", 1, 1, 'R', false);
            } else {
                $this->Cell(602, 10, "$msg, Page ".$this->PageNo()." of {nb}", 1, 1, 'R', false);
            }
        }
    }
    
    if (isset($_POST["HiddenEmployeeID"])) {
            $employeeID = $_POST["HiddenEmployeeID"];
    } else {
        $employeeID = 'null';
    }

    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_assoc($result);
    
    
    /*
    if (!empty($row[''])) {
        $ = "  ".$row[''];
    } else {
        $ = "  ".'N/A';
    }
    */
    if (!empty($row['LastName'])) {
        $lastName = "  ".$row['LastName'];
    } else {
        $lastName = "  ".'N/A';
    }
    if (!empty($row['FirstName'])) {
        $firstName = "  ".$row['FirstName'];
    } else {
        $firstName = "  ".'N/A';
    }
    if (!empty($row['MiddleName'])) {
        $middleName = "  ".$row['MiddleName'];
    } else {
        $middleName = "  ".'N/A';
    }
    if (!empty($row['ExtName'])) {
        $extName = "  ".$row['ExtName'];
    } else {
        $extName = "  ".'N/A';
    }
    if (!empty($row['BirthDate'])) {
        $birthDate = "  ".date('m/d/Y', strtotime($row['BirthDate']));
    } else {
        $birthDate = "  ".'N/A';
    }
    if (!empty($row['BirthPlace'])) {
        $birthPlace = "  ".$row['BirthPlace'];
    } else {
        $birthPlace = "  ".'N/A';
    }
    if (!empty($row['Gender'])) {
        $gender = $row['Gender'];
    } else {
        $gender = 'N/A';
    }
    if (!empty($row['MaritalStatus'])) {
        $maritalStatus = $row['MaritalStatus'];
    } else {
        $maritalStatus = 'N/A';
    }
    if (!empty($row['Citizenship'])) {
        $citizenship = "  ".$row['Citizenship'];
    } else {
        $citizenship = "  ".'N/A';
    }
    if (!empty($row['Height'])) {
        $height = "  ".$row['Height'];
    } else {
        $height = "  ".'N/A';
    }
    if (!empty($row['Weight'])) {
        $weight = "  ".$row['Weight'];
    } else {
        $weight = "  ".'N/A';
    }
    if (!empty($row['BloodType'])) {
        $bloodType = "  ".$row['BloodType'];
    } else {
        $bloodType = "  ".'N/A';
    }
    if (!empty($row['GSISNo'])) {
        $gSISNo = "  ".$row['GSISNo'];
    } else {
        $gSISNo = "  ".'N/A';
    }
    if (!empty($row['PagibigNo'])) {
        $pagibigNo = "  ".$row['PagibigNo'];
    } else {
        $pagibigNo = "  ".'N/A';
    }
    if (!empty($row['PhilhealthNo'])) {
        $philhealthNo = "  ".$row['PhilhealthNo'];
    } else {
        $philhealthNo = "  ".'N/A';
    }
    if (!empty($row['SSSNo'])) {
        $sSSNo = "  ".$row['SSSNo'];
    } else {
        $sSSNo = "  ".'N/A';
    }
    if (!empty($row['Address1'])) {
        $address1 = "  ".$row['Address1'];
    } else {
        $address1 = "  ".'N/A';
    }
    if (!empty($row['ZipCode1'])) {
        $zipCode1 = "  ".$row['ZipCode1'];
    } else {
        $zipCode1 = "  ".'N/A';
    }
    if (!empty($row['ContactNo1'])) {
        $contactNo1 = "  ".$row['ContactNo1'];
    } else {
        $contactNo1 = "  ".'N/A';
    }
    if (!empty($row['Address2'])) {
        $address2 = "  ".$row['Address2'];
    } else {
        $address2 = "  ".'N/A';
    }
    if (!empty($row['ZipCode2'])) {
        $zipCode2 = "  ".$row['ZipCode2'];
    } else {
        $zipCode2 = "  ".'N/A';
    }
    if (!empty($row['ContactNo2'])) {
        $contactNo2 = "  ".$row['ContactNo2'];
    } else {
        $contactNo2 = "  ".'N/A';
    }
    if (!empty($row['EmailAddress'])) {
        $emailAddress = "  ".$row['EmailAddress'];
    } else {
        $emailAddress = "  ".'N/A';
    }
    if (!empty($row['CellphoneNo'])) {
        $cellphoneNo = "  ".$row['CellphoneNo'];
    } else {
        $cellphoneNo = "  ".'N/A';
    }
    if (!empty($row['AgencyNo'])) {
        $agencyNo = "  ".$row['AgencyNo'];
    } else {
        $agencyNo = "  ".'N/A';
    }
    if (!empty($row['TINNo'])) {
        $tINNo = "  ".$row['TINNo'];
    } else {
        $tINNo = "  ".'N/A';
    }
    if (!empty($row['SpouseLastname'])) {
        $spouseLastname = "  ".$row['SpouseLastname'];
    } else {
        $spouseLastname = "  ".'N/A';
    }
    if (!empty($row['SpouseFirstname'])) {
        $spouseFirstname = "  ".$row['SpouseFirstname'];
    } else {
        $spouseFirstname = "  ".'N/A';
    }
    if (!empty($row['SpouseMiddlename'])) {
        $spouseMiddlename = "  ".$row['SpouseMiddlename'];
    } else {
        $spouseMiddlename = "  ".'N/A';
    }
    if (!empty($row['SpouseWork'])) {
        $spouseWork = "  ".$row['SpouseWork'];
    } else {
        $spouseWork = "  ".'N/A';
    }
    if (!empty($row['SpouseEmployer'])) {
        $spouseEmployer = "  ".$row['SpouseEmployer'];
    } else {
        $spouseEmployer = "  ".'N/A';
    }
    if (!empty($row['SpouseAddress'])) {
        $spouseAddress = "  ".$row['SpouseAddress'];
    } else {
        $spouseAddress = "  ".'N/A';
    }
    if (!empty($row['SpouseTelephone'])) {
        $spouseTelephone = "  ".$row['SpouseTelephone'];
    } else {
        $spouseTelephone = "  ".'N/A';
    }
    if (!empty($row['MotherLastname'])) {
        $motherLastname = "  ".$row['MotherLastname'];
    } else {
        $motherLastname = "  ".'N/A';
    }
    if (!empty($row['MotherFirstname'])) {
        $motherFirstname = "  ".$row['MotherFirstname'];
    } else {
        $motherFirstname = "  ".'N/A';
    }
    if (!empty($row['MotherMiddlename'])) {
        $motherMiddlename = "  ".$row['MotherMiddlename'];
    } else {
        $motherMiddlename = "  ".'N/A';
    }
    if (!empty($row['FatherLastname'])) {
        $fatherLastname = "  ".$row['FatherLastname'];
    } else {
        $fatherLastname = "  ".'N/A';
    }
    if (!empty($row['FatherFirstname'])) {
        $fatherFirstname = "  ".$row['FatherFirstname'];
    } else {
        $fatherFirstname = "  ".'N/A';
    }
    if (!empty($row['FatherMiddlename'])) {
        $fatherMiddlename = "  ".$row['FatherMiddlename'];
    } else {
        $fatherMiddlename = "  ".'N/A';
    }
    
?>

<?php

    $formFontSize = 9;
    $formFontSizeSmall = 8.5;
    $labelFontSize = 10.5;
    $dataFontSize = 8;
    
    $pdf = new PDF('P', 'pt', array(612,936));
    //array(width,height) - 2nd argument is the measurement
    //612x936
    $pdf->SetMargins(2,15,2);
    $pdf->SetAutoPageBreak(true, 5);
    $pdf->AliasNbPages();
    
    //Page 1
    $pdf->AddPage();
    
    $pdf->SetDrawColor(0,0,0);
    $pdf->SetLineWidth(2);
    $pdf->Rect(5,15,602,80,'D');
    
    //$pdf->SetFillColor(255, 255, 255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->SetXY(6,19);
    $pdf->Cell(500, 7, "CS FORM 212 (Revised 2005)", 0, 0, 'L', false);
    
    $pdf->SetFont('Arial', 'B', 25);
    $pdf->SetXY(6,40);
    $pdf->Cell(600, 25, "PERSONAL DATA SHEET", 0, 0, 'C', false);
    
    $pdf->SetFont('Arial', '', 7);
    $pdf->SetXY(6,85);
    $pdf->Cell(300, 7, "Print legibly. Mark appropriate boxes      with     and use separate sheet if necessary.", 0, 0, 'L', false);
    
    $pdf->SetLineWidth(1);
    $pdf->Rect(124,85,7,7,'D');
    $pdf->SetFont('ZapfDingbats','',10);
    $pdf->SetXY(145,85);
    $pdf->Cell(9,9,"4",0,0,false);
    
    $pdf->SetLineWidth(1);
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->SetXY(341,79);
    $pdf->Cell(75, 15, "1. CS ID No.", 1, 0, 'L', false);
    $pdf->SetFont('Arial', '', 6);
    $pdf->SetXY(416,79);
    $pdf->Cell(190, 15, "(to be filled up CSC)", 1, 0, 'R', false);
    
    $pdf->SetLineWidth(2);
    $pdf->SetFont('Arial', 'BI', $labelFontSize);
    $pdf->SetXY(5,95);
    $pdf->Cell(602, 14, "I. PERSONAL INFORMATION", 1, 1, 'L', false);
    
    $pdf->SetLineWidth(1.5);
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(5,109);
    $pdf->MultiCell(100, 16, "  2. SURNAME\n       FIRST NAME\n       MIDDLE NAME", 1, 'L', false);
    
    $pdf->SetLineWidth(1.5);
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(105,109);
    $pdf->MultiCell(502, 16, $lastName, 1, 'L', false);
    $pdf->SetXY(105,125);
    $pdf->MultiCell(502, 16, $firstName, 1, 'L', false);
    $pdf->SetXY(105,141);
    $pdf->MultiCell(230, 16, $middleName, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(335,141);
    $pdf->MultiCell(160, 16, " 3. NAME EXTENSION (e.g. Jr.,Sr.)", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(495,141);
    $pdf->MultiCell(112, 16, $extName, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(5,157);
    $pdf->MultiCell(170, 16, "  4. DATE OF BIRTH (mm/dd/yyyy)", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(175,157);
    $pdf->MultiCell(112, 16, $birthDate, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(5,173);
    $pdf->MultiCell(100, 16, "  5. PLACE OF BIRTH", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(105,173);
    $pdf->MultiCell(182, 16, $birthPlace, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(5,189);
    $pdf->MultiCell(100, 16, "  6. SEX", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(105,189);
    $pdf->MultiCell(182, 16, "        Male              Female", 1, 'L', false);
    
    $pdf->SetLineWidth(1);
    $pdf->SetFont('ZapfDingbats','',10);
    $pdf->Rect(115,192,8,8,'D');
    $pdf->Rect(170,192,8,8,'D');
    if ($gender == 'Male') {
        $pdf->SetXY(112,192);
        $pdf->Cell(8,8,"4",0,0,false);
    } else if ($gender == 'Female') {
        $pdf->SetXY(167,192);
        $pdf->Cell(8,8,"4",0,0,false);
    }
    
    $pdf->SetLineWidth(1.5);
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(5,205);
    $pdf->MultiCell(100, 16, "  7. CIVIL STATUS\n \n ", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(105,205);
    $pdf->MultiCell(182, 16, "       Single               Widowed\n       Married             Separated\n       Annulled          Others, specify______\n", 1, 'L', false);
    
    $pdf->SetLineWidth(1);
    $pdf->SetFont('ZapfDingbats','',10);
    $pdf->Rect(115,208,8,8,'D'); $pdf->Rect(177,208,8,8,'D');
    $pdf->Rect(115,224,8,8,'D'); $pdf->Rect(177,224,8,8,'D');
    $pdf->Rect(115,240,8,8,'D'); $pdf->Rect(177,240,8,8,'D');
    
    if ($maritalStatus == 'Single') {
        $pdf->SetXY(112,208);
        $pdf->Cell(8,8,"4",0,0,false);
    } else if ($maritalStatus == 'Married') {
        $pdf->SetXY(112,224);
        $pdf->Cell(8,8,"4",0,0,false);
    } else if ($maritalStatus == 'Annulled') {
        $pdf->SetXY(112,240);
        $pdf->Cell(8,8,"4",0,0,false);
    } else if ($maritalStatus == 'Widowed') {
        $pdf->SetXY(174,208);
        $pdf->Cell(8,8,"4",0,0,false);
    } else if ($maritalStatus == 'Separated') {
        $pdf->SetXY(174,224);
        $pdf->Cell(8,8,"4",0,0,false);
    } else if ($maritalStatus == 'Others') {
        $pdf->SetXY(174,240);
        $pdf->Cell(8,8,"4",0,0,false);
    }
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(5,253);
    $pdf->MultiCell(100, 16, "  8. CITIZENSHIP", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(105,253);
    $pdf->MultiCell(182, 16, $citizenship, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(5,269);
    $pdf->MultiCell(100, 16, "  9. HEIGHT (m)", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(105,269);
    $pdf->MultiCell(182, 16, $height, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(5,285);
    $pdf->MultiCell(100, 16, "10. WEIGHT (kg)", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(105,285);
    $pdf->MultiCell(182, 16, $weight, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(5,301);
    $pdf->MultiCell(100, 16, "11. BLOOD TYPE", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(105,301);
    $pdf->MultiCell(182, 16, $bloodType, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(5,317);
    $pdf->MultiCell(100, 16, "12. GSIS ID NO.", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(105,317);
    $pdf->MultiCell(182, 16, $gSISNo, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(5,333);
    $pdf->MultiCell(100, 16, "13. PAG-IBIG ID NO.", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(105,333);
    $pdf->MultiCell(182, 16, $pagibigNo, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(5,349);
    $pdf->MultiCell(100, 16, "14. PHILHEALTH NO.", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(105,349);
    $pdf->MultiCell(182, 16, $philhealthNo, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(5,365);
    $pdf->MultiCell(100, 16, "15. SSS NO.", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(105,365);
    $pdf->MultiCell(182, 16, $sSSNo, 1, 'L', false);
        
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(287,157);
    $pdf->MultiCell(135, 16, " 16. RESIDENTIAL\n      ADDRESS\n\n                                    ZIP CODE\n 17. TELEPHONE NO.", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(422,157);
    $pdf->Cell(185, 48, "", 1, 1, 'L', false);
    $pdf->SetXY(422,157+4);
    $pdf->MultiCell(185, $dataFontSize, $address1, 0, 'L', false);
    $pdf->SetXY(422,205);
    $pdf->Cell(185, 16, $zipCode1, 1, 1, 'L', false);
    $pdf->SetXY(422,221);
    $pdf->Cell(185, 16, $contactNo1, 1, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(287,237);
    $pdf->MultiCell(135, 16, " 18. PERMANENT\n      ADDRESS\n\n                                    ZIP CODE\n 19. TELEPHONE NO.", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(422,237);
    $pdf->Cell(185, 48, "", 1, 1, 'L', false);
    $pdf->SetXY(422,237+4);
    $pdf->MultiCell(185, $dataFontSize, $address2, 0, 'L', false);
    $pdf->SetXY(422,285);
    $pdf->Cell(185, 16, $zipCode2, 1, 1, 'L', false);
    $pdf->SetXY(422,301);
    $pdf->Cell(185, 16, $contactNo2, 1, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(287,317);
    $pdf->MultiCell(135, 16, " 20. E-MAIL ADDRESS (if any)", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(422,317);
    $pdf->Cell(185, 16, $emailAddress, 1, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(287,333);
    $pdf->MultiCell(135, 16, " 21. CELLPHONE NO. (if any)", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(422,333);
    $pdf->Cell(185, 16, $cellphoneNo, 1, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(287,349);
    $pdf->MultiCell(135, 16, " 22. AGENCY EMPLOYEE NO.", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(422,349);
    $pdf->Cell(185, 16, $agencyNo, 1, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(287,365);
    $pdf->MultiCell(135, 16, " 23. TIN", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(422,365);
    $pdf->Cell(185, 16, $tINNo, 1, 1, 'L', false);
    
    $pdf->SetLineWidth(2);
    $pdf->SetFont('Arial', 'BI', $labelFontSize);
    $pdf->SetXY(5,381);
    $pdf->Cell(602, 14, "II. FAMILY BACKGROUND", 1, 1, 'L', false);
    
    $pdf->SetLineWidth(1.5);
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(5,395);
    $pdf->MultiCell(110, 16, "24. SPOUSE'S SURNAME\n               FIRST NAME\n               MIDDLE NAME", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(115,395);
    $pdf->Cell(190, 16, $spouseLastname, 1, 1, 'L', false);
    
    $pdf->SetXY(115,411);
    $pdf->Cell(190, 16, $spouseFirstname, 1, 1, 'L', false);
    
    $pdf->SetXY(115,427);
    $pdf->Cell(190, 16, $spouseMiddlename, 1, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(305,395);
    $pdf->MultiCell(180, 16, " 25. NAME OF CHILD", 1, 'L', false);
    $pdf->SetFont('Arial','',7);
    $pdf->SetXY(390,395);
    $pdf->MultiCell(95, 16, " (Write full name and list all)", 0, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(485,395);
    $pdf->MultiCell(122, 16, "DATE OF BIRTH", 1, 'L', false);
    $pdf->SetFont('Arial','',7);
    $pdf->SetXY(555,395);
    $pdf->MultiCell(95, 16, "(mm/dd/yyyy)", 0, 'L', false);
    
    //Children
    $sql_child = "Select * from employee_dependent where EmployeeID='$employeeID'";
    $result_child = mysqli_query($connection,$sql_child);
    $show_13=0;
    $xname = 305; $yname=411;
    $xdate = 485; $ydate=411;
    while ($show_13 < 13){
        $row_child = mysqli_fetch_assoc($result_child);
        if (!empty($row_child['ChildName'])) {
            $childName = "  ".$row_child['ChildName'];
        } else {
            $childName = "  ".'N/A';
        }
        if (!empty($row_child['ChildBirth'])) {
            $childBirth = "  ".date('m/d/Y', strtotime($row_child['ChildBirth']));
        } else {
            $childBirth = "  ".'N/A';
        }
        $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
        $pdf->SetXY($xname,$yname);
        $pdf->Cell(180, 16, $childName, 1, 1, 'L', false);
            
        $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
        $pdf->SetXY($xdate,$ydate);
        $pdf->Cell(122, 16, $childBirth, 1, 1, 'L', false);
            
        $yname+=16; $ydate+=16; $show_13++;
    }
    
    $pdf->SetFont('Arial', 'BI', 8);
    $pdf->SetXY(305,619);
    $pdf->MultiCell(302, 16, "(Continue on separate sheet if necessary)", 1, 'C', false);
    
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->SetXY(5,443);
    $pdf->MultiCell(110, 16, "     OCCUPATION", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(115,443);
    $pdf->Cell(190, 16, $spouseWork, 1, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->SetXY(5,459);
    $pdf->MultiCell(110, 16, "     EMPLOYER/BUS. NAME", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(115,459);
    $pdf->Cell(190, 16, $spouseEmployer, 1, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->SetXY(5,475);
    $pdf->MultiCell(110, 16, "     BUSINESS ADDRESS", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(115,475);
    $pdf->Cell(190, 16, $spouseAddress, 1, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->SetXY(5,491);
    $pdf->MultiCell(110, 16, "     TELEPHONE NO.", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(115,491);
    $pdf->Cell(190, 16, $spouseTelephone, 1, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'BI', 8);
    $pdf->SetXY(5,507);
    $pdf->MultiCell(300, 16, "(Continue on separate sheet if necessary)", 1, 'C', false);
    
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->SetXY(5,523);
    $pdf->MultiCell(121, 16, "26. FATHER'S SURNAME\n               FIRST NAME\n               MIDDLE NAME", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(126,523);
    $pdf->Cell(179, 16, $fatherLastname, 1, 1, 'L', false);
    
    $pdf->SetXY(126,539);
    $pdf->Cell(179, 16, $fatherFirstname, 1, 1, 'L', false);
    
    $pdf->SetXY(126,555);
    $pdf->Cell(179, 16, $fatherMiddlename, 1, 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->SetXY(5,571);
    $pdf->MultiCell(121, 16, "27. MOTHER'S MAIDEN NAME\n               SURNAME\n               FIRST NAME\n               MIDDLE NAME", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(126,571);
    $pdf->Cell(179, 16, "", 1, 1, 'L', false);
    
    $pdf->SetXY(126,587);
    $pdf->Cell(179, 16, $motherLastname, 1, 1, 'L', false);
    
    $pdf->SetXY(126,603);
    $pdf->Cell(179, 16, $motherFirstname, 1, 1, 'L', false);
    
    $pdf->SetXY(126,619);
    $pdf->Cell(179, 16, $motherMiddlename, 1, 1, 'L', false);
    
    $pdf->SetLineWidth(2);
    $pdf->SetFont('Arial', 'BI', $labelFontSize);
    $pdf->SetXY(5,635);
    $pdf->Cell(602, 14, "III. EDUCATIONAL BACKGROUND", 1, 1, 'L', false);
    
    $pdf->SetLineWidth(1.5);
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(5,649);
    $pdf->Cell(80, 64, "28.          LEVEL", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->SetXY(85,649);
    $pdf->MultiCell(160, 16, "\nNAME OF SCHOOL\n (Write in full)\n ", 1, 'C', false);
    
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->SetXY(245,649);
    $pdf->MultiCell(90, 16, "\nDEGREE COURSE\n (Write in full)\n ", 1, 'C', false);
    
    $pdf->SetFont('Arial', 'B', 6.5);
    $pdf->SetXY(335,649);
    $pdf->MultiCell(50, 16, "\nYEAR GRADUATED\n(if graduated)", 1, 'C', false);
    
    $pdf->SetFont('Arial', 'B', 6);
    $pdf->SetXY(385,649);
    $pdf->MultiCell(60, 16, "HIGHEST GRADE/\nLEVEL/UNITS\nEARNED(if not graduated)", 1, 'C', false);
    
    $pdf->SetFont('Arial', 'B', 6.5);
    $pdf->SetXY(445,649);
    $pdf->MultiCell(70, 16, "INCLUSIVE DATES OF ATTENDANCE", 1, 'C', false);
    
    $pdf->SetFont('Arial', 'B', 6.5);
    $pdf->SetXY(445,681);
    $pdf->MultiCell(35, 32, "From", 1, 'C', false);
    
    $pdf->SetXY(480,681);
    $pdf->MultiCell(35, 32, "To", 1, 'C', false);
    
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->SetXY(515,649);
    $pdf->MultiCell(92, 16, "SCHOLARSHIP/\nACADEMIC HONORS\nRECEIVED\n ", 1, 'C', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(5,713);
    $pdf->MultiCell(80, 30, "ELEMENTARY", 1, 'L', false);
    
    $pdf->SetXY(5,743);
    $pdf->MultiCell(80, 30, "SECONDARY", 1, 'L', false);
    
    $pdf->SetXY(5,773);
    $pdf->MultiCell(80, 16, "VOCATIONAL/\nTRADE COURSE", 1, 'L', false);
    
    $pdf->SetXY(5,805);
    $pdf->MultiCell(80, 48, "COLLEGE", 1, 'L', false);
    
    $pdf->SetXY(5,853);
    $pdf->MultiCell(80, 26, "GRADUATE STUDIES", 1, 'L', false);
    
    //Educational Background
    //Elementary
    $sql_educ = "Select * from employee_education where EmployeeID='$employeeID' and RefNo='1' order by GraduateYear DESC";
    $result_educ = mysqli_query($connection,$sql_educ);
    $row_educ = mysqli_fetch_assoc($result_educ);
    
    if (!empty($row_educ['SchoolName'])) {
        $elementaryName = "  ".$row_educ['SchoolName'];
    } else {
        $elementaryName = "  ".'N/A';
    }
    if (!empty($row_educ['SchoolDegree'])) {
        $elementaryDegree = "  ".$row_educ['SchoolDegree'];
    } else {
        $elementaryDegree = "  ".'N/A';
    }
    if (!empty($row_educ['GraduateYear'])) {
        $elementaryGraduateYear = "  ".$row_educ['GraduateYear'];
    } else {
        $elementaryGraduateYear = "  ".'N/A';
    }
    if (!empty($row_educ['HighestLevel'])) {
        $elementaryHighestLevel = "  ".$row_educ['HighestLevel'];
    } else {
        $elementaryHighestLevel = "  ".'N/A';
    }
    if (!empty($row_educ['InclusiveDate'])) {
        $elementaryInclusiveDate = explode("-", $row_educ['InclusiveDate']);
        $elementaryInclusiveDateFrom = "  ".$elementaryInclusiveDate[0];
        $elementaryInclusiveDateTo = "  ".$elementaryInclusiveDate[1];
    } else {
        $elementaryInclusiveDate = "  ".'N/A';
        $elementaryInclusiveDateFrom = "  ".'N/A';
        $elementaryInclusiveDateTo = "  ".'N/A';
    }
    if (!empty($row_educ['Honor'])) {
        $elementaryHonor = "  ".$row_educ['Honor'];
    } else {
        $elementaryHonor = "  ".'N/A';
    }
    
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->SetXY(85,713);
    $pdf->MultiCell(160, 30, "", 1, 'L', false);
    $pdf->SetXY(85,717);
    $pdf->MultiCell(160, 8, $elementaryName, 0, 'L', false);
    $pdf->SetXY(245,713);
    $pdf->MultiCell(90, 30, "", 1, 'L', false);
    $pdf->SetXY(245,717);
    $pdf->MultiCell(90, 8, $elementaryDegree, 0, 'L', false);
    $pdf->SetXY(335,713);
    $pdf->MultiCell(50, 30, "", 1, 'L', false);
    $pdf->SetXY(335,717);
    $pdf->MultiCell(50, 8, $elementaryGraduateYear, 0, 'L', false);
    $pdf->SetXY(385,713);
    $pdf->MultiCell(60, 30, "", 1, 'L', false);
    $pdf->SetXY(385,717);
    $pdf->MultiCell(60, 8, $elementaryHighestLevel, 0, 'L', false);
    $pdf->SetXY(445,713);
    $pdf->MultiCell(35, 30, "", 1, 'L', false);
    $pdf->SetXY(445,717);
    $pdf->MultiCell(35, 8, $elementaryInclusiveDateFrom, 0, 'L', false);
    $pdf->SetXY(480,713);
    $pdf->MultiCell(35, 30, "", 1, 'L', false);
    $pdf->SetXY(480,717);
    $pdf->MultiCell(35, 8, $elementaryInclusiveDateTo, 0, 'L', false);
    $pdf->SetXY(515,713);
    $pdf->MultiCell(92, 30, "", 1, 'L', false);
    $pdf->SetXY(515,717);
    $pdf->MultiCell(92, 8, $elementaryHonor, 0, 'L', false);
    
    //Secondary
    $sql_educ = "Select * from employee_education where EmployeeID='$employeeID' and RefNo='2' order by GraduateYear DESC";
    $result_educ = mysqli_query($connection,$sql_educ);
    $row_educ = mysqli_fetch_assoc($result_educ);
    
    if (!empty($row_educ['SchoolName'])) {
        $secondaryName = "  ".$row_educ['SchoolName'];
    } else {
        $secondaryName = "  ".'N/A';
    }
    if (!empty($row_educ['SchoolDegree'])) {
        $secondaryDegree = "  ".$row_educ['SchoolDegree'];
    } else {
        $secondaryDegree = "  ".'N/A';
    }
    if (!empty($row_educ['GraduateYear'])) {
        $secondaryGraduateYear = "  ".$row_educ['GraduateYear'];
    } else {
        $secondaryGraduateYear = "  ".'N/A';
    }
    if (!empty($row_educ['HighestLevel'])) {
        $secondaryHighestLevel = "  ".$row_educ['HighestLevel'];
    } else {
        $secondaryHighestLevel = "  ".'N/A';
    }
    if (!empty($row_educ['InclusiveDate'])) {
        $secondaryInclusiveDate = explode("-", $row_educ['InclusiveDate']);
        $secondaryInclusiveDateFrom = "  ".$secondaryInclusiveDate[0];
        $secondaryInclusiveDateTo = "  ".$secondaryInclusiveDate[1];
    } else {
        $secondaryInclusiveDate = "  ".'N/A';
        $secondaryInclusiveDateFrom = "  ".'N/A';
        $secondaryInclusiveDateTo = "  ".'N/A';
    }
    if (!empty($row_educ['Honor'])) {
        $secondaryHonor = "  ".$row_educ['Honor'];
    } else {
        $secondaryHonor = "  ".'N/A';
    }
    
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->SetXY(85,743);
    $pdf->MultiCell(160, 30, "", 1, 'L', false);
    $pdf->SetXY(85,747);
    $pdf->MultiCell(160, 8, $secondaryName, 0, 'L', false);
    $pdf->SetXY(245,743);
    $pdf->MultiCell(90, 30, "", 1, 'L', false);
    $pdf->SetXY(245,747);
    $pdf->MultiCell(90, 8, $secondaryDegree, 0, 'L', false);
    $pdf->SetXY(335,743);
    $pdf->MultiCell(50, 30, "", 1, 'L', false);
    $pdf->SetXY(335,747);
    $pdf->MultiCell(50, 8, $secondaryGraduateYear, 0, 'L', false);
    $pdf->SetXY(385,743);
    $pdf->MultiCell(60, 30, "", 1, 'L', false);
    $pdf->SetXY(385,747);
    $pdf->MultiCell(60, 8, $secondaryHighestLevel, 0, 'L', false);
    $pdf->SetXY(445,743);
    $pdf->MultiCell(35, 30, "", 1, 'L', false);
    $pdf->SetXY(445,747);
    $pdf->MultiCell(35, 8, $secondaryInclusiveDateFrom, 0, 'L', false);
    $pdf->SetXY(480,743);
    $pdf->MultiCell(35, 30, "", 1, 'L', false);
    $pdf->SetXY(480,747);
    $pdf->MultiCell(35, 8, $secondaryInclusiveDateTo, 0, 'L', false);
    $pdf->SetXY(515,743);
    $pdf->MultiCell(92, 30, "", 1, 'L', false);
    $pdf->SetXY(515,747);
    $pdf->MultiCell(92, 8, $secondaryHonor, 0, 'L', false);
    
    //Vocational/Trade Course
    $sql_educ = "Select * from employee_education where EmployeeID='$employeeID' and RefNo='3' order by GraduateYear DESC";
    $result_educ = mysqli_query($connection,$sql_educ);
    $row_educ = mysqli_fetch_assoc($result_educ);
    
    if (!empty($row_educ['SchoolName'])) {
        $vocationalName = "  ".$row_educ['SchoolName'];
    } else {
        $vocationalName = "  ".'N/A';
    }
    if (!empty($row_educ['SchoolDegree'])) {
        $vocationalDegree = "  ".$row_educ['SchoolDegree'];
    } else {
        $vocationalDegree = "  ".'N/A';
    }
    if (!empty($row_educ['GraduateYear'])) {
        $vocationalGraduateYear = "  ".$row_educ['GraduateYear'];
    } else {
        $vocationalGraduateYear = "  ".'N/A';
    }
    if (!empty($row_educ['HighestLevel'])) {
        $vocationalHighestLevel = "  ".$row_educ['HighestLevel'];
    } else {
        $vocationalHighestLevel = "  ".'N/A';
    }
    if (!empty($row_educ['InclusiveDate'])) {
        $vocationalInclusiveDate = explode("-", $row_educ['InclusiveDate']);
        $vocationalInclusiveDateFrom = "  ".$vocationalInclusiveDate[0];
        $vocationalInclusiveDateTo = "  ".$vocationalInclusiveDate[1];
    } else {
        $vocationalInclusiveDate = "  ".'N/A';
        $vocationalInclusiveDateFrom = "  ".'N/A';
        $vocationalInclusiveDateTo = "  ".'N/A';
    }
    if (!empty($row_educ['Honor'])) {
        $vocationalHonor = "  ".$row_educ['Honor'];
    } else {
        $vocationalHonor = "  ".'N/A';
    }
    
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->SetXY(85,773);
    $pdf->MultiCell(160, 32, "", 1, 'L', false);
    $pdf->SetXY(85,777);
    $pdf->MultiCell(160, 8, $vocationalName, 0, 'L', false);
    $pdf->SetXY(245,773);
    $pdf->MultiCell(90, 32, "", 1, 'L', false);
    $pdf->SetXY(245,777);
    $pdf->MultiCell(90, 8, $vocationalDegree, 0, 'L', false);
    $pdf->SetXY(335,773);
    $pdf->MultiCell(50, 32, "", 1, 'L', false);
    $pdf->SetXY(335,777);
    $pdf->MultiCell(50, 8, $vocationalGraduateYear, 0, 'L', false);
    $pdf->SetXY(385,773);
    $pdf->MultiCell(60, 32, "", 1, 'L', false);
    $pdf->SetXY(385,777);
    $pdf->MultiCell(60, 8, $vocationalHighestLevel, 0, 'L', false);
    $pdf->SetXY(445,773);
    $pdf->MultiCell(35, 32, "", 1, 'L', false);
    $pdf->SetXY(445,777);
    $pdf->MultiCell(35, 8, $vocationalInclusiveDateFrom, 0, 'L', false);
    $pdf->SetXY(480,773);
    $pdf->MultiCell(35, 32, "", 1, 'L', false);
    $pdf->SetXY(480,777);
    $pdf->MultiCell(35, 8, $vocationalInclusiveDateTo, 0, 'L', false);
    $pdf->SetXY(515,773);
    $pdf->MultiCell(92, 32, "", 1, 'L', false);
    $pdf->SetXY(515,777);
    $pdf->MultiCell(92, 8, $vocationalHonor, 0, 'L', false);
    
    //College
    $sql_educ = "Select * from employee_education where EmployeeID='$employeeID' and RefNo='4' order by GraduateYear DESC";
    $result_educ = mysqli_query($connection,$sql_educ);
    $show_two=0; $ypos=805; $y=24;
    while ($show_two < 2){
        $row_educ = mysqli_fetch_assoc($result_educ);
        if (!empty($row_educ['SchoolName'])) {
            $collegeName = "  ".$row_educ['SchoolName'];
        } else {
            $collegeName = "  ".'N/A';
        }
        if (!empty($row_educ['SchoolDegree'])) {
            $collegeDegree = "  ".$row_educ['SchoolDegree'];
        } else {
            $collegeDegree = "  ".'N/A';
        }
        if (!empty($row_educ['GraduateYear'])) {
            $collegeGraduateYear = "  ".$row_educ['GraduateYear'];
        } else {
            $collegeGraduateYear = "  ".'N/A';
        }
        if (!empty($row_educ['HighestLevel'])) {
            $collegeHighestLevel = "  ".$row_educ['HighestLevel'];
        } else {
            $collegeHighestLevel = "  ".'N/A';
        }
        if (!empty($row_educ['InclusiveDate'])) {
            $collegeInclusiveDate = explode("-", $row_educ['InclusiveDate']);
            $collegeInclusiveDateFrom = "  ".$collegeInclusiveDate[0];
            $collegeInclusiveDateTo = "  ".$collegeInclusiveDate[1];
        } else {
            $collegeInclusiveDate = "  ".'N/A';
            $collegeInclusiveDateFrom = "  ".'N/A';
            $collegeInclusiveDateTo = "  ".'N/A';
        }
        if (!empty($row_educ['Honor'])) {
            $collegeHonor = "  ".$row_educ['Honor'];
        } else {
            $collegeHonor = "  ".'N/A';
        }
        
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->SetXY(85,$ypos);
        $pdf->MultiCell(160, $y, "", 1, 'L', false);
        $pdf->SetXY(85,$ypos+4);
        $pdf->MultiCell(160, 8, $collegeName, 0, 'L', false);
        
        $pdf->SetXY(245,$ypos);
        $pdf->MultiCell(90, $y, "", 1, 'L', false);
        $pdf->SetXY(245,$ypos+4);
        $pdf->MultiCell(90, 8, $collegeDegree, 0, 'L', false);
        
        $pdf->SetXY(335,$ypos);
        $pdf->MultiCell(50, $y, "", 1, 'L', false);
        $pdf->SetXY(335,$ypos+4);
        $pdf->MultiCell(50, 8, $collegeGraduateYear, 0, 'L', false);
        
        $pdf->SetXY(385,$ypos);
        $pdf->MultiCell(60, $y, "", 1, 'L', false);
        $pdf->SetXY(385,$ypos+4);
        $pdf->MultiCell(60, 8, $collegeHighestLevel, 0, 'L', false);
        
        $pdf->SetXY(445,$ypos);
        $pdf->MultiCell(35, $y, "", 1, 'L', false);
        $pdf->SetXY(445,$ypos+4);
        $pdf->MultiCell(35, 8, $collegeInclusiveDateFrom, 0, 'L', false);
        
        $pdf->SetXY(480,$ypos);
        $pdf->MultiCell(35, $y, "", 1, 'L', false);
        $pdf->SetXY(480,$ypos+4);
        $pdf->MultiCell(35, 8, $collegeInclusiveDateTo, 0, 'L', false);
        
        $pdf->SetXY(515,$ypos);
        $pdf->MultiCell(92, $y, "", 1, 'L', false);
        $pdf->SetXY(515,$ypos+4);
        $pdf->MultiCell(92, 8, $collegeHonor, 0, 'L', false);
        $ypos+=24; $show_two++;
    }
    
    //Graduate Studies
    $sql_educ = "Select * from employee_education where EmployeeID='$employeeID' and RefNo='5' order by GraduateYear DESC";
    $result_educ = mysqli_query($connection,$sql_educ);
    $show_two=0; $ypos=853; $y=26;
    while ($show_two < 2){
        $row_educ = mysqli_fetch_assoc($result_educ);
        if (!empty($row_educ['SchoolName'])) {
            $graduateName = "  ".$row_educ['SchoolName'];
        } else {
            $graduateName = "  ".'N/A';
        }
        if (!empty($row_educ['SchoolDegree'])) {
            $graduateDegree = "  ".$row_educ['SchoolDegree'];
        } else {
            $graduateDegree = "  ".'N/A';
        }
        if (!empty($row_educ['GraduateYear'])) {
            $graduateGraduateYear = "  ".$row_educ['GraduateYear'];
        } else {
            $graduateGraduateYear = "  ".'N/A';
        }
        if (!empty($row_educ['HighestLevel'])) {
            $graduateHighestLevel = "  ".$row_educ['HighestLevel'];
        } else {
            $graduateHighestLevel = "  ".'N/A';
        }
        if (!empty($row_educ['InclusiveDate'])) {
            $graduateInclusiveDate = explode("-", $row_educ['InclusiveDate']);
            $graduateInclusiveDateFrom = "  ".$graduateInclusiveDate[0];
            $graduateInclusiveDateTo = "  ".$graduateInclusiveDate[1];
        } else {
            $graduateInclusiveDate = "  ".'N/A';
            $graduateInclusiveDateFrom = "  ".'N/A';
            $graduateInclusiveDateTo = "  ".'N/A';
        }
        if (!empty($row_educ['Honor'])) {
            $graduateHonor = "  ".$row_educ['Honor'];
        } else {
            $graduateHonor = "  ".'N/A';
        }
    
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->SetXY(85,$ypos);
        $pdf->MultiCell(160, $y, "", 1, 'L', false);
        $pdf->SetXY(85,$ypos+4);
        $pdf->MultiCell(160, 8, $graduateName, 0, 'L', false);
        
        $pdf->SetXY(245,$ypos);
        $pdf->MultiCell(90, $y, "", 1, 'L', false);
        $pdf->SetXY(245,$ypos+4);
        $pdf->MultiCell(90, 8, $graduateDegree, 0, 'L', false);
        
        $pdf->SetXY(335,$ypos);
        $pdf->MultiCell(50, $y, "", 1, 'L', false);
        $pdf->SetXY(335,$ypos+4);
        $pdf->MultiCell(50, 8, $graduateGraduateYear, 0, 'L', false);
        
        $pdf->SetXY(385,$ypos);
        $pdf->MultiCell(60, $y, "", 1, 'L', false);
        $pdf->SetXY(385,$ypos+4);
        $pdf->MultiCell(60, 8, $graduateHighestLevel, 0, 'L', false);
        
        $pdf->SetXY(445,$ypos);
        $pdf->MultiCell(35, $y, "", 1, 'L', false);
        $pdf->SetXY(445,$ypos+4);
        $pdf->MultiCell(35, 8, $graduateInclusiveDateFrom, 0, 'L', false);
        
        $pdf->SetXY(480,$ypos);
        $pdf->MultiCell(35, $y, "", 1, 'L', false);
        $pdf->SetXY(480,$ypos+4);
        $pdf->MultiCell(35, 8, $graduateInclusiveDateTo, 0, 'L', false);
        
        $pdf->SetXY(515,$ypos);
        $pdf->MultiCell(92, $y, "", 1, 'L', false);
        $pdf->SetXY(515,$ypos+4);
        $pdf->MultiCell(92, 8, $graduateHonor, 0, 'L', false);
    
        $ypos+=26; $show_two++;
    }
    
    $pdf->SetLineWidth(1.5);
    $pdf->SetFont('Arial', 'BI', 8);
    $pdf->SetXY(5,905);
    $pdf->Cell(602, 10, "(Continue on separate sheet if necessary)", 1, 1, 'C', false);
    
    $pdf->ModifiedFooter('');
    
    //Page 2
    $pdf->AddPage();
    
    $pdf->SetLineWidth(2);
    $pdf->SetFont('Arial', 'BI', $labelFontSize);
    $pdf->SetXY(5,19);
    $pdf->Cell(602, 14, "IV. CIVIL SERVICE ELIGIBILITY", 1, 1, 'L', false);
    
    $pdf->SetLineWidth(1.5);
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(5,33);
    $pdf->MultiCell(195, 18, "29. CAREER SERVICE/RA 1080 (BOARD/BAR)\n           UNDER SPECIAL LAWS/CES/CSEE", 1, 'L', false);
    
    $pdf->SetXY(200,33);
    $pdf->MultiCell(70, 36, "RATING", 1, 'C', false);
    
    $pdf->SetXY(270,33);
    $pdf->MultiCell(70, 12, "DATE OF EXAMINATION/\nCONFERMENT", 1, 'C', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSize);
    $pdf->SetXY(340,33);
    $pdf->MultiCell(170, 18, "PLACE OF EXAMINATION/\nCONFERMENT", 1, 'C', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(510,33);
    $pdf->MultiCell(97, 18, "LICENSE(if applicable)", 1, 'C', false);
    
    $pdf->SetXY(510,51);
    $pdf->MultiCell(49, 18, "NUMBER", 1, 'C', false);
    
    $pdf->SetFont('Arial', 'B', 6.5);
    $pdf->SetXY(559,51);
    $pdf->MultiCell(48, 9, "DATE OF RELEASE", 1, 'C', false);
    
    //Civil Service
    $sql_elig = "Select * from employee_eligibility where EmployeeID='$employeeID'";
    $result_elig = mysqli_query($connection,$sql_elig);
    
    $show_7=0; $ypos = 69; $y=30;
    while ($show_7 < 7){
        $row_elig = mysqli_fetch_assoc($result_elig);
        if (!empty($row_elig['EligibilityName'])) {
            $eligibilityName = "  ".$row_elig['EligibilityName'];
        } else {
            $eligibilityName = "  ".'N/A';
        }
        if (!empty($row_elig['EligibilityRating'])) {
            $eligibilityRating = "  ".$row_elig['EligibilityRating'];
        } else {
            $eligibilityRating = "  ".'N/A';
        }
        if (!empty($row_elig['EligibilityDate'])) {
            $eligibilityDate = "  ".date('m/d/Y', strtotime($row_elig['EligibilityDate']));
        } else {
            $eligibilityDate = "  ".'N/A';
        }
        if (!empty($row_elig['EligiblityPlace'])) {
            $eligibilityPlace = "  ".$row_elig['EligiblityPlace'];
        } else {
            $eligibilityPlace = "  ".'N/A';
        }
        if (!empty($row_elig['EligibilityLicenseNum'])) {
            $eligibilityLicenseNum = "  ".$row_elig['EligibilityLicenseNum'];
        } else {
            $eligibilityLicenseNum = "  ".'N/A';
        }
        if (!empty($row_elig['EligibilityLicenseDate'])) {
            $eligibilityLicenseDate = "  ".date('m/d/Y', strtotime($row_elig['EligibilityLicenseDate']));
        } else {
            $eligibilityLicenseDate = "  ".'N/A';
        }
        
        $pdf->SetFont('Arial', 'B', $dataFontSize);
        $pdf->SetXY(5,$ypos);
        $pdf->MultiCell(195, $y, "", 1, 'L', false);
        $pdf->SetXY(5,$ypos+4);
        $pdf->MultiCell(195, $dataFontSize, $eligibilityName, 0, 'L', false);
        
        $pdf->SetXY(200,$ypos);
        $pdf->MultiCell(70, $y, "", 1, 'L', false);
        $pdf->SetXY(200,$ypos+4);
        $pdf->MultiCell(70, $dataFontSize, $eligibilityRating, 0, 'L', false);
        
        $pdf->SetXY(270,$ypos);
        $pdf->MultiCell(70, $y, "", 1, 'L', false);
        $pdf->SetXY(270,$ypos+4);
        $pdf->MultiCell(70, $dataFontSize, $eligibilityDate, 0, 'L', false);
        
        $pdf->SetXY(340,$ypos);
        $pdf->MultiCell(170, $y, "", 1, 'L', false);
        $pdf->SetXY(340,$ypos+4);
        $pdf->MultiCell(170, $dataFontSize, $eligibilityPlace, 0, 'L', false);
        
        $pdf->SetXY(510,$ypos);
        $pdf->MultiCell(49, $y, "", 1, 'L', false);
        $pdf->SetXY(510,$ypos+4);
        $pdf->MultiCell(49, $dataFontSize, $eligibilityLicenseNum, 0, 'L', false);
        
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->SetXY(559,$ypos);
        $pdf->MultiCell(48, $y, "", 1, 'L', false);
        $pdf->SetXY(559,$ypos+4);
        $pdf->MultiCell(48, 7, $eligibilityLicenseDate, 0, 'L', false);
        
        $ypos+=$y; $show_7++;
    }
    
    $pdf->SetFont('Arial', 'BI', 8);
    $pdf->SetXY(5,279);
    $pdf->Cell(602, 10, "(Continue on separate sheet if necessary)", 1, 1, 'C', false);
    
    $pdf->SetLineWidth(2);
    $pdf->SetFont('Arial', 'BI', $labelFontSize);
    $pdf->SetXY(5,289);
    $pdf->Cell(602, 14, "V. WORK EXPERIENCE (Include private employment. Start from your current work)", 1, 1, 'L', false);
    
    $pdf->SetLineWidth(1.5);
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(5,303);
    $pdf->MultiCell(110, 18, "\n ", 1, 'L', false);
    $pdf->SetXY(5,310);
    $pdf->MultiCell(110, 11, "30.  INCLUSIVE DATES\n           (mm/dd/yyyy)", 0, 'L', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(5,339);
    $pdf->MultiCell(55, 18, "FROM", 1, 'C', false);
    $pdf->SetXY(60,339);
    $pdf->MultiCell(55, 18, "TO", 1, 'C', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(115,303);
    $pdf->MultiCell(140, 27, "\n ", 1, 'C', false);
    $pdf->SetXY(115,320);
    $pdf->MultiCell(140, 10, "POSITION TITLE\n(Write in full)", 0, 'C', false);
    
    $pdf->SetFont('Arial', 'B', 6.75);
    $pdf->SetXY(255,303);
    $pdf->MultiCell(150, 27, "\n ", 1, 'C', false);
    $pdf->SetXY(255,320);
    $pdf->MultiCell(150, 10, "DEPARTMENT/AGENCY/OFFICE/COMPANY\n(Write in full)", 0, 'C', false);
    
    $pdf->SetFont('Arial', 'B', $dataFontSize);
    $pdf->SetXY(405,303);
    $pdf->MultiCell(50, 27, "\n ", 1, 'C', false);
    $pdf->SetXY(405,320);
    $pdf->MultiCell(50, 10, "MONTHLY SALARY", 0, 'C', false);
    
    $pdf->SetFont('Arial', 'B', 6);
    $pdf->SetXY(455,303);
    $pdf->MultiCell(50, 27, "\n ", 1, 'C', false);
    $pdf->SetXY(455,310);
    $pdf->MultiCell(50, 8, "SALARY GRADE & STEP INCREMENT (Format \"00-0\")", 0, 'C', false);
    
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->SetXY(505,303);
    $pdf->MultiCell(62, 27, "\n ", 1, 'C', false);
    $pdf->SetXY(505,320);
    $pdf->MultiCell(62, 8, "STATUS OF APPOINTMENT", 0, 'C', false);
    
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->SetXY(567,303);
    $pdf->MultiCell(40, 27, "\n ", 1, 'C', false);
    $pdf->SetXY(567,320);
    $pdf->MultiCell(40, 8, "GOV'T SERVICE (Yes/No)", 0, 'C', false);
    
    //Work Experience
    $sql_employ = "Select * from employee_employment where EmployeeID='$employeeID'";
    $result_employ = mysqli_query($connection,$sql_employ);
    
    $show_20=0; $ypos=357; $y=27;
    while ($show_20 < 20){
        $row_employ = mysqli_fetch_assoc($result_employ);
        if (!empty($row_employ['EmploymentPosition'])) {
            $employmentPosition = "  ".$row_employ['EmploymentPosition'];
        } else {
            $employmentPosition = "  ".'N/A';
        }
        if (!empty($row_employ['EmploymentCompany'])) {
            $employmentCompany = "  ".$row_employ['EmploymentCompany'];
        } else {
            $employmentCompany = "  ".'N/A';
        }
        if (!empty($row_employ['EmploymentMonthlySalary'])) {
            $employmentMonthlySalary = "  ".$row_employ['EmploymentMonthlySalary'];
        } else {
            $employmentMonthlySalary = "  ".'N/A';
        }
        if (!empty($row_employ['EmploymentSalaryGrade'])) {
            $employmentSalaryGrade = "  ".$row_employ['EmploymentSalaryGrade'];
        } else {
            $employmentSalaryGrade = "  ".'N/A';
        }
        if (!empty($row_employ['EmploymentAppointment'])) {
            $employmentAppointment = "  ".$row_employ['EmploymentAppointment'];
        } else {
            $employmentAppointment = "  ".'N/A';
        }
        if (!empty($row_employ['EmploymentCompany']) && $row_employ['EmploymentIsGovernment'] == '1') {
            $employmentIsGovernment = "  ".'Yes';
        } else if (!empty($row_employ['EmploymentCompany']) && $row_employ['EmploymentIsGovernment'] == '0') {
            $employmentIsGovernment = "  ".'No';
        } else {
            $employmentIsGovernment = "  ".'N/A';
        }
        if (!empty($row_employ['EmploymentDates'])) {
            $employmentDates = explode("-", $row_employ['EmploymentDates']);
            $employmentDatesFrom = "  ".$employmentDates[0];
            $employmentDatesFrom = "  ".date('m/d/Y', strtotime($employmentDates[0]));
            $employmentDatesTo = "  ".date('m/d/Y', strtotime($employmentDates[1]));
        } else {
            $employmentDates = "  ".'N/A';
            $employmentDatesFrom = "  ".'N/A';
            $employmentDatesTo = "  ".'N/A';
        }

        $pdf->SetFont('Arial', 'B', $dataFontSize);
        $pdf->SetXY(5,$ypos);
        $pdf->MultiCell(55, $y, "", 1, 'L', false);
        $pdf->SetXY(5,$ypos+4);
        $pdf->MultiCell(55, $dataFontSize, $employmentDatesFrom, 0, 'L', false);
        
        $pdf->SetXY(60,$ypos);
        $pdf->MultiCell(55, $y, "", 1, 'L', false);
        $pdf->SetXY(60,$ypos+4);
        $pdf->MultiCell(55, $dataFontSize, $employmentDatesTo, 0, 'L', false);
        
        $pdf->SetXY(115,$ypos);
        $pdf->MultiCell(140, $y, "", 1, 'L', false);
        $pdf->SetXY(115,$ypos+4);
        $pdf->MultiCell(140, $dataFontSize, $employmentPosition, 0, 'L', false);
        
        $pdf->SetXY(255,$ypos);
        $pdf->MultiCell(150, $y, "", 1, 'L', false);
        $pdf->SetXY(255,$ypos+4);
        $pdf->MultiCell(150, $dataFontSize, $employmentCompany, 0, 'L', false);
        
        $pdf->SetXY(405,$ypos);
        $pdf->MultiCell(50, $y, "", 1, 'L', false);
        $pdf->SetXY(405,$ypos+4);
        $pdf->MultiCell(50, $dataFontSize, $employmentMonthlySalary, 0, 'L', false);
        
        $pdf->SetXY(455,$ypos);
        $pdf->MultiCell(50, $y, "", 1, 'L', false);
        $pdf->SetXY(455,$ypos+4);
        $pdf->MultiCell(50, $dataFontSize, $employmentSalaryGrade, 0, 'L', false);
        
        $pdf->SetXY(505,$ypos);
        $pdf->MultiCell(62, $y, "", 1, 'L', false);
        $pdf->SetXY(505,$ypos+4);
        $pdf->MultiCell(62, $dataFontSize, $employmentAppointment, 0, 'L', false);
        
        $pdf->SetXY(567,$ypos);
        $pdf->MultiCell(40, $y, "", 1, 'L', false);
        $pdf->SetXY(567,$ypos+4);
        $pdf->MultiCell(40, $dataFontSize, $employmentIsGovernment, 0, 'L', false);
    
        $ypos+=$y; $show_20++;
    }
    
    $pdf->SetFont('Arial', 'BI', 8);
    $pdf->SetXY(5,897);
    $pdf->Cell(602, 17, "(Continue on separate sheet if necessary)", 1, 1, 'C', false);
    
    $pdf->ModifiedFooter('CS FORM 212 (Revised 2005)');
    
    //Page 3
    $pdf->AddPage();
    
    $pdf->SetLineWidth(2);
    $pdf->SetFont('Arial', 'BI', $labelFontSize);
    $pdf->SetXY(5,19);
    $pdf->Cell(602, 14, "VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S", 1, 1, 'L', false);
    
    $pdf->SetLineWidth(1.5);
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(5,33);
    $pdf->MultiCell(250, 22, "31.\n ", 1, 'L', false);
    $pdf->SetXY(5,48);
    $pdf->MultiCell(250, 10, "NAME & ADDRESS OF ORGANIZATION\n(Write in full)", 0, 'C', false);
    
    $pdf->SetXY(255,33);
    $pdf->MultiCell(120, 14, "\n ", 1, 'L', false);
    $pdf->SetXY(255,37);
    $pdf->MultiCell(120, 10, "INCLUSIVE DATES (mm/dd/yyyy)", 0, 'C', false);
    $pdf->SetXY(255,61);
    $pdf->MultiCell(60, 16, "From", 1, 'C', false);
    $pdf->SetXY(315,61);
    $pdf->MultiCell(60, 16, "To", 1, 'C', false);
    
    $pdf->SetXY(375,33);
    $pdf->MultiCell(60, 22, "\n ", 1, 'C', false);
    $pdf->SetXY(375,47);
    $pdf->MultiCell(60, 10, "NUMBER OF HOURS", 0, 'C', false);
    
    $pdf->SetXY(435,33);
    $pdf->MultiCell(172, 22, "\n ", 1, 'C', false);
    $pdf->SetXY(435,50);
    $pdf->MultiCell(172, 10, "POSITION / NATURE OF WORK", 0, 'C', false);
    
    //Voluntary Work
    $sql_org = "Select * from employee_organization where EmployeeID='$employeeID'";
    $result_org = mysqli_query($connection,$sql_org);
    
    $show_5=0; $ypos=77; $y=28;
    while ($show_5 < 5){
        $row_org = mysqli_fetch_assoc($result_org);
        if (!empty($row_org['OrganizationName'])) {
            $organizationName = "  ".$row_org['OrganizationName'];
        } else {
            $organizationName = "  ".'N/A';
        }
        if (!empty($row_org['OrganizationAddress'])) {
            $organizationAddress = "  ".$row_org['OrganizationAddress'];
        } else {
            $organizationAddress = "  ".'N/A';
        }
        if (!empty($row_org['OrganizationDate'])) {
            $organizationDate = explode("-", $row_org['OrganizationDate']);
            $organizationDateFrom = "  ".date('m/d/Y', strtotime($organizationDate[0]));
            $organizationDateTo = "  ".date('m/d/Y', strtotime($organizationDate[1]));
        } else {
            $organizationDate = "  ".'N/A';
            $organizationDateFrom = "  ".'N/A';
            $organizationDateTo = "  ".'N/A';
        }
        if (!empty($row_org['OrganizationHour'])) {
            $organizationHour = "  ".$row_org['OrganizationHour'];
        } else {
            $organizationHour = "  ".'N/A';
        }
        if (!empty($row_org['OrganizationPosition'])) {
            $organizationPosition = "  ".$row_org['OrganizationPosition'];
        } else {
            $organizationPosition = "  ".'N/A';
        }

        $pdf->SetFont('Arial', 'B', $dataFontSize);
        $pdf->SetXY(5,$ypos);
        $pdf->MultiCell(250, $y, "", 1, 'L', false);
        $pdf->SetXY(5,$ypos+4);
        $pdf->MultiCell(250, $dataFontSize, $organizationName."\n".$organizationAddress, 0, 'L', false);
        
        $pdf->SetXY(255,$ypos);
        $pdf->MultiCell(60, $y, "", 1, 'L', false);
        $pdf->SetXY(255,$ypos+4);
        $pdf->MultiCell(60, $dataFontSize, $organizationDateFrom, 0, 'L', false);
        
        $pdf->SetXY(315,$ypos);
        $pdf->MultiCell(60, $y, "", 1, 'L', false);
        $pdf->SetXY(315,$ypos+4);
        $pdf->MultiCell(60, $dataFontSize, $organizationDateTo, 0, 'L', false);
        
        $pdf->SetXY(375,$ypos);
        $pdf->MultiCell(60, $y, "", 1, 'L', false);
        $pdf->SetXY(375,$ypos+4);
        $pdf->MultiCell(60, $dataFontSize, $organizationHour, 0, 'L', false);
        
        $pdf->SetXY(435,$ypos);
        $pdf->MultiCell(172, $y, "", 1, 'L', false);
        $pdf->SetXY(435,$ypos+4);
        $pdf->MultiCell(172, $dataFontSize, $organizationPosition, 0, 'L', false);
        
        $ypos+=$y; $show_5++;
    }
    
    $pdf->SetFont('Arial', 'BI', 8);
    $pdf->SetXY(5,217);
    $pdf->Cell(602, 10, "(Continue on separate sheet if necessary)", 1, 1, 'C', false);
    
    $pdf->SetLineWidth(2);
    $pdf->SetFont('Arial', 'BI', $labelFontSize);
    $pdf->SetXY(5,227);
    $pdf->Cell(602, 14, "VII. TRAINING PROGRAMS (Start from the most recent training.)", 1, 1, 'L', false);
    
    $pdf->SetLineWidth(1.5);
    $pdf->SetFont('Arial', 'B', 7.5);
    $pdf->SetXY(5,241);
    $pdf->MultiCell(250, 22, "32.\n ", 1, 'L', false);
    $pdf->SetXY(5,256);
    $pdf->MultiCell(250, 10, "TITLE OF SEMINAR/CONFERENCE/WORKSHOP/SHORT COURSES\n(Write in full)", 0, 'C', false);
    
    $pdf->SetXY(255,241);
    $pdf->MultiCell(120, 14, "\n ", 1, 'L', false);
    $pdf->SetXY(255,245);
    $pdf->MultiCell(120, 10, "INCLUSIVE DATES OF ATTENDANCE (mm/dd/yyyy)", 0, 'C', false);
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(255,269);
    $pdf->MultiCell(60, 16, "From", 1, 'C', false);
    $pdf->SetXY(315,269);
    $pdf->MultiCell(60, 16, "To", 1, 'C', false);

    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(375,241);
    $pdf->MultiCell(60, 22, "\n ", 1, 'C', false);
    $pdf->SetXY(375,255);
    $pdf->MultiCell(60, 10, "NUMBER OF HOURS", 0, 'C', false);
    
    $pdf->SetXY(435,241);
    $pdf->MultiCell(172, 22, "\n ", 1, 'C', false);
    $pdf->SetXY(435,258);
    $pdf->MultiCell(172, 10, "CONDUCTED / SPONSORED BY\n(Write in full)", 0, 'C', false);
    
    //Training
    $sql_training = "Select * from employee_training where EmployeeID='$employeeID'";
    $result_training = mysqli_query($connection,$sql_training);
    
    $show_15=0; $ypos=285; $y=28;
    while ($show_15 < 15){
        $row_training = mysqli_fetch_assoc($result_training);
        if (!empty($row_training['TrainingName'])) {
            $trainingName = "  ".$row_training['TrainingName'];
        } else {
            $trainingName = "  ".'N/A';
        }
        if (!empty($row_training['TrainingDate'])) {
            $trainingDate = explode("-", $row_training['TrainingDate']);
            $trainingDateFrom = "  ".date('m/d/Y', strtotime($trainingDate[0]));
            $trainingDateTo = "  ".date('m/d/Y', strtotime($trainingDate[1]));
        } else {
            $trainingDate = "  ".'N/A';
            $trainingDateFrom = "  ".'N/A';
            $trainingDateTo = "  ".'N/A';
        }
        if (!empty($row_training['TrainingHour'])) {
            $trainingHour = "  ".$row_training['TrainingHour'];
        } else {
            $trainingHour = "  ".'N/A';
        }
        if (!empty($row_training['TrainingSponsor'])) {
            $trainingSponsor = "  ".$row_training['TrainingSponsor'];
        } else {
            $trainingSponsor = "  ".'N/A';
        }
    
        $pdf->SetFont('Arial', 'B', $dataFontSize);
        $pdf->SetXY(5,$ypos);
        $pdf->MultiCell(250, $y, "", 1, 'L', false);
        $pdf->SetXY(5,$ypos+4);
        $pdf->MultiCell(250, $dataFontSize, $trainingName, 0, 'L', false);
        
        $pdf->SetXY(255,$ypos);
        $pdf->MultiCell(60, $y, "", 1, 'L', false);
        $pdf->SetXY(255,$ypos+4);
        $pdf->MultiCell(60, $dataFontSize, $trainingDateFrom, 0, 'L', false);
        
        $pdf->SetXY(315,$ypos);
        $pdf->MultiCell(60, $y, "", 1, 'L', false);
        $pdf->SetXY(315,$ypos+4);
        $pdf->MultiCell(60, $dataFontSize, $trainingDateTo, 0, 'L', false);
        
        $pdf->SetXY(375,$ypos);
        $pdf->MultiCell(60, $y, "", 1, 'L', false);
        $pdf->SetXY(375,$ypos+4);
        $pdf->MultiCell(60, $dataFontSize, $trainingHour, 0, 'L', false);
        
        $pdf->SetXY(435,$ypos);
        $pdf->MultiCell(172, $y, "", 1, 'L', false);
        $pdf->SetXY(435,$ypos+4);
        $pdf->MultiCell(172, $dataFontSize, $trainingSponsor, 0, 'L', false);
        
        $ypos+=$y; $show_15++;
    }
    
    $pdf->SetFont('Arial', 'BI', 8);
    $pdf->SetXY(5,705);
    $pdf->Cell(602, 10, "(Continue on separate sheet if necessary)", 1, 1, 'C', false);
    
    $pdf->SetLineWidth(2);
    $pdf->SetFont('Arial', 'BI', $labelFontSize);
    $pdf->SetXY(5,715);
    $pdf->Cell(602, 14, "VIII. OTHER INFORMATION", 1, 1, 'L', false);
    
    $pdf->SetLineWidth(1.5);
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(5,729);
    $pdf->MultiCell(210, 15, "33.\n ", 1, 'L', false);
    $pdf->SetXY(5,739);
    $pdf->MultiCell(210, 10, "SPECIAL SKILLS / HOBBIES", 0, 'C', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(215,729);
    $pdf->MultiCell(215, 15, "34.\n ", 1, 'L', false);
    $pdf->SetXY(215,735);
    $pdf->MultiCell(215, 10, "NON-ACADEMIC DISTINCTIONS/\nRECOGNITION (Write in full)", 0, 'C', false);
    
    $pdf->SetFont('Arial', 'B', $formFontSizeSmall);
    $pdf->SetXY(430,729);
    $pdf->MultiCell(177, 15, "35.\n ", 1, 'L', false);
    $pdf->SetXY(430,735);
    $pdf->MultiCell(177, 10, "MEMBERSHIP IN ASSOCIATION/\nORGANIZATION (Write in full)", 0, 'C', false);
    
    //Other Information
    $sql_other = "Select * from employee_other where EmployeeID='$employeeID'";
    $result_other = mysqli_query($connection,$sql_other);
    
    $show_5=0; $ypos=759; $y=29;
    while ($show_5 < 5){
        $row_other = mysqli_fetch_assoc($result_other);
        if (!empty($row_other['OtherSkill'])) {
            $otherSkill = "  ".$row_other['OtherSkill'];
        } else {
            $otherSkill = "  ".'N/A';
        }
        if (!empty($row_other['OtherRecognition'])) {
            $otherRecognition = "  ".$row_other['OtherRecognition'];
        } else {
            $otherRecognition = "  ".'N/A';
        }
        if (!empty($row_other['OtherOrganization'])) {
            $otherOrganization = "  ".$row_other['OtherOrganization'];
        } else {
            $otherOrganization = "  ".'N/A';
        }
        
        $pdf->SetFont('Arial', 'B', $dataFontSize);
        $pdf->SetXY(5,$ypos);
        $pdf->MultiCell(210, $y, "", 1, 'L', false);
        $pdf->SetXY(5,$ypos+4);
        $pdf->MultiCell(210, $dataFontSize, $otherSkill, 0, 'L', false);
        
        $pdf->SetXY(215,$ypos);
        $pdf->MultiCell(215, $y, "", 1, 'L', false);
        $pdf->SetXY(215,$ypos+4);
        $pdf->MultiCell(215, $dataFontSize, $otherRecognition, 0, 'L', false);
        
        $pdf->SetXY(430,$ypos);
        $pdf->MultiCell(177, $y, "", 1, 'L', false);
        $pdf->SetXY(430,$ypos+4);
        $pdf->MultiCell(177, $dataFontSize, $otherOrganization, 0, 'L', false);
    
        $ypos+=$y; $show_5++;
    }
    
    $pdf->SetFont('Arial', 'BI', 8);
    $pdf->SetXY(5,905);
    $pdf->Cell(602, 10, "(Continue on separate sheet if necessary)", 1, 1, 'C', false);
    
    $pdf->ModifiedFooter('CS FORM 212 (Revised 2005)');
    
    //Page 4
    $pdf->AddPage();
    
    $pdf->SetLineWidth(2);
    $pdf->Line(5,19,606,19);
    $pdf->SetLineWidth(1.5);
    $pdf->SetFont('Arial', '', $labelFontSize);
    $pdf->SetXY(5,19);
    $pdf->MultiCell(400, 11, "\n36. Are you related by consanguinity or affinity to any of the following:\n \n a. Within the third degree (for National Government Employees):\n     appointing authority, recommending authority, chief of office/bureau/department         or person who has immediate supervision over you in the Office, Bureau or                Department where you will be appointed?\n \n \n \n b. Within the fourth degree (for Local Government Employees):\n     appointing authority or recommending authority where you will be appointed?\n \n \n \n ", 1, 'L', false);
    
    $pdf->SetXY(405,19);
    $pdf->MultiCell(202, 176, "", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(405,19);
    $pdf->MultiCell(202, 11, "\n \n           YES            NO\n    If YES, give details:", 0, 'L', false);
    $pdf->SetLineWidth(1.5);
    $pdf->Rect(425,40,10,10,'D');
    $pdf->Rect(477,40,10,10,'D');
    $pdf->Line(418,77,596,77);
    $pdf->Line(418,89,596,89);
    $pdf->Line(418,101,596,101);
    
    $pdf->SetXY(405,102);
    $pdf->MultiCell(202, 11, "\n \n           YES            NO\n    If YES, give details:", 0, 'L', false);
    $pdf->Rect(425,122,10,10,'D');
    $pdf->Rect(477,122,10,10,'D');
    $pdf->Line(418,159,596,159);
    $pdf->Line(418,171,596,171);
    $pdf->Line(418,183,596,183);

    $pdf->SetFont('Arial', '', $labelFontSize);
    $pdf->SetXY(5,195);
    $pdf->MultiCell(400, 11, "\n 37.  a. Have you ever been formally charged?\n \n \n \n \n \n        b. Have you ever been guilty of any administrative offense?\n \n \n \n ", 1, 'L', false);
    
    $pdf->SetXY(405,195);
    $pdf->MultiCell(202, 132, "", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(405,193);
    $pdf->MultiCell(202, 11, "\n           YES            NO\n    If YES, give details:", 0, 'L', false);
    $pdf->SetLineWidth(1.5);
    $pdf->Rect(425,203,10,10,'D');
    $pdf->Rect(477,203,10,10,'D');
    $pdf->Line(418,238,596,238);
    $pdf->Line(418,250,596,250);
    //$pdf->Line(418,262,596,262);

    $pdf->SetXY(405,259);
    $pdf->MultiCell(202, 11, "\n           YES            NO\n    If YES, give details:", 0, 'L', false);
    $pdf->Rect(425,269,10,10,'D');
    $pdf->Rect(477,269,10,10,'D');
    $pdf->Line(418,304,596,304);
    $pdf->Line(418,316,596,316);
    //$pdf->Line(418,328,596,328);
    
    $pdf->SetFont('Arial', '', $labelFontSize);
    $pdf->SetXY(5,327);
    $pdf->MultiCell(400, 11, "\n 38.  Have you ever been convicted of any crime or violation of any law, decree,                 ordinance or regulation by any court or tribunal?\n \n \n ", 1, 'L', false);
    
    $pdf->SetXY(405,327);
    $pdf->MultiCell(202, 66, "", 1, 'L', false);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(405,327);
    $pdf->MultiCell(202, 11, "\n           YES            NO\n    If YES, give details:", 0, 'L', false);
    $pdf->SetLineWidth(1.5);
    $pdf->Rect(425,337,10,10,'D');
    $pdf->Rect(477,337,10,10,'D');
    $pdf->Line(418,370,596,370);
    $pdf->Line(418,382,596,382);
    
    $pdf->SetFont('Arial', '', $labelFontSize);
    $pdf->SetXY(5,393);
    $pdf->MultiCell(400, 11, "\n 39.  Have you ever been separated from the service in any of the following modes:           resignation, retirement, dropped from the rolls, dismissal, termination, end of              term, finished contract, AWOL or phased out, in the public or private sector?\n \n \n ", 1, 'L', false);
    
    $pdf->SetXY(405,393);
    $pdf->MultiCell(202, 77, "", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(405,393);
    $pdf->MultiCell(202, 11, "\n           YES            NO\n    If YES, give details:", 0, 'L', false);
    $pdf->SetLineWidth(1.5);
    $pdf->Rect(425,403,10,10,'D');
    $pdf->Rect(477,403,10,10,'D');
    $pdf->Line(418,438,596,438);
    $pdf->Line(418,450,596,450);
    
    $pdf->SetFont('Arial', '', $labelFontSize);
    $pdf->SetXY(5,470);
    $pdf->MultiCell(400, 11, "\n 40.  Have you ever been a candidate in a national or local election (except                         Barangay election)?\n \n \n ", 1, 'L', false);
    
    $pdf->SetXY(405,470);
    $pdf->MultiCell(202, 66, "", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(405,470);
    $pdf->MultiCell(202, 11, "\n           YES            NO\n    If YES, give details:", 0, 'L', false);
    $pdf->SetLineWidth(1.5);
    $pdf->Rect(425,481,10,10,'D');
    $pdf->Rect(477,481,10,10,'D');
    $pdf->Line(418,516,596,516);
    $pdf->Line(418,528,596,528);
    
    $pdf->SetFont('Arial', '', $labelFontSize);
    $pdf->SetXY(5,536);
    $pdf->MultiCell(400, 11, "\n 41.  Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for                     Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA               8972), please answer the following items:\n \n        a. Are you a member of any indigenous group?\n \n        b. Are you differently abled? \n \n        c. Are you a solo parent? \n \n ", 1, 'L', false);
    
    $pdf->SetXY(405,536);
    $pdf->MultiCell(202, 132, "", 1, 'L', false);
    
    $pdf->SetLineWidth(1.5);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(405,576);
    $pdf->MultiCell(202, 10, "\n           YES            NO\nIf YES, please specify:", 0, 'L', false);
    $pdf->Rect(425,585,10,10,'D');
    $pdf->Rect(477,585,10,10,'D');
    $pdf->Line(515,604,602,604);
    
    $pdf->SetXY(405,602);
    $pdf->MultiCell(202, 10, "\n           YES            NO\nIf YES, please specify:", 0, 'L', false);
    $pdf->Rect(425,611,10,10,'D');
    $pdf->Rect(477,611,10,10,'D');
    $pdf->Line(515,630,602,630);
    
    $pdf->SetXY(405,626);
    $pdf->MultiCell(202, 10, "\n           YES            NO\nIf YES, please specify:", 0, 'L', false);
    $pdf->Rect(425,635,10,10,'D');
    $pdf->Rect(477,635,10,10,'D');
    $pdf->Line(515,654,602,654);
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(5,668);
    $pdf->MultiCell(602, 14, "42. REFERENCES", 1, 'L', false);
    $pdf->SetFont('Arial', '', 9);
    $pdf->SetXY(93,668);
    $pdf->MultiCell(290, 14, "(Person not related by consanguinity or affinity to applicant / appointee)", 0, 'L', false);
    
    $pdf->SetFont('Arial', '', 11);
    $pdf->SetXY(5,682);
    $pdf->MultiCell(210, 14, "NAME", 1, 'C', false);
    $pdf->SetXY(215,682);
    $pdf->MultiCell(190, 14, "ADDRESS", 1, 'C', false);
    $pdf->SetXY(405,682);
    $pdf->MultiCell(102, 14, "TEL. NO.", 1, 'C', false);
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->SetXY(507,682);
    $pdf->MultiCell(100, 131, "", 1, 'C', false);
    $pdf->SetXY(507,702);
    $pdf->MultiCell(100, 9, "ID Picture taken within the last 6 months\n3.5cm x 4.5cm\n(passport size)\n \nComputer generated or xerox copy of picture is not acceptable\n \n \nPHOTO", 0, 'C', false);
    //passport size in pt 99.2126pt x 127.559pt
    
    //Reference
    $sql_ref = "Select * from employee_reference where EmployeeID='$employeeID'";
    $result_ref = mysqli_query($connection,$sql_ref);
    
    $show_3=0; $ypos=696; $y=17;
    while ($show_3 < 3){
        $row_ref = mysqli_fetch_assoc($result_ref);
        if (!empty($row_ref['ReferenceName'])) {
            $referenceName = "  ".$row_ref['ReferenceName'];
        } else {
            $referenceName = "  ".'N/A';
        }
        if (!empty($row_ref['ReferenceAddress'])) {
            $referenceAddress = "  ".$row_ref['ReferenceAddress'];
        } else {
            $referenceAddress = "  ".'N/A';
        }
        if (!empty($row_ref['ReferenceContactNo'])) {
            $referenceContactNo = "  ".$row_ref['ReferenceContactNo'];
        } else {
            $referenceContactNo = "  ".'N/A';
        }
        
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->SetXY(5,$ypos);
        $pdf->MultiCell(210, $y, "", 1, 'L', false);
        $pdf->SetXY(5,$ypos+4);
        $pdf->MultiCell(210, 9, $referenceName, 0, 'L', false);
        
        $pdf->SetXY(215,$ypos);
        $pdf->MultiCell(190, $y, "", 1, 'L', false);
        $pdf->SetXY(215,$ypos+4);
        $pdf->MultiCell(190, 9, $referenceAddress, 0, 'L', false);
        
        $pdf->SetXY(405,$ypos);
        $pdf->MultiCell(102, $y, "", 1, 'L', false);
        $pdf->SetXY(405,$ypos+4);
        $pdf->MultiCell(102, 9, $referenceContactNo, 0, 'L', false);
        
        $ypos+=$y; $show_3++;
    }
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(5,747);
    $pdf->MultiCell(502, 11, "43. I declare under oath that this Personal Data Sheet has been accomplished by me, and is a true,                 correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations          of the Republic of the Philippines.\n \n      I also authorize the agency head/authorized representative to verify/validate the contents stated                herein. I trust that this information shall remain confidential.", 1, 'L', false);
    
    //bounding box
    $pdf->SetXY(5,813);
    $pdf->MultiCell(602, 102, "", 1, 'L', false);
    
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(18,817);
    $pdf->MultiCell(190, 16, "", 1, 'C', false);
    $pdf->SetXY(18,833);
    $pdf->MultiCell(190, 14, "COMMUNITY TAX CERTIFICATE NO.", 1, 'C', false);
    
    $pdf->SetXY(18,851);
    $pdf->MultiCell(190, 16, "", 1, 'C', false);
    $pdf->SetXY(18,867);
    $pdf->MultiCell(190, 14, "ISSUED AT", 1, 'C', false);
    
    $pdf->SetXY(18,885);
    $pdf->MultiCell(190, 14, "", 1, 'C', false);
    $pdf->SetXY(18,899);
    $pdf->MultiCell(190, 12, "ISSUED ON (mm/dd/yyyy)", 1, 'C', false);
    
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(218,817);
    $pdf->MultiCell(240, 50, "", 1, 'C', false);
    $pdf->SetXY(218,867);
    $pdf->MultiCell(240, 14, "SIGNATURE (Sign inside the box)", 1, 'C', false);
    
    $pdf->SetXY(218,885);
    $pdf->MultiCell(240, 14, "", 1, 'C', false);
    $pdf->SetXY(218,899);
    $pdf->MultiCell(240, 12, "DATE ACCOMPLISHED", 1, 'C', false);
    
    $pdf->SetXY(468,817);
    $pdf->MultiCell(132, 83, "", 1, 'L', false);
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(468,902);
    $pdf->MultiCell(132, 10, "RIGHT THUMBMARK", 0, 'C', false);
    
    $pdf->ModifiedFooter('CS FORM 212 (Revised 2005)');
    
    
    
    
    
    
    
    
    
    
    $pdf->Output('PersonalDataSheet.pdf', 'I');

?>

<?php
	mysqli_close($connection); // Closing Connection
?>