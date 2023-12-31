<?php
session_start();
if (! isset($_SESSION['userdata'])) {
  header("location: login.html");
}
 
 $userdata = $_SESSION['userdata'];
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
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
    
    .group{
      padding: 15px;
      margin:85px 10px 0px 10px;
      /* top margin is 85px
         right margin is 10px
         bottom margin is 0px
         left margin is 10px */
      border-radius: 10px;
      background-color:coral;
      width: 60%;
      text-align: center;
      float: right;
    }
  </style>

  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('a[data-page]').click(function(event) {
        event.preventDefault();
        var pageName = $(this).data('page');
        $('#content-container').load(pageName + '.html');
      });
    });
  </script> -->
</head>

<body>
  <header>
    <nav>
      <div class="left">Welcome to Online Voting System - <?php echo $userdata['username'] ?></div>
      <div class="right">
        <ul>
         <li><a href="">Home</a></li>
          <!-- <li><a href="aboutus.html">About Me</a></li>
          <li><a href="contactus.html">Contact Me</a></li> -->
          <li><a href="profile.php">My profile</a></li>
          <li><a href="logoutt.php">Logout</a></li>
        </ul>
      </div>
    </nav>
  </header>
 


<div class="group">

</div>
</body>

</html>
