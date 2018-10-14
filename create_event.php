<?php
session_start();
if(isset($_SESSION['id']))
{
  header("location:index.php");
}
$error="";
if(isset($_POST['create']))
{

  $con = mysqli_connect("localhost","root","","event_management"); //keep your db name

  $event_name= mysqli_escape_string($con,$_POST['event_name']);
  $start_date= mysqli_escape_string($con,$_POST['start_date']);
  $end_date= mysqli_escape_string($con,$_POST['end_date']);
  $entry_fee= mysqli_escape_string($con,$_POST['entry_fee']);
  $total_prize= mysqli_escape_string($con,$_POST['total_prize']);
  $description= mysqli_escape_string($con,$_POST['description']);


  
   


      
      $user_registration_query = "insert into event_list(event_name,start_date,end_date,entry_fee,total_prize,description) values ('$event_name','$start_date','$end_date','$entry_fee','$total_prize','$description')";
      $user_registration_submit = mysqli_query($con,$user_registration_query) or die(mysqli_error($con));

    

	header("location:admin_home.php");
    
 
}

  ?>

<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Event</title>

   
  </head>
  <body >
  
   <?php require_once "header.php"; ?>
    
	<div class="container-fluid" style="margin-top:100px; float:center;">
      <div class="row">
        <div class="container">
          <div class="col-lg-4">


            <div class="panel panel-primary" >
              <div class="panel-heading">
                <h4>Create an event here</h4>
              </div>
              <div class="panel-body">
                

                  <form  action="" method="POST">
                    <div class="form-group">
                      <input class="form-control" placeholder="Event Name" name="event_name"  required>
                    </div>
                    <div class="form-group">
                      <p><b>Start Date </b></p><input type="date" class="form-control"  placeholder="Start Date"  name="start_date" required>
                    </div>
					
					<div class="form-group">
                      <p><b>End Date </b></p><input type="date" class="form-control"  placeholder="End Date"  name="end_date" required>
                    </div>
					
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Entry Fee" name="entry_fee" required>
                    </div>

                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Total Prize" name="total_prize" required>
                    </div>
				
					
					<div class="form-group">
						<textarea class="form-control" placeholder="Add Description" name="description" cols="40" rows="5"></textarea>
					</div>
						
                    <button type="submit" name="create" class="btn btn-primary">Create</button>


                  </form>

                </div>

             

            </div>
          </div>
        </div>
      </div>


      </body>
      </html>
