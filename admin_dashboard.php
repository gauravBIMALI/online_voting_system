

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
    
    /* below code is for footer section */
   

footer {
     margin-top: 10px;
    background-color:rgb(66, 65, 64);
    color: #fff;
    text-align: center;
    padding: 05px;
}

.footer {
    max-width: 800px;
    margin: 0 auto;
}

.footer p {
    margin: 5px;
}
    
  </style>

</head>

<body>
  <header>
    <nav>
      <div class="left">Welcome to Online Voting System:</div>
      <div class="right">
        <ul>
         <li><a href="">Home</a></li>
          <li><a href="../admin/admin_dashboard/add_election.php">Add election</a></li> 
          <li><a href="../admin/admin_dashboard/add_candidate.php">Add candidate</a></li>
          <li><a href="../admin/admin_dashboard/logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
  </header>
 <footer>
  <div class="footer">
     <p>&copy; 2023 Online Voting System. All rights reserved.</p>
     <p>Contact us: abc@onlinevotingsystem.com</p>
     <p>Developed by: XYZ from Himalaya Darsan Collage</p>
     <p>Location:Biratnagar,Nepal</p>
  </div>
</footer>
</body>

</html>
