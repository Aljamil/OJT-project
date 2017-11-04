

<!DOCTYPE html>
<html lang="en">

<head>

<?php
    require('../ojt/header.php'); 

?>
    <!-- Select DataTables -->
    <link href="../ojt/bower_components/bootstrap/dist/css/select.dataTables.min.css " rel="stylesheet" type="text/css" />
    
     
       <?php
            require('../ojt/navigation.php');           
        ?>
</head>

        <div id="page-wrapper" style="margin: 0px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daily Time Record</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

                                <?php
                              
                                 
                                $nameEmploy = $selPeriod =  $month = $year = $employID = " "; 
                                $petsa[] = $inam[] = $outam[] = $inpm[] = $inot[] = $outpm[] = $outot[] = $opening[] = $closing[] = $abs[] = $ut[] = $lt[] = $ot[] = $shift[] = $lateam[] = $latepm[] = " ";
                                $n = 0;
                                $dateg[] = " ";


                                if (isset($_POST['employeeName'])) {
                                $nameEmploy = $_POST["employeeName"];
                                }

                                else{
                                    $nameEmploy = "null";
                                }


                                if(isset($_POST["period"]))
                                {
                                  $selPeriod = $_POST["period"];
                                }

                                else{
                                    $selPeriod = "null";
                                }


                                if(isset($_POST["month"]))
                                {
                                  $month = $_POST["month"];
                                }

                                else{
                                    $month = "null";
                                }



                                if(isset($_POST["year"]))
                                {
                                  $year = $_POST["year"];
                                }

                                else{
                                    $year = "null";
                                }

                                if(isset($_POST['idE'])){
                                    $employID = $_POST['idE'];
                                }
                                else{
                                    $employID = "null";
                                }




                                for($i = 1; $i < 32; $i++){
                                    if(isset($_POST["petsa" . $i])) {
                                        $petsa[$i] = $_POST["petsa" . $i];
                                    }
                                    else{
                                         $petsa[$i] = "";
                                    }


                                    if(isset($_POST["inam" . $i])) {
                                        $inam[$i] = $_POST["inam" . $i];
                                    }
                                    else{
                                         $inam[$i] = "";
                                    }


                                    if(isset($_POST["outam" . $i])) {
                                        $outam[$i] = $_POST["outam" . $i];
                                    }
                                    else{
                                         $outam[$i] = "";
                                    }


                                    if(isset($_POST["inpm" . $i])) {
                                        $inpm[$i] = $_POST["inpm" . $i];
                                    }
                                    else{
                                         $inpm[$i] = "";
                                    }

                                    if(isset($_POST["inot" . $i])) {
                                        $inot[$i] = $_POST["inot" . $i];
                                    }
                                    else{
                                         $inot[$i] = "";
                                    }

                                    if(isset($_POST["outpm" . $i])) {
                                        $outpm[] = $_POST["outpm" . $i];
                                    }
                                    else{
                                         $outpm[$i] = "";
                                    }

                                    if(isset($_POST["outot" . $i])) {
                                        $outot[$i] = $_POST["outot" . $i];
                                    }
                                    else{
                                         $outot[$i] = "";
                                    }

                                    if(isset($_POST["abs" . $i])) {
                                        $abs[$i] = $_POST["abs" . $i];
                                    }
                                    else{
                                         $abs[$i] = "";
                                    }

                                    if(isset( $_POST["ut" . $i])) {
                                        $ut[] = $_POST["ut" . $i];
                                    }
                                    else{
                                        $ut[$i] = "";
                                    }

                                    if(isset($_POST["lt" . $i])) {
                                        $lt[] = $_POST["lt" . $i];
                                    }
                                    else{
                                         $lt[$i] = "";
                                    }


                                    if(isset($_POST["ot" . $i])) {
                                         $ot[$i] = $_POST["ot" . $i];
                                    }
                                    else{
                                         $ot[$i] = "";                      
                                        }

                                    if(isset($_POST["lateam" . $i])) {
                                         $lateam[$i] = $_POST["lateam" . $i];
                                    }
                                    else{
                                         $lateam[$i] = "";                   
                                        }

                                    if(isset($_POST["latepm" . $i])) {
                                         $latepm[$i] = $_POST["latepm" . $i];
                                    }
                                    else{
                                         $latepm[$i] = "";
                                        }


                                    }
                                                 
                                ?>

            <!-- EmployeeTimeModal -->
                <div class="modal fade" id="employeeTimeSheet" tabindex="-1" role="dialog" aria-labelledby="employeeTimeSheetLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Employee Timesheet</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal"  action="dtrtable.php" role='form_edit' method="post">
                            <div class="form-group">
                                <label for="employeeName" class="col-sm-3 control-label" >Employee Name*</label>
                            <div class="col-sm-9">
                                <select input class="form-control" id="employeeName" name='employeeName'>
                               <?php
                                $query = mysqli_query($connection,  "SELECT EmployeeID, LastName, FirstName, MiddleName, Description FROM employee, schedule WHERE employee.SchedCode = schedule.SchedCode order by LastName ");
                                if($query->num_rows > 0){
                                while($row = $query->fetch_assoc()){
                                  echo "<option>" . $row['EmployeeID'] . " " . $row['LastName'] . ", " . $row['FirstName'] . " " . $row['MiddleName'] . "</option>";
                                }

                                }
                                ?>
                                </select>
                                </div>
                            </div>




                            <div class="form-group">
                                <label for="period" class="col-sm-3 control-label">Period*</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="period" name="period">
                                <?php
                                $query = mysqli_query($connection, "SELECT Description FROM payroll_period order by DayStart DESC ");
                                if($query->num_rows > 0){
                                while($row = $query->fetch_assoc()){
                                echo "<option>" . $row['Description'] . "</option>"; 
                                }
                                }
                                ?>
                                </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label" >Month*</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" required="true" id="month" name="month"> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearl" class="col-sm-3 control-label" >Year*</label>
                            <div div class="col-sm-9">
                                <input type="text" class="form-control" required="true" id="year" name="year"> </input>
                                </div>
                            </div>
                                     
                                <?php   
                                
                                  for($i = 1; $i < 32; $i++){
                                        echo "<input type='hidden' name='petsa" . $i . "'" . " /> ";
                                        echo "<input type='hidden' name='inam" . $i . "'" . " /> ";
                                        echo "<input type='hidden' name='outam" . $i . "'" . " />" ;         
                                        echo "<input type='hidden' name='inpm" . $i . "'" . " /> ";
                                        echo "<input type='hidden' name='inot" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='outpm" . $i . "'" . " />" ;
                                        echo "<input type='hidden'  name='outot" . $i . "'" . " />" ;                
                                        echo "<input type='hidden'  name='opening" . $i . "'" . "  />";  
                                        echo "<input type='hidden'  name='closing" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='abs" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='lt" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='ut" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='ot" . $i . "'" . " /> ";
                                        echo "<input type='hidden' name='shift" . $i . "'" . " />" ;                                     
                                    }

                                                                             
                            ?>


                             <div style="text-align: center;">
                            <button type="submit" class="btn btn-primary">Continue</button>
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                        
                    </div>
                    
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

                                

            <!-- SET Period-->
            <div class="modal fade" id="Period" tabindex="-1" role="dialog" aria-labelledby="employeeTimeSheetLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Set Period</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="dtrtable.php" role='form_edit' method="post">
                        <div class="form-group">
                                <div class="col-sm-9">
                                <input type="hidden" class="form-control" id="employeeName" name='employeeName' value="<?php echo htmlentities($nameEmploy); ?>" /> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="period" class="col-sm-3 control-label">Period*</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="period" name="period">
                                <?php
                                $query = mysqli_query($connection, "SELECT Description FROM payroll_period order by DayStart DESC ");
                                if($query->num_rows > 0){
                                while($row = $query->fetch_assoc()){
                                echo "<option>" . $row['Description'] . "</option>"; 
                                }
                                }
                                ?>
                                </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" >Month*</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" required="true" id="monthp" name="month"> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearl" class="col-sm-3 control-label" >Year*</label>
                            <div div class="col-sm-9">
                                <input type="text" class="form-control" required="true" id="yearp" name="year"> </input>
                            </div>                            
                            </div>

                            
                           <?php   
                            
                                  for($i = 1; $i < 32; $i++){
                                        echo "<input type='hidden' name='petsa" . $i . "'" . " /> ";
                                        echo "<input type='hidden' name='inam" . $i . "'" . " /> ";
                                        echo "<input type='hidden' name='outam" . $i . "'" . " />" ;         
                                        echo "<input type='hidden' name='inpm" . $i . "'" . " /> ";
                                        echo "<input type='hidden' name='inot" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='outpm" . $i . "'" . " />" ;
                                        echo "<input type='hidden'  name='outot" . $i . "'" . " />" ;                
                                        echo "<input type='hidden'  name='opening" . $i . "'" . "  />";  
                                        echo "<input type='hidden'  name='closing" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='abs" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='lt" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='ut" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='ot" . $i . "'" . " /> ";
                                        echo "<input type='hidden' name='shift" . $i . "'" . " />" ;                                     
                                    }
                                                                             
                            ?>


                             <div style="text-align: center;">
                            <button type="submit" class="btn btn-primary" >Continue</button>
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>

                        </form>
                    </div>
                        
                   
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
            </div>





                            <!-- DTR TABLE -->
                                <p align="right" style="color:red">
                             
                                <?php
                                if((!$year) && (!$month))
                                {
                                    echo " ";
                                }
                                else{
                                $d = new DateTime();
                                $d->setDate($year, $month, 12);
                                echo  $d->format('M-Y') . " " . $selPeriod;
                                }
                                ?>

                                </p>   

            <p align="right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#codesDTR"> DTR Codes </button>
            <button type="button" class="btn btn-primary" id="calendar" > Calendar </button>  
            </p> 




         
            <div class="row">
                <div class="col-lg-12">
                   <form class="result" id="tabletime" action="dtrtable.php" role="form_edit" method="post">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
                         <?php
                            $schedDescript = $name = " ";
                            $in[] = $break[] = $resume[] = $out[] = " ";
                            $In1 = $Out1 = $Break1 = $Resume1 = " ";
                            $query = mysqli_query($connection,  "SELECT EmployeeID, LastName, FirstName, MiddleName, Description FROM employee, schedule 
                                                                  WHERE employee.SchedCode = schedule.SchedCode AND CONCAT(EmployeeID, ' ', LastName, ', ', FirstName, ' ', MiddleName) =  '$nameEmploy' ");
                            if($query->num_rows > 0){
                            while($row = $query->fetch_assoc()){
                            $employID = $row['EmployeeID'];
                            $schedDescript = $row['Description'];
                            $name = $row['LastName'] . ", " . $row['FirstName'] . " " . $row['MiddleName'];                        
                            echo "Employee ID: " . "<input type=text id='employid' name='employid' value='" . $employID . "' style='text-align:center;' readonly autofocus size='10' />" . "<br>";
                            echo "Name: " . "<input type=text id='employe' name='employe' value='" . $name . "' style='text-align:center;' readonly autofocus size='40' />" . "<br>";
                            echo "Time Shift: " . "<input type=text id='timeshift' name='timeshift' value='" . $schedDescript . "' style='text-align:center;' readonly autofocus size='25' />" . "<br>"; 

                            }
                            } 

                            $sql = mysqli_query($connection, "SELECT DISTINCT EmployeeID, LastName, FirstName, MiddleName, `In`, `Out`, Break, `Resume` FROM employee, schedule_info 
                                                WHERE employee.SchedCode = schedule_info.SchedCode AND EmployeeID = '$employID' ");

                            if($sql->num_rows > 0){
                                while($row = $sql->fetch_assoc()){
                                    $In1 = $row['In'];
                                    $Out1 = $row['Out'];
                                    $Break1 = $row['Break'];
                                    $Resume1 = $row['Resume'];
                                }
                            }


                            ?>

                                                                                   
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dtr">
                                        <thead>
                                        <tr>
                                            <th style="width: 9%;">Date</th>
                                            <th style="width: 6%;">AM In</th>
                                            <th style="width: 6%;">AM Out</th>
                                            <th style="width: 6%;">PM In</th>
                                            <th style="width: 6%;">PM Out</th>
                                            <th style="width: 6%;">OT In</th>
                                            <th style="width: 6%;">OT Out</th>
                                            <th style="width: 5%;">Abs</th>
                                            <th style="width: 5%;">UT</th>
                                            <th style="width: 5%;">LT</th>
                                            <th style="width: 6%;">Opening</th>
                                            <th style="width: 6%;">Closing</th>
                                            <th style="width: 6%;">OT</th>
                                            <th style="width: 11%;">Shift</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           
                                    <?php
                                    
                                        $startDate;
                                        $endDate;
                                        $periodD = "";
                                        $numdays = 0;
                                       
                                        $query = mysqli_query($connection, "SELECT Description, DayStart, DayEnd, IsSameMonth FROM payroll_period WHERE Description = '$selPeriod'");
                                        if($query->num_rows > 0){
                                        while($row = $query->fetch_assoc()){
                                            $startDate = $row['DayStart'];
                                            $endDate = $row['DayEnd'];
                                            $periodD = $row['Description'];
                                         }
                                     }

                                           if((!$month) && (!$year))
                                           {
                                             $numdays = 0;
                                           }
                                           else{
                                             $numdays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                           }


                                           $arrayShift = array();
                                            $arrayCtr = 0;
                                            $query_main = mysqli_query($connection, "select * from schedule_irregular");
                                            if ($query_main->num_rows > 0) {
                                                while($row_main = $query_main->fetch_assoc()) {
                                                    $arrayShift[$arrayCtr][0] = $row_main['In'];
                                                    $arrayShift[$arrayCtr][1] = $row_main['Break'];
                                                    $arrayShift[$arrayCtr][2] = $row_main['Resume'];
                                                    $arrayShift[$arrayCtr][3] = $row_main['Out'];
                                                    $arrayShift[$arrayCtr][4] = $row_main['Description'];
                        
                                                    $arrayCtr++;
                                                }
                                            }
                                            $size = sizeof($arrayShift);



                                           if ($periodD === "1st Half (28-12)")
                                           {
                                             $i = 0;

                                             $prevmonth = $month-1;
                                             $daystart = strtotime("{$year}-{$prevmonth}-{$startDate}");
                                             $endday = strtotime("{$year}-{$month}-{$endDate}");
                                            
                                            while($daystart <= $endday){
                                            $n++;
                                            $i++;
                                            echo "<tr>" ;
                                            echo "<td>" . "<input type='date' id='petsa" . $i . "'" . " name='petsa" .$i . "'" . " value=". date("Y-m-d", $daystart) . " readonly autofocus style='width: 75%;'/>"  . "</td>";
                                            $dateg[] = date("Y-m-d", $daystart);
                                            $SQL = "INSERT INTO tmpdtr (EmployeeID, DateDTR) VALUES ('$employID' ,'$dateg[$i]')";
                                            $result = mysqli_query($connection, $SQL);
                                            echo "<td>" . "<input class=inputs type=text id=inam" . $i . " ".  "  align='center' name='inam" . $i . "'" . "maxlength='8' value='" . $inam[$i] . "'" . " placeholder='hr:mm' autofocus style='width: 70%;'>";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=outam" . $i . " " . " align='center' value='" . $outam[$i] . "'" . " placeholder='hr:mm' name='outam" . $i . "'" . " maxlength='8' autofocus style='width: 70%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=inpm" . $i . " " . "   value='" . $inpm[$i] . "'" . " placeholder='hr:mm' name='inpm" . $i . "'" . " maxlength='8' autofocus style='width: 70%;' > ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=outpm" . $i . " " . "  value='" . $outpm[$i] . "'" . " placeholder='hr:mm' name='outpm" . $i . "'" . " maxlength='8' autofocus style='width: 70%;'> ";
                                            echo "</td>";
                                            echo "<td>"; 
                                            echo "<input type=text class=inputs id=inot" . $i . " " . "  value='" . $inot[$i] . "'" . " placeholder='hr:mm' name='inot" . $i . "'" . " maxlength='8' autofocus style='width: 70%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=outot" . $i . " " ."  value='" . $outot[$i] . "'" . " placeholder='hr:mm' name='outot" . $i . "'" . " maxlength='8' autofocus style='width: 70%;'> ";
                                            echo "</td>";
                                            echo "<td>" . "<input type='text' id='abs" . $i . "' " . "   value='" . $abs[$i] . "'" . " name='abs" . $i . "'" . "  autofocus maxlength='4' style='width: 60%;' /> </td>";
                                            echo "<td>";
                                            echo "<input id='ut" . $i . "' " . "  name='ut" . $i . "'" . " value='" . $ut[$i] . "'" . " maxlength='4' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input id='lt" . $i  . "' " . "  name='lt" . $i . "'" . "  value='" . $lt[$i] . "'" . " maxlength='4' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td>"; 
                                            echo "<input type=text class=inputs id=opening" . $i . " " . "  placeholder='hr:mm' name='opening" . $i . "'" . " maxlength='8' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=closing" . $i . " " . "  placeholder='hr:mm' name='closing" . $i . "'" . " maxlength='8' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input  id=ot" . $i . " " . "  name='ot" . $i . "'" . " value='" . $ot[$i] . "'" . " maxlength='4' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td align=left>";
                                            echo "<select type=time id='shift$i' autofocus style='width: 100%;'>";
                                            echo "<option>" . $schedDescript . "</option>";
                                            for($j=0; $j<$size; $j++){
                                            echo "<option value='$j'>" . $arrayShift[$j][4] . "</option>";
                                            }
                                            echo "</select>";
                                            echo "</td>";
                                            echo "</tr>";
                                            echo "<input type='text'  id='lateam"  . $i . "'" . " name='lateam" . $i . "'" . " value='" . $lateam[$i] . "'" . " style='display:none' />";
                                            echo "<input type='text'  id='latepm"  . $i . "'" . " name='latepm" . $i . "'" . " value='" . $latepm[$i] . "'" . " style='display:none' />";
                                            

                                            echo "<input type='text' id='in$i' style='display:none'/>";
                                            echo "<input type='text' id='break$i' style='display:none'/>";
                                            echo "<input type='text' id='resume$i' style='display:none'/>";
                                            echo "<input type='text' id='out$i' style='display:none'/>";



                                                echo <<< EOT
                            
                           
                    <script type="text/javascript">
                        $('#shift$i').change(function () {
                            var index = $('#shift$i').val();
                            var jArray = 
EOT;
                        echo json_encode($arrayShift);
                        echo <<< EOT
                            ;
                            $('#in$i').val(jArray[index][0]);
                            $('#break$i').val(jArray[index][1]);
                            $('#resume$i').val(jArray[index][2]);
                            $('#out$i').val(jArray[index][3]);
                        }).change();    
                    </script>
EOT;
                
                



                                            $daystart = strtotime("+1 day", $daystart);
                                            
                                            
                                            }
                                           } 
                                    
                             
                                           if($periodD === "2nd Half (13-27)")
                                           {
                                            $i = 0;
                                            while($startDate <= $endDate){
                                            /*
                                            $d = mktime(0, 0, 0, $month, $startDate, $year);
                                            $startDate++;
                                            $n++;
                                            $i++;
                                            echo "<tr>" ;
                                            echo "<td>" . "<input type='date' id='petsa" . $i . "'" . " name='petsa" .$i . "'" . " value=". date("Y-m-d", $d) . " readonly autofocus style='width: 75%;'/>"  . "</td>";
                                            $dateg[] = date("Y-m-d", $d);
                                            //$SQL = "INSERT INTO tmpdtr (EmployeeID, DateDTR) VALUES ('$employID' ,'$dateg[$i]')";
                                            //$result = mysqli_query($connection, $SQL);
                                            echo "<td>" . "<input class=inputs type=text id=inam" . $i . " ".  "  align='center' name='inam" . $i . "'" . "maxlength='8' value='" . $inam[$i] . "'" . " placeholder='hr:mm' autofocus style='width: 70%;'>";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=outam" . $i . " " . " align='center' value='" . $outam[$i] . "'" . " placeholder='hr:mm' name='outam" . $i . "'" . " maxlength='8' autofocus style='width: 70%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=inpm" . $i . " " . "   value='" . $inpm[$i] . "'" . " placeholder='hr:mm' name='inpm" . $i . "'" . " maxlength='8' autofocus style='width: 70%;' > ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=outpm" . $i . " " . "  value='" . $outpm[$i] . "'" . " placeholder='hr:mm' name='outpm" . $i . "'" . " maxlength='8' autofocus style='width: 70%;'> ";
                                            echo "</td>";
                                            echo "<td>"; 
                                            echo "<input type=text class=inputs id=inot" . $i . " " . "  value='" . $inot[$i] . "'" . " placeholder='hr:mm' name='inot" . $i . "'" . " maxlength='8' autofocus style='width: 70%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=outot" . $i . " " ."  value='" . $outot[$i] . "'" . " placeholder='hr:mm' name='outot" . $i . "'" . " maxlength='8' autofocus style='width: 70%;'> ";
                                            echo "</td>";
                                            echo "<td>" . "<input type='text' id='abs" . $i . "' " . "   value='" . $abs[$i] . "'" . " name='abs" . $i . "'" . "  autofocus maxlength='4' style='width: 60%;' /> </td>";
                                            echo "<td>";
                                            echo "<input id='ut" . $i . "' " . "  name='ut" . $i . "'" . " value='" . $ut[$i] . "'" . " maxlength='4' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input id='lt" . $i  . "' " . "  name='lt" . $i . "'" . "  value='" . $lt[$i] . "'" . " maxlength='4' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td>"; 
                                            echo "<input type=text class=inputs id=opening" . $i . " " . "  placeholder='hr:mm' name='opening" . $i . "'" . " maxlength='8' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=closing" . $i . " " . "  placeholder='hr:mm' name='closing" . $i . "'" . " maxlength='8' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input  id=ot" . $i . " " . "  name='ot" . $i . "'" . " value='" . $ot[$i] . "'" . " maxlength='4' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td align=left>";
                                            echo "<select type=time class=inputs id='shift" . $i . "'" . " name='shift" . $i . "'" . " autofocus style='width: 100%;'>";
                                            echo "<option>" . $schedDescript . "</option>";
                                            $query = mysqli_query($connection, "SELECT Description FROM schedule_irregular");
                                            if($query->num_rows > 0)
                                            while($row = $query->fetch_assoc())
                                            echo "<option>" . $row['Description'] . "</option>";
                                            echo "</select>";
                                            echo "</td>";
                                            echo "</tr>";
                                            echo "<input type='text'  id='lateam"  . $i . "'" . " name='lateam" . $i . "'" . " value='" . $lateam[$i] . "'" . " style='display:none' />";
                                            echo "<input type='text'  id='latepm"  . $i . "'" . " name='latepm" . $i . "'" . " value='" . $latepm[$i] . "'" . " style='display:none' />";
                                            */
                                            }
                                           }
                                           

                                         if ($periodD === "Whole Month (1-31)"){
                                           $i = 0;  
                                           while($startDate <= $numdays){
                                            
                                            $d = mktime(0, 0, 0, $month, $startDate, $year);
                                            $startDate++;
                                            $n++;
                                            $i++;
                                            echo "<tr>" ;
                                            echo "<td>" . "<input type='date' id='petsa" . $i . "'" . " name='petsa" .$i . "'" . " value=". date("Y-m-d", $d) . " readonly autofocus style='width: 75%;'/>"  . "</td>";
                                            $dateg[] = date("Y-m-d", $d);
                                            //$SQL = "INSERT INTO tmpdtr (EmployeeID, DateDTR) VALUES ('$employID' ,'$dateg[$i]')";
                                            //$result = mysqli_query($connection, $SQL);
                                            echo "<td>" . "<input class=inputs type=text id=inam" . $i . " ".  "  align='center' name='inam" . $i . "'" . "maxlength='8' value='" . $inam[$i] . "'" . " placeholder='hr:mm' autofocus style='width: 70%;'>";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=outam" . $i . " " . " align='center' value='" . $outam[$i] . "'" . " placeholder='hr:mm' name='outam" . $i . "'" . " maxlength='8' autofocus style='width: 70%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=inpm" . $i . " " . "   value='" . $inpm[$i] . "'" . " placeholder='hr:mm' name='inpm" . $i . "'" . " maxlength='8' autofocus style='width: 70%;' > ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=outpm" . $i . " " . "  value='" . $outpm[$i] . "'" . " placeholder='hr:mm' name='outpm" . $i . "'" . " maxlength='8' autofocus style='width: 70%;'> ";
                                            echo "</td>";
                                            echo "<td>"; 
                                            echo "<input type=text class=inputs id=inot" . $i . " " . "  value='" . $inot[$i] . "'" . " placeholder='hr:mm' name='inot" . $i . "'" . " maxlength='8' autofocus style='width: 70%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=outot" . $i . " " ."  value='" . $outot[$i] . "'" . " placeholder='hr:mm' name='outot" . $i . "'" . " maxlength='8' autofocus style='width: 70%;'> ";
                                            echo "</td>";
                                            echo "<td>" . "<input type='text' id='abs" . $i . "' " . "   value='" . $abs[$i] . "'" . " name='abs" . $i . "'" . "  autofocus maxlength='4' style='width: 60%;' /> </td>";
                                            echo "<td>";
                                            echo "<input id='ut" . $i . "' " . "  name='ut" . $i . "'" . " value='" . $ut[$i] . "'" . " maxlength='4' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input id='lt" . $i  . "' " . "  name='lt" . $i . "'" . "  value='" . $lt[$i] . "'" . " maxlength='4' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td>"; 
                                            echo "<input type=text class=inputs id=opening" . $i . " " . "  placeholder='hr:mm' name='opening" . $i . "'" . " maxlength='8' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input type=text class=inputs id=closing" . $i . " " . "  placeholder='hr:mm' name='closing" . $i . "'" . " maxlength='8' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<input  id=ot" . $i . " " . "  name='ot" . $i . "'" . " value='" . $ot[$i] . "'" . " maxlength='4' autofocus style='width: 60%;'> ";
                                            echo "</td>";
                                            echo "<td align=left>";
                                            echo "<select type=time class=inputs id='shift" . $i . "'" . " name='shift" . $i . "'" . " autofocus style='width: 100%;'>";
                                            echo "<option>" . $schedDescript . "</option>";
                                            $query = mysqli_query($connection, "SELECT Description FROM schedule_irregular");
                                            if($query->num_rows > 0)
                                            while($row = $query->fetch_assoc())
                                            echo "<option>" . $row['Description'] . "</option>";
                                            echo "</select>";
                                            echo "</td>";
                                            echo "</tr>";
                                            echo "<input type='text'  id='lateam"  . $i . "'" . " name='lateam" . $i . "'" . " value='" . $lateam[$i] . "'" . " style='display:none' />";
                                            echo "<input type='text'  id='latepm"  . $i . "'" . " name='latepm" . $i . "'" . " value='" . $latepm[$i] . "'" . " style='display:none' />";
                                            
                                            }
                                        }
                                            
                                        ?>
                                    </tbody>
                                </table>
                                
                                            <input type="hidden" class="form-control" id="employeeName" name='employeeName' value="<?php echo htmlentities($nameEmploy); ?>" /> 
                                            <input type="hidden" class="form-control" id="period" name="period" value="<?php echo htmlentities($selPeriod); ?>" />
                                            <input type="hidden" class="form-control"  id="month" name="month" value="<?php echo htmlentities($month); ?>" />
                                            <input type="hidden" class="form-control" id="year" name="year" value="<?php echo htmlentities($year); ?>" />

                                
                                 </div>
                            </div>
                            <!-- /.table-responsive -->
                            </form> 
                    </div>
                        <!-- /.panel-body -->
                </div>

                    <!-- /.panel -->



                    <p align="center">
                            <button id="newb" type="button" class="btn btn-primary" data-toggle="modal" data-target="#newdtr"> New </button>
                            <button id="periodb" type="button" class="btn btn-primary" data-toggle="modal" data-target="#Period"> Period </button>  
                            <button id="saveb" type="button" class="btn btn-primary" data-toggle="modal" data-target="#save"> Save </button>
                            <button id="searchb" type="button" class="btn btn-primary" data-toggle="modal" data-target="#searchEmploy"> Search </button> 
                            <button id="removeb"type="button" class="btn btn-primary" data-toggle="modal" data-target="#removeRow"> Remove </button>
                            <button id="refreshb" type="button" class="btn btn-primary" data-toggle="modal" data-target="#refresh"> Refresh </button>  
                            <button id="printb" type="button" class="btn btn-primary" data-toggle="modal" data-target="#print"> Print </button>
                            <button id="postb" type="button" class="btn btn-primary" data-toggle="modal" data-target="#post"> Post </button> 
                            <button id="unpostb" type="button" class="btn btn-primary" data-toggle="modal" data-target="#unpost" disabled> Unpost </button> 
                        </p> 
           
        </div>
        <!-- /#page-wrapper -->




          <?php
              require('../ojt/editDTR.php');
          ?>


<!-- Search Employee-->
    <div class="modal fade" id="searchEmploy">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title">Search Employee</h3>
        </div>
        <div class="modal-body">
        <form class="form-horizontal" action="dtrtable.php" method="post">
          <table class="table table-hover" id="finding">
            <thead id="tblHead">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Branch</th>
                <th>Department</th>
              </tr>

            </thead>
            <tbody>
            
             <?php
                $row[] = " ";
                $query = mysqli_query($connection, "SELECT e.EmployeeID, e.LastName, e.FirstName, e.MiddleName, b.BranchName, d.Description FROM employee e LEFT JOIN branch b ON e.BranchCode = b.BranchCode LEFT JOIN department d ON e.DepartmentCode = d.DepartmentCode ORDER BY e.LastName ");
                if($query->num_rows > 0){
                    while($row = $query->fetch_assoc()){
                        echo "<tr><td>" . $row['EmployeeID'] . "</td><td>" . $row['LastName'] . ", " . $row['FirstName'] . " " . $row['MiddleName'] . "</td>" . "<td>" . $row['BranchName'] . "</td>" . "<td>" . $row['Description'] . "</td></tr>";
                    }

                }

             ?>
             
            </tbody>
          </table>

                        <input type="hidden" class="form-control" id="namej" name="employeeName" /> 

         <div class="form-group"> <div class="col-sm-9">
                        <input type="hidden" class="form-control" id="idE" name="idE" /> 
                        </div> </div>

          <div class="form-group">
                                <div class="col-sm-9">
                                <input type="hidden" class="form-control" id="period" name="period" value="<?php echo htmlentities($selPeriod); ?>" /> 
                                </div>
                            </div>
            <div class="form-group">
                                <div class="col-sm-9">
                                <input type="hidden" class="form-control"  id="month" name="month" value="<?php echo htmlentities($month); ?>" /> 
                                </div>
                            </div>
            <div class="form-group">
                <div class="col-sm-9">
                <input type="hidden" class="form-control" id="year" name="year" value="<?php echo htmlentities($year); ?>" /> 
                </div>
            </div>
                            <?php
                            $inamS[] = $outamS[] = $inpmS[] = $inotS[] = $outpmS[] = $outotS[] = $absS[] = $utS[] = $ltS[] = $otS[] = " ";
                            for($i = 1; $i <= $n; $i++){
                            $sql = mysqli_query($connection, "SELECT DISTINCT DateDTR AmIN, AmOUT, PmIN, PmOUT, OtIN, OtOUT, Absent, Undertime, Overtime from tmpdtr Where DateDTR = 'dateg[$i]' ");
                            if($sql->num_rows > 0){
                                while($row = $sql->fetch_assoc()){
                                    $inamS[$i] = $row['AmIN'];
                                    $outamS[$i] = $row['AmOUT'];
                                    $inpmS[$i] = $row['PmIN'];
                                    $outpmS[$i] = $row['PmOUT'];
                                    $inotS[$i] = $row['OtIN'];
                                    $outotS[$i] = $row['OtOUT'];
                                    $absS[$i] = $row['Absent'];
                                    $utS[$i] = $row['Undertime'];
                                    $otS[$i] = $row['Overtime'];       
                                }

                                }
                                else{
                        
                                $inamS[$i] = "";
                                $outamS[$i] = "";
                                $inpmS[$i] = "";
                                $outpmS[$i] = "";
                                $inotS[$i] = "";
                                $outotS[$i] = "";
                                $absS[$i] = "";
                                $ltS[$i] = "";
                                $utS[$i] = "";
                                $otS[$i] = "";
                        
                            }
                            }


                            for($i = 1; $i <= $n; $i++){

                                echo "<input type='text' id='inam". $i . "'" . "  name='inam" . $i . "'" . " value='" . $inamS[$i] . "' style='display:none'/> ";
                                echo "<input type='text' id='outam" . $i . "'" . "  name='outam" . $i . "'" . " value='" .$outamS[$i]. "' style='display:none' />" ;         
                                echo "<input type='text' id='inpm" . $i . "'" . "  name='inpm" . $i . "'" . " value='" . $inpmS[$i] . "' style='display:none' /> ";
                                echo "<input type='text' id='inot" . $i . "'" . "  name='inot" . $i . "'" . " value='" . $inotS[$i] . "' style='display:none' /> ";
                                echo "<input type='text' id='outpm" . $i . "'" . "  name='outpm" . $i . "'" . " value='" . $outpmS[$i] . "' style='display:none' />" ;
                                echo "<input type='text' id='outot" . $i . "'" . " name='outot" . $i . "'" . " value='" . $outotS[$i]. "' style='display:none' />" ;
                                echo "<input type='text' id='abs" . $i . "'" . "  name='abs" . $i . "'" . " value='" . $absS[$i] . "' style='display:none' /> ";
                                echo "<input type='text' id='lt" . $i . "'" . " name='lt" . $i . "'" . " value='" . $ltS[$i] . "' style='display:none' /> ";
                                echo "<input type='text' id='ut" . $i . "'" . " name='ut" . $i . "'" . " value='" . $utS[$i] . "' style='display:none' /> ";
                                }
                               
                                                                                         
                            ?>

          <div style="text-align: center;">
          <button type="submit" class="btn btn-primary" id="select">Select</button>
          <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
          </div>
        </form> 
         </div>    
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



    <!-- Save -->
        <div class="modal fade" id="save" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
                </div>

                <div class="modal-body">
                Do you want to save the data ?  </br>          
                </div>

            <div class="modal-footer">
                
                <button type="submit" class="btn btn-primary" id="savedb" value="<?php echo $employID ?>" name="savedb" form="tabletime">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
        
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
            

   

<!-- New dtr -->
  <div class="modal fade" id="newdtr" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <form method="post" action="dtrtable.php">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
                Do you want create new DTR ?  </br>          
            </div>

            <div class="modal-footer">

                <input type="hidden" name="employeeName"/>
                <input type="hidden" id="period" name="period" /> 
                <input type="hidden"  id="month" name="month"  /> 
                <input type="hidden" id="year" name="year" />


                <button type="submit" id="createDTR" class="btn btn-primary" name="createDTR" value="<?php echo $employID ?>">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>            
            </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Print -->
        <div class="modal fade" id="print" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                <form action="printDTR.php" method="post" target="_blank">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
                </div>

                <div class="modal-body">
                Do you want to print the DTR ?  </br>          
                </div>

            <div class="modal-footer">
                <input type="hidden" id="employeeName" name='employeeName' value="<?php echo htmlentities($name); ?>" /> 
                <input type="hidden" id="period" name="period" value="<?php echo htmlentities($selPeriod); ?>" />
                <input type="hidden"  id="month" name="month" value="<?php echo htmlentities($month); ?>" />
                <input type="hidden" id="year" name="year" value="<?php echo htmlentities($year); ?>" />
                <input type="hidden" name="idE" value="<?php echo $employID ?>" />
                <input type="hidden" name="number" value="<?php echo $n ?>" />
                <input type="hidden" name="season" value="<?php echo $periodD ?>" />


                <?php
                    for($i = 1; $i <= $n; $i++){
                       echo "<input type=hidden  id='date" . $i . "'" . " name='date" . $i . "'" . "  value='" . $dateg[$i] . "'" . "> ";
                    }

                ?>

                <button type="submit" class="btn btn-primary" name="printPDF" id="printPDF">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
        </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


                      


        <!-- Modal -->
        <div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">About</h4>
                    </div>
                    <div class="modal-body">
                        3GX Human Resource Management System<br />Version 1.0<br />Release Date: 12.25.2015
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        
        <div class="modal fade" id="sendFeebackModal" tabindex="-1" role="dialog" aria-labelledby="sendFeebackModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Send Feedback</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label>Comment</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div style="text-align: center;">
                            <button type="submit" class="btn btn-default" data-dismiss="modal">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </form>
                        
                    </div>
                    
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        
    <!-- Modal DTR Codes-->
    <div class="modal fade" id="codesDTR">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title">DTR Time Codes</h3>
        </div>
        <div class="modal-body">
          <table class="table table-hover" id="tblGrid">
            <thead id="tblHead">
              <tr>
                <th>Description</th>
                <th>Codes</th>
                
              </tr>
            </thead>
            <tbody>
             <?php
                $query = mysqli_query($connection, "SELECT Description, LeaveCode FROM leave_type order by Description");
                if($query->num_rows > 0){
                    while($row = $query->fetch_assoc()){
                        echo "<tr><td>" . $row['Description'] . "</td><td>" . $row['LeaveCode'] . "</td></tr>"; 
                    }

                }

             ?>

            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
        </div>
                
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- Modal remove -->
  <div class="modal fade" id="removeRow" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
                Do you want to remove the selected row ?  </br>          
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="yestoRemove" data-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->




<!-- Refresh -->
  <div class="modal fade" id="refresh" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
                Do you want to refresh the page ?  </br>          
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="clear" onclick="reLoad();" data-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Post -->
  <div class="modal fade" id="post" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
                Do you want to post the dtr ?  </br>          
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="postdtr" onclick="inputDisable();" data-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Unpost -->
  <div class="modal fade" id="unpost" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            <div class="modal-body">
                Do you want to Unpost the dtr ?  </br>          
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="unpostdtr" onclick="inputEnable();" data-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



    </div>
    <!-- /#wrapper -->

    <!-- Select DataTables -->
    <script src="../ojt/bower_components/bootstrap/dist/js/dataTables.select.js"></script> 

    <?php
    require('../ojt/footer.php');
    require('../ojt/Time Function DTR/12to24hrs.php');
    require('../ojt/Time Function DTR/Absent.php'); 
    require('../ojt/Time Function DTR/Undertime.php');
    require('../ojt/Time Function DTR/Overtime.php');
    require('../ojt/Time Function DTR/LateTime.php');
    require('../ojt/Time Function DTR/enumLate.php'); 
    require('../ojt/Time Function DTR/tableDTRFunction.php');
    require('../ojt/Time Function DTR/LateS.php');
    require('../ojt/Time Function DTR/UndertimeS.php');
    require('../ojt/Time Function DTR/AbsentS.php');
    require('../ojt/Time Function DTR/enumLateS.php');         
    ?>
   
   
<!-- 
    <script>
    $(document).ready(function() {
        $('#dtr').DataTable({
                responsive: true
        });
    });
    </script>
    --> 
    
</body>

</html>