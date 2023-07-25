
<?php
session_start();
if (! isset($_SESSION['userdata'])) {
  header("location: login.html");
}
 $userdata = $_SESSION['userdata'];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Profile</title>
     <style>
      * {
      padding: 0;
      margin: 0;
      font-family: sans-serif;
    }

    nav {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: rgb(66, 65, 64);
      height: 60px;
    }

    nav ul {
      display: flex;
      justify-content: center;
      font-weight: bold;
    }

    nav ul li {
      list-style: none;
      margin: 0px 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: black;
    }

    nav ul li a:hover {
      color: rgb(243, 235, 235);
      font-size: 1.05rem;
    }
    .left {
      font-size: 20px;
      font-weight: bold;
      text-transform: capitalize;
    }
   



    </style>
 </head>
 <body>
 <nav>
      <div class="left">Welcome to Online Voting System - <?php echo $userdata['username'] ?></div>
      <div class="right">
        <ul>
         <li><a href="dashboard.php">Home</a></li>
          <!-- <li><a href="aboutus.html">About Me</a></li>
          <li><a href="contactus.html">Contact Me</a></li> -->
          <li><a href="profile.php">My profile</a></li>
          <li><a href="logoutt.php">Logout</a></li>
        </ul>
      </div>
    </nav>
    
 <div>

<b>Username:</b> <?php echo $userdata['username'] ?> <br><br>
<b>Phone number:</b>  <?php echo $userdata['phone'] ?> <br><br>
<b>Roll number:</b>  <?php echo $userdata['roll'] ?> <br><br>
<b>Status:</b> <?php echo $userdata['status'] ?>
</div>
 </body>
 </html>
