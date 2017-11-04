<?php 
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
?>

<?php
	require('../ojt/connectDB.php');
?>

<?php
    require('../ojt/fpdf/fpdf.php');
    
    date_default_timezone_set('Asia/Manila');
    
    $pdf = new FPDF('P', 'pt', 'Letter');
    //612x792
    $pdf->SetTopMargin(30);
    $pdf->SetAutoPageBreak(true, 30);
    
    $pdf->AliasNbPages();
    $pdf->AddPage();
    
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->SetTextColor(0);
    $pdf->Cell(0, 30, "XYZ Company", 0, 0, 'L', true);
    $pdf->Ln(25);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 20, "Master List of In-Active Employees", 0, 1, 'L', true);
    
    $pdf->Line(30,75,612-30,75);
    
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(0,30, "Print Date: ".date('F j, Y, g:i:s a'), 0, 1, 'L', true);
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(15,15,"",1,0,'C',false);
    $pdf->Cell(70,15,"EMP ID",1,0,'C',false);
    $pdf->Cell(220,15,"NAME",1,0,'C',false);
    $pdf->Cell(125,15,"DEPARTMENT",1,0,'C',false);
    $pdf->Cell(125,15,"POSITION",1,1,'C',false);
    
    $total = 0;
    
    $sql_branch = "Select BranchCode, BranchName from branch";
    $result_branch = mysqli_query($connection,$sql_branch);
    if (mysqli_num_rows($result_branch) > 0) {
    while($row_branch = mysqli_fetch_assoc($result_branch)) {
    
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(50,15,"Branch: ",0,0,'L',false);
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(0,15,$row_branch['BranchName'],0,1,'L',false);
    
    $xpos = $pdf->GetX();
    $ypos = $pdf->GetY();
    
    $pdf->Line($xpos,$ypos,612-30,$ypos);
    
    $pdf->SetFont('Arial', '', 10);
    
    $branchCode = $row_branch['BranchCode'];
    $sql = "Select * from employee where ActiveStatus='0' and BranchCode='$branchCode'";
    $result = mysqli_query($connection,$sql);
    
    if (mysqli_num_rows($result) > 0) {
        $count = 1;
        while($row = mysqli_fetch_assoc($result)) {
            $total++;
            $currentID = $row['EmployeeID'];
            
            $sql2 = "Select employee_department.ID, department.Description, employee_department.DepartmentDate from employee_department left join department on employee_department.DepartmentCode = department.DepartmentCode where employee_department.EmployeeID='$currentID'";
            $result2 = mysqli_query($connection,$sql2);
            $row_department = mysqli_fetch_assoc($result2);
    
            $sql3 = "Select employee_position.ID, position.Description, employee_position.PositionDate from employee_position left join position on employee_position.PositionCode = position.PositionCode where employee_position.EmployeeID='$currentID'";
            $result3 = mysqli_query($connection,$sql3);
            $row_position = mysqli_fetch_assoc($result3);
        
            $pdf->Cell(15,15,$count,0,0,'L',false);
            $pdf->Cell(70,15,$row['EmployeeID'],0,0,'L',false);
            $pdf->Cell(220,15,$row['LastName'].', '.$row['FirstName'].' '.$row['MiddleName'].' '.$row['ExtName'],0,0,'L',false);
            $pdf->Cell(125,15,$row_department['Description'],0,0,'L',false);
            $pdf->Cell(125,15,$row_position['Description'],0,1,'L',false);
            $count++;
        };
    } //employee
    else {
        $pdf->Cell(0,15,"0",0,1,'L',false);
    }
    $pdf->Cell(0,15,"",0,1,'L',false);
    
    $xpos = $pdf->GetX();
    $ypos = $pdf->GetY();
    
    $pdf->Line($xpos,$ypos-12,612-30,$ypos-12);
    
    } //branch
    } //if-branch
    else {
        $pdf->Cell(0,15,"0",0,1,'L',false);
    }
    
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(30,15,"Total: ",0,0,'L',false);
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(0,15,$total,0,0,'L',false);
    
    $pdf->SetFont('Arial', '', 9);
    
    $pdf->SetY(750);
    $pdf->Cell(0,10,'Page '.$pdf->PageNo().' of {nb}',0,0,'R',false);
    
    $pdf->Output('MasterList_Inactive.pdf', 'I');

?>

<?php
	mysqli_close($connection); // Closing Connection
?>