<?php
session_start();
if(isset($_SESSION['id']))
{
  header("location:index.php");
}
$error="";
if(isset($_POST['submit']))
{

  $con = mysqli_connect("localhost","root","","event_management"); //keep your db name

  $name= mysqli_escape_string($con,$_POST['name']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $confm_password = mysqli_real_escape_string($con, $_POST['confm_password']);

  if($password==$confm_password)

  {
    $usersa_check="select * from teacher_list where teacher_name='$name'";
    $select_query_result = mysqli_query($con, $usersa_check) or die(mysqli_error($con));
    $total_rows_fetched = mysqli_num_rows($select_query_result);


    if($total_rows_fetched>0)
    {
      $error = "<span class='red'>You are already a user please login here:</span>";
      header("location: login.php?error=$error& id=0");
    }
    else
    {
      
      $user_registration_query = "insert into teacher_list(teacher_name,pass) values ('$name','$password')";
      $user_registration_submit = mysqli_query($con,$user_registration_query) or die(mysqli_error($con));

     
      $_SESSION['e_id']=$email;
      header("location:index.php");

    }
  }
  else{
    $error="Password don't matches.";

  }

}


else
{}
  ?>

<!--Signup form starts-->
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teacher Signup</title>

   
  </head>
  <body >
  
   <?php require_once "header.php"; ?>
    
	<div class="container-fluid" style="margin-top:100px; float:center;">
      <div class="row">
        <div class="container">
          <div class="col-lg-4">


            <div class="panel panel-primary" >
              <div class="panel-heading">
                <h4>Sign Up</h4>
              </div>
              <div class="panel-body">
                <p class="text-warning"><i>Register yourself</i><p>

                  <form  action="" method="POST">
                    <div class="form-group">
                      <input class="form-control" placeholder="Name" name="name"  required>
                    </div>
					
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Confirm Password" name="confm_password" required>
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
