<?php
    session_start();
    include("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $check = mysqli_query($connect, "select * from registration where username='$username' and password='$password' and role='$role' ");

    if(mysqli_num_rows($check)>0){
        $getGroups = mysqli_query($connect, "select username,vote, id from registration where role=2 ");
        if(mysqli_num_rows($getGroups)>0){
            $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
            $_SESSION['groups'] = $groups;
        }
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;
    
            echo '<script>
            alert("logged in");
                window.location.href = "dashboard.php";
            </script>';
    }
    
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "login.html";
            </script>';
    }
    
?>