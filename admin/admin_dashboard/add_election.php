
<!DOCTYPE html>
<html>
<head>
    <title>Add Candidate</title>
    <!-- Add your CSS and other meta tags here -->
    <style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        font-family: sans-serif;
        background-color: beige;
    }
    .first{
    display: flex;
    justify-content: space-around;
   }
    .a{
        
        
        width: 220px;
        height: 35px;
        border: 1.5px solid black;
        border-radius: 10px; 
        margin: 10px 0 5px 0;
    }
    
    #submit{
        
        background-color: green;
        width: 25%;
        height: 25px;
        border: none;
        border-radius: 10px;
        margin-left: 20%; 
        margin-top: 10px;
        width: 20%;
    }
    
    table, th, td {
  border:1.5px solid black;
  border-radius: 3px;
  /* padding: 1px; */
  border-spacing: 8px;
}

    </style>
</head>
<body>
    <?php
    // Include the header
    include("header.php");
    ?>
  <main>
    <section class="first">
    <!-- Your add_e.html content here -->
    <div class="left">
        <h2 id="add">Add new election</h2>
        <form method="post">
        <input type="text" name="election_topic" placeholder="Election topic" class="a"> <br>

        <input type="number" name="number_of_candidates" placeholder="No. of candidates" class="a"><br>

        <input type="text" onclick="this.type='date'"  placeholder="Starting Date" name="starting_date" class="a"><br>

        <input type="text" onfocus="this.type='Date'"  placeholder="Ending Date" name="ending_date" class="a"><br>

        <input type="submit" value=Submit name="addElectionBtn" id="submit">
        </form>
    </div>

    <div class="right">
        <h2>Upcomming Election</h2>
       <table class="table">
       <thead>
        <tr>
            <th scope="col">S no.</th>
            <th scope="col">Election Name</th>
            <th scope="col">No. of Candidates</th>
            <th scope="col">Starting Date</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
       </thead>

       </table>
    </div>
    </section>
    </main>
    <?php
    // Include the footer
    include("footer.php");
    ?>
</body>
</html>

<!-- php code  -->

<?php
if (isset($_POST['addElectionBtn'])) {
    $election_topic = mysqli_real_escape_string($db,$_POST['election_topic']);
    $number_of_candidates = mysqli_real_escape_string($db,$_POST['number_of_candidates']);
    $starting_date = mysqli_real_escape_string($db,$_POST['starting_date']);
    $ending_date = mysqli_real_escape_string($db,$_POST['ending_date']);

    $inserted_on = date("y-m-d");

    $date1=date_create($inserted_on);
    $date2=date_create($starting_date);
    $diff = date_diff($date1,$date2);

    if ( $diff -> format("%R %a days")>0) {
       $status= "Inactive";
    }
    else{
        $status= "Active";
    }

//Inserting these value in election table
mysqli_query($db,"Insert into elections(election_topic,number_of_candidates,starting_date,ending_date,status,inserted_on) Values('".$election_topic ."','".$number_of_candidates ."','". $starting_date."','".$ending_date ."','".$status ."','".$inserted_on ."',)") or die(mysqli_error($db)) ;




}


?>