<?php
    include("./connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $role = $_POST['role']; 
   
    if($cpassword!=$password){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "/partials/register.php";
            </script>';
    }
    else{
        move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = mysqli_query($conn, "INSERT INTO `voters`(`name`, `mobile`, `password`, `address`, `photo`, `status`, `votes`, `role`) VALUES ('$name','$mobile','$password','$address','$image','0','0','$role') ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../indexx.php";
                </script>';
        }
    }
?>