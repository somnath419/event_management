<!-- header -->

<html>
<head>
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Events</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           
		  <?php
		  session_start();
          if(!isset($_SESSION['id']))
          {
			  ?>
            <li class="nav-item">
			<a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#signup">Sign Up</a>
			</li>
            <li class="nav-item">
			<a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#login">Login<a>
            </li>
			<?php 
		  }else
		  { ?>
		    <li class="nav-item">
			<a class="nav-link js-scroll-trigger" href="logout.php">Logout<a>
            </li>
		  <?php } ?>
		  
			
			
			 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="about.php">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
		
<div id="signup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Who are You</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        
         <a href="teacher_signup.php"> <button type="submit" class="btn btn-default" name="exp" >Teacher</button></a>
         <a href="student_signup.php">  <button type="submit" class="btn btn-default" name="exp">Student</button></a>
         <!--<a href="admin_signup.php">  <button type="submit" class="btn btn-default" name="exp">Admin</button></a>-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Login Modal -->

<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Who are You</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        
         <a href="teacher_login.php"> <button type="submit" class="btn btn-default" name="exp" >Teacher</button></a>
         <a href="student_login.php">  <button type="submit" class="btn btn-default" name="exp">Student</button></a>
         <a href="admin_login.php">  <button type="submit" class="btn btn-default" name="exp">Admin</button></a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


	
	</body>

	</html>
