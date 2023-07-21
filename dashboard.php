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
      font-size: 25px;
      font-weight: bold;
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
      <div class="left">Online Voting System</div>
      <div class="right">
        <ul>
          <!-- <li><a href="home.html" onclick="location.href='dashboard.html';"  data-page="home">Home</a></li> -->

         <li><a href="">Home</a></li>
          <li><a href="aboutus.html">About Me</a></li>
          <li><a href="contactus.html">Contact Me</a></li>
          <li><a href="logoutt.php">Logout</a></li>
        </ul>
      </div>
    </nav>
  </header>
 <!-- <div class="profile">
  <b>Userame:</b><?php echo $data['username'] ?> <br><br>
  <b>Phone:</b> <?php echo $data['phone'] ?><br><br>
  <b>Roll:</b><?php echo $data['roll'] ?> <br><br>
  <b>Status</b><?php echo $data['role'] ?> <br> 
</div>-->
<b>Username:</b> <?php echo $userdata['username'] ?> <br><br>
<b>Phone number:</b>  <?php echo $userdata['phone'] ?> <br><br>
<b>Roll number:</b>  <?php echo $userdata['roll'] ?> <br><br>
<b>Status:</b> <?php echo $userdata['status'] ?>


 
</body>

</html>
