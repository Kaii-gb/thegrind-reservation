<?php
require "header.php";
?>
<?php
require "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">    <!--favicon-->
<title>The Grind</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css">     <!--style.css document-->
  <link href="css/font-awesome.min.css" rel="stylesheet">     <!--font-awesome-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">  <!--bootstrap-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  <!--googleapis jquery-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!--font-awesome-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>                          <!--bootstrap-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>           <!--bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>            <!--bootstrap-->
</head>
<style>
.flex-column { 
       max-width : 260px;
   }
           
.container {
            background: #f9f9f9;
        }
      
.img {
            margin: 5px;
        }

.logo img{
	 width:150px;
	 height:250px;
	margin-top:90px;
	margin-bottom:40px;
}

body, html
 {height: 100%}
body,h1,h2,h3,h4,h5,h6,p
{font-family: "Amatic SC", sans-serif}

input[type="text"]
{
    font-size:30px;
}

input[type="number"]
{
    font-size:30px;
}

input[type="date"]
{
    font-size:30px;
}

input[type="telephone"]
{
    font-size:30px;
}

select[name="time"]
{
    font-size:20px;
}

body{
  background-image: url('img/rbg.jpg');
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover; 
  background-attachment: fixed;
}
tr td 
{ font-size: 25px; }

th
{ font-size: 25px; }


</style>
<body>
<br><br>
<div class="container">
    <h3 class="text-center"><br>Edit Tables<br></h3>
    <div class="col-md-6 offset-md-3">

                           
<?php if(isset($_SESSION['user_id'])){
    if($_SESSION['role']==2){
        
        echo '<p class="text-white bg-dark text-center">Set the number of tables for a specific date</p><br>';

        if(isset($_GET['error4'])){
        if($_GET['error4'] == "sqlerror1") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<h5 class="bg-danger text-center">Error</h5>';
        }
        if($_GET['error4'] == "emptyfields") {  
            echo '<h5 class="bg-danger text-center">Error, Empty fields</h5>';
        }
        }
        if(isset($_GET['tables'])){
        if($_GET['tables'] == "success") {   
            echo '<h5 class="bg-success text-center">Tables was successfully submited</h5>';
        }
        }
        echo'
                                                 
<div class="signup-form">
        <form action="includes/tables.inc.php" method="post">
            <div class="form-group">
            <label>Enter Date</label>
        	<input type="date" class="form-control" name="date_tables" placeholder="Date">
            </div>
            <div class="form-group">
            <label>Number of tables</label>
            <input type="number" class="form-control" min="1" name="num_tables" required="required">
            <small class="form-text text-muted">Default number is 20</small>
            </div>
            <div class="form-group">
            <button type="submit" name="tables" class="btn btn-dark btn-lg btn-block">Submit Tables</button>
            </div>
        </form>
        <br><br>
</div> ';
        
    }
}                
    else {
        echo '	<p class="text-center"><br>You are have no permission!<br><br></p>';          
    }      
?>
    </div>
</div>
<br><br>
</body>
<?php
require "footer.php";
?>