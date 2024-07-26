<?php
require_once('connection.php');

if(isset($_POST['add'])){
    $city = $_POST['cname'];
    $category = $_POST['bcategory'];
    $profile = $_POST['bprofile'];

  
    $check_query = "SELECT * FROM `business`";
    $result = mysqli_query($con, $check_query);
    $query = "INSERT INTO `business`VALUES('$city', '$category', '$profile')";
        
        if(mysqli_query($con, $query)){
            header('location:index.php');
        } else {
            $_SESSION['message'] = '<div class="alert alert-danger alert-dismissible" style="position:fixed;top:50px;left:420px">
                Task Record Uploading Failed!
            </div>';
            header('location:admin.php');
        }
    }

?>
