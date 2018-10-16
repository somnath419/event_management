<?php
if(isset($_SESSION['id']))
{
  header("location:index.php");
}
$error="";
if(isset($_POST['submit']))
{

  $con = mysqli_connect("localhost","root","","event_management"); //keep your db name

  $event_id= mysqli_escape_string($con,$_POST['e_id']);
  $first= mysqli_escape_string($con,$_POST['first']);
  $second = mysqli_escape_string($con,$_POST['second']);
  $third = mysqli_real_escape_string($con, $_POST['third']);

 
      $user_registration_query = "insert into winner(e_id,first_pos,second_pos,third_pos) values ('$event_id','$first','$second','$third')";
      $user_registration_submit = mysqli_query($con,$user_registration_query) or die(mysqli_error($con));

     
	
      header("location:index.php");

    

}

  ?>

<!--Signup form starts-->
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Winner Entry</title>

   
  </head>
  <body >
  
   <?php require_once "header.php"; ?>
    
	<div class="container-fluid" style="margin-top:100px; float:center;">
      <div class="row">
        <div class="container">
          <div class="col-lg-4">


            <div class="panel panel-primary" >
              <div class="panel-heading">
                <h4>Winners of Event</h4>
              </div>
              <div class="panel-body">
                <p class="text-warning"><i>Winner Register</i><p>

                  <form  action="" method="POST">
                    
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Event Id"  name="e_id" required>
                    </div>
					
					<div class="form-group">
                      <input type="text" class="form-control"  placeholder="First "  name="first" required>
                    </div>
					
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Second" name="second" required>
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Third" name="third" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>


                  </form>

                </div>

             

            </div>
          </div>
        </div>
      </div>


      </body>
      </html>
