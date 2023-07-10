
<!DOCTYPE html>
<html>
<head>
  <title>Document</title>
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('a[data-page]').click(function(event) {
        event.preventDefault();
        var pageName = $(this).data('page');
        $('#content-container').load(pageName + '.html');
      });
    });
  </script>
</head>

<body>
  <header>
    <nav>
      <div class="left">Online Voting System</div>
      <div class="right">
        <ul>
          <li><a href="home.html" data-page="home">Home</a></li>
          <li><a href="aboutus.html" data-page="aboutus">About Me</a></li>
          <li><a href="contactus.html" data-page="contactus">Contact Me</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <div id="content-container"></div>
</body>

</html>
