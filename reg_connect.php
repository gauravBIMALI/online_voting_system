
<?php
    include("connect.php");

    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $roll = $_POST['roll'];
    $password = $_POST['password'];

     $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $role = $_POST['role'];

    if($roll != 0){
            $insert = mysqli_query($connect, "insert into registration (username, phone,roll, password,status, vote, role) value('$username', '$phone','$roll','$password', 0, 0, '$role') ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "login.html";
                </script>';
                
    }
    else{
        echo '<script>
        alert("invalid roll number");
       //  window.location = "reg.html";
    </script>';
        
        }
    }
    
?>