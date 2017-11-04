<?php
    require('../ojt/connectDB.php');
?>

<?php
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }
    
    $uploadOk = 1;
    $imageSize = 500000;
    
    //if(isset($_POST['Submit'])){
        $target_dir = '../ojt/img/';
        $target_ext = $_FILES['file']['type'];
        
        //File type check
        if ($target_ext == 'image/gif') {
            $file_ext = '.gif';
        } else if ($target_ext == 'image/jpeg' || $target_ext == 'image/jpg') {
            $file_ext = '.jpg';
        }  else if ($target_ext == 'png') {
            $file_ext = '.png';
        } else {
            echo "Not Supported Image Type.";
            $uploadOk = 0;
        }
        
        $target_file = $target_dir.$employeeID.$file_ext;
        //$target_file = $target_dir.$_FILES['file']['name'];
        
        // Check file size
        if ($_FILES["file"]["size"] > $imageSize) {
            echo "Image File is too large.";
            $uploadOk = 0;
        }
        
        //echo "Success";
        
        if ($uploadOk == 0) {
            echo "File not uploaded";
        } else {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                echo "File has been uploaded";
            } else {
                echo "File upload failed";
            }
        }
    //}
    
    
    $url = "../ojt/employeeEditProfile.php?HiddenEmployeeID=$employeeID";
    header('Location: '.$url);
    
    $newPic = $employeeID.$file_ext;
    //$newPic = $_FILES['file']['name'];
    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee set EmpPicture='$newPic' where EmployeeID='$employeeID'";
         //$sql = "Update employee set EmpPicture='AA2016.jpg' where EmployeeID='AA2016'";
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
    
?>

<?php
    mysqli_close($connection);
?>