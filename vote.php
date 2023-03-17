<?php
    session_start();
    include("./connect.php");

    $votes = $_POST['gvotes'];
    $total_votes= $votes+1;
    $gid = $_POST['gid'];
    $uid = $_SESSION['id'];

    $update_votes = mysqli_query($conn, "update voters set votes='$total_votes' where id='$gid'");
    $update_status = mysqli_query($conn, "update voters set status=1 where id='$uid'");

    if($update_status and $update_votes){
        $getGroups = mysqli_query($conn, "select name, photo, votes, id from voters where role=2 ");
        $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
      
        $_SESSION['groups'] = $groups;
        $_SESSION['status'] = 1;
        echo '<script>
                    alert("Voting successfull!");
                    window.location = "../partials/dashboard.php";
                </script>';
    }
    else{
        echo '<script>
                    alert("Voting failed!.. Try again.");
                    window.location = "../partials/dashboard.php";
                </script>';
    }
    
?>