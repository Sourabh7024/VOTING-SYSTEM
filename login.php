<?php
    session_start();
    include("./connect.php");

    $mobile = $_POST['mobile'];
    $pass = $_POST['password'];
    $role = $_POST['role'];

    $check = mysqli_query($conn, "select * from voters where mobile='$mobile' and password='$pass' and role='$role' ");
   
   
    if(mysqli_num_rows($check)>0){
        $getGroups = mysqli_query($conn, "select name, photo, votes, id from voters where role=2 ");
        if(mysqli_num_rows($getGroups)>0){
            $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
            $_SESSION['groups'] = $groups;
        }
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;
        echo '<script>
                window.location = "../partials/dashboard.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "../indexx.php";
            </script>';
    }
    
?>