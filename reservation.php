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

</style>
<body>

<br><br>
<div class="container">
    <h1 class="text-center"><br>New Reservation<br></h1>   
    <div class="row">
        <div class="col-md-6 offset-md-3">   
 
        
        
        
    
<?php
if(isset($_SESSION['user_id'])){
    echo '<h2 class="text-white bg-dark text-center">Welcome '. $_SESSION['username'] .', Create your reservation here.</h2>';
      
  //error handling:
    
    if(isset($_GET['error3'])){
        if($_GET['error3'] == "emptyfields") {   //require all inputs
            echo '<h3 class="bg-danger text-center">Fill all fields, Please try again!</h3>';
        }
        else if($_GET['error3'] == "invalidfname") {   
            echo '<h3 class="bg-danger text-center">Invalid First Name, Please try again!</h3>';
        }
        else if($_GET['error3'] == "invalidlname") {   
            echo '<h3 class="bg-danger text-center">Invalid Last Name, Please try again!</h3>';
        }
        else if($_GET['error3'] == "invalidtele") {   
            echo '<h3 class="bg-danger text-center">Invalid Telephone, Pleast try again!</h3>';
        }
        else if($_GET['error3'] == "invalidcomment") {   
            echo '<h3 class="bg-danger text-center">Invalid Comment, Pleast try again!</h3>';
        }
        else if($_GET['error3'] == "invalidguests") {   
            echo '<h3 class="bg-danger text-center">Invalid Guests, Pleast try again!</h3>';
        }
        else if($_GET['error3'] == "full") {   
            echo '<h3 class="bg-danger text-center">Reservations are full this date and timezone, Please try again.</h3>';
        }
    }
        if(isset($_GET['reservation'])) {   
           if($_GET['reservation'] == "success"){ 
            echo '<h3 class="bg-success text-center">Your reservation was successfull!</h3>';
        }
        }
        echo'<br>';



    

    
    
     //reservation form  
    echo '  
<h2> <b>
    <div class="signup-form">
        <form action="includes/reservation.inc.php" method="post">
            <div class="form-group">
            <label>First Name</label>
                <input type="text" class="form-control" name="fname" placeholder="First Name" required="required">
                <small class="form-text text-muted">First name must be 2-20 characters long</small>
            </div>
            <div class="form-group">
            <label>Last Name</label>
                <input type="text" class="form-control" name="lname" placeholder="Last Name" required="required">
                <small class="form-text text-muted">Last name must be 2-20 characters long</small>
            </div>   
            <div class="form-group">
            <label>Enter Date</label>
        	<input type="date" class="form-control" name="date" placeholder="Date" required="required">
            </div>
            <div class="form-group">
		<label>Enter Time Zone</label>
		<select class="form-control" name="time">
		<option>12:00 - 16:00</option>
		<option>16:00 - 20:00</option>
		<option>20:00 - 00:00</option>
		</select>
            </div>
            <div class="form-group">
            <label>Enter number of Guests</label>
        	<input type="number" class="form-control" min="1" name="num_guests" placeholder="Guests" required="required">
                <small class="form-text text-muted">Minimum value is 1</small>
            </div>
            <div class="form-group">
            <label for="guests">Enter your Telephone Number</label>
                <input type="telephone" class="form-control" name="tele" placeholder="Telephone" required="required">
                <small class="form-text text-muted">Telephone must be 6-20 characters long</small>
            </div>
            <div class="form-group">
            <label>Enter extra Comments</label>
                <textarea class="form-control" name="comments" placeholder="Comments" rows="3"></textarea>
                <small class="form-text text-muted">Comments must be less than 200 characters</small>
            </div>        
            <div class="form-group">
		<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
            <button type="submit" name="reserv-submit" class="btn btn-dark btn-lg btn-block">Submit Reservation</button>
            </div>
        </form>
        <br><br>
    </div>
</b> </h2>
    ';  
    }

    else {
        echo '	<h1><p class="text-center text-danger"><br>You are currently not logged in!<br></p>
       <p class="text-center">In order to make a reservation you have to create an account!<br><br><p></h1>';  
        
    }
    ?>

             
        </div>
    </div>
</div>
<br><br>


<?php
require "footer.php";
?>

</body>