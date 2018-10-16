<?php
if(isset($_SESSION['id']))
{
  header("location:index.php");
}

if(isset($_POST['submit-login']))
{

  $con = mysqli_connect("localhost","root","","event_management"); //keep your db name

  $reg_no= mysqli_escape_string($con,$_POST['reg_no']);
  $password=mysqli_escape_string($con,$_POST['password']);


  $select_query = "SELECT  * FROM student_list WHERE reg_no='$reg_no' AND password='$password'";
  $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
  $total_rows_fetched = mysqli_num_rows($select_query_result);
  
  $row_id= mysqli_fetch_assoc($select_query_result);
  $id=$row_id['e_id'];
  $name=$row_id['s_name'];

  $select_email="SELECT reg_no FROM student_list WHERE reg_no='$reg_no'";
  $select_query_resul = mysqli_query($con, $select_email) or die(mysqli_error($con));
  $total_rows_fetched_email= mysqli_num_rows($select_query_resul);



  if($total_rows_fetched==0)
  { if($total_rows_fetched_email==1)
    {
      $error = "<span class='red'>Please enter correct  Password</span>";
      header("location:login.php? error= $error & id=0");
    }
    else{
      $error1 = "<span class='red'>You seems to be new, kindly signup here:</span>";
      header("location:student_signup.php?error1=$error1 & id=0");
    }


  }
  else
  {  
         session_start();
      $_SESSION['id'] = $reg_no;
      $_SESSION['s_name']=$name;
      header('location:index.php');
  }

}
?>

<html lang="en">

   <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Login | Student</title>
       
   </head>

   <body >
       <?php
       include'header.php';
       ?>
       <div id="content" style="margin-top:100px; float:center;">
           <div class="container-fluid decor_bg" id="login-panel" >
               <div class="row">
                   <div class="col-md-4 col-md-offset-4">


                       <div class="panel panel-primary" >
                           <div class="panel-heading">
                               <h4>LOGIN</h4>
                           </div>
                           <div class="panel-body">
                               <p class="text-warning"><i>Login</i><p>
                               <form role="form" action="" method="POST">
                                   <div class="form-group">
                                       <input type="text" class="form-control"  placeholder="Registration Number" name="reg_no" required>
                                   </div>
                                   <div class="form-group">
                                       <input type="password" class="form-control" placeholder="Password" name="password" required>
                                   </div>
                                   <button type="submit" name="submit-login" class="btn btn-primary">Login</button><br><br>

                               </form><br/>
                           </div>
                           <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </body>
</html>