<?php

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
                      <p><b>Start Date </b></p><input id="startdate" type="date" class="form-control"  min='2018-10-05' max='2018-11-19'  name="start_date" required>
                    </div>
					<div class="form-group">
                      <p><b>End Date </b></p><input id='enddate' type="date" class="form-control"  min='2018-10-05' max='2018-11-19'  name="end_date" required>
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

					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					  <script>
					    var today = new Date();
						var dd = today.getDate();
						var mm = today.getMonth()+1; //January is 0!
						var yyyy = today.getFullYear();
						 if(dd<10){
								dd='0'+dd
							} 
							if(mm<10){
								mm='0'+mm
							} 

						today = yyyy+'-'+mm+'-'+dd;
						document.getElementById("startdate").setAttribute("min", today);
											 


						$("#startdate").on("change",function(){
						var selected = $(this).val();
							document.getElementById("enddate").setAttribute("min", selected);
						});
					 </script>
      </body>
      </html>
