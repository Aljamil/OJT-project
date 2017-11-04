<?php

/*
    for($i = 1; $i <= $n; $i++){
    if($_POST) {
      
      $petsa[] = $_POST["petsa" . $i];
      $inam[] = $_POST["inam" . $i];
      $outam[] = $_POST["outam" . $i];
      $inpm[] = $_POST["inpm" . $i];
      $inot[] = $_POST["inot" . $i];
      $outpm[] = $_POST["outpm" . $i];
      $outot[] = $_POST["outot" . $i];
      $abs[] = $_POST["abs" . $i];
      $ut[] = $_POST["ut" . $i];
      $lt[] = $_POST["lt" . $i];
      $ot[] = $_POST["ot" . $i];
    }
    
     
     else{
        $petsa[$i] = "null";
        $inam[$i] = "null";
        $outam[$i] = "null";
        $inpm[$i] = "null";
        $inot[$i] = "null";
        $outpm[$i] = "null";
        $outot[$i] = "null";
        $abs[$i] = "null";
        $ut[$i] = "null";
        $lt[$i] = "null";
        $ot[$i] = "null";
          
     }
 }
*/

     if(isset($_POST['savedb'])){

 
        $query = mysqli_query($connection, "SELECT * FROM tmpdtr WHERE EmployeeID = '$_POST[savedb]' AND DateDTR IS NOT NULL");

        if ($query->num_rows > 0) {
         for($i = 1; $i <= $n; $i++){
        
        $sql = ("Update tmpdtr Set AmIN= '$inam[$i]' , AmOUT='$outam[$i]' , PmIN='$inpm[$i]' , 
                 PmOUT='$outpm[$i]' , OtIN='$inot[$i]' , OtOUT='$outot[$i]' , Absent='$abs[$i]' , Short='$lt[$i]' , Undertime='$ut[$i]', Overtime= '$ot[$i]', 
                 LateAm ='$lateam[$i]', LatePm ='$latepm[$i]' Where DateDTR = '$dateg[$i]' AND EmployeeID = '$_POST[savedb]' ");

                $result = mysqli_query($connection, $sql);
        }
      
      }

      else {
        echo "The Data in Database empty";
    } 
  }

?>

<?php

          if(isset($_POST['createDTR'])) 
          {
                $sql = mysqli_query($connection, "DELETE from tmpdtr WHERE EmployeeID = '$_POST[createDTR]' OR EmployeeID = ' ' OR EmployeeID = 'null' ");
          }
?>
