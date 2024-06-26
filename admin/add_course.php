<?php

$error="";
$msg="";

    $host="localhost";
    $user="root";
    $password="";
    $db="SMSDB";

    $data=mysqli_connect($host,$user,$password,$db);
    if(isset($_POST['add_course']))
    {
        $rN=$_POST['RN'];
        $sem=$_POST['sem'];
        $cID=$_POST['courseId'];
        $cName=$_POST['courseName'];
        $marks=$_POST['marks'];
        
        $sql="INSERT INTO course (registration_number,semester,course_id,course_name,marks) VALUES ('$rN',' $sem','$cID','$cName','$marks')";

        $result=mysqli_query($data,$sql);
        if($result)
        {
            $msg = "<p class='alert alert-success'>Added Successfully</p> ";
        }
        else
        {
            $error = "<p class='alert alert-warning'>Added Not Successfully</p> ";
        }

    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <style type="text/css">
    lable
    {
        display: inline-block;
        text-align:right;
        width: 100px;
        padding-top:10px;padding-bottom:10px;
    }
    .div_form
    {
        background-color: #ede6e6;
        width: 800px;
        height: 350px;
        border-radius: 10px;
        padding: 40px;
    }
</style>
	
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
  <a class="navbar-brand" href="#">
      <img src="image/logo.png" alt="Logo" height="30" class="d-inline-block align-top">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-2" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item px-5">
          <a class="nav-link" href="adminhome.php">Home</a>
        </li>
		<li class="nav-item dropdown px-5">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Student</a>
			<ul class="dropdown-menu">
				<li class="nav-item"> <a class="nav-link" href="add_student.php">Add Student</a> </li>
				<li class="nav-item"> <a class="nav-link" href="view_student.php">View Student</a> </li>
			</ul>
        </li>
        <li class="nav-item dropdown px-5">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Course</a>
			<ul class="dropdown-menu">
				<li class="nav-item"> <a class="nav-link" href="add_course.php">Add Course</a> </li>
				<li class="nav-item"> <a class="nav-link" href="view_course.php">View Course</a> </li>
			</ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: green;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Header End -->

<!-- Sidebar -->
<div class="sidebar">
    <a href="#">
        <img src="image/profile.png" alt="Admin Logo" height="100" class="d-inline-block align-top">
        <br>Admin
    </a>
    <a href="#">Settings</a>
    <a href="#">Change Password</a>
    <a href="logout.php" style="color: green;">Logout</a>
</div>
<!-- Sidebar End -->

<!-- Main Content -->
<div class="main">
	<div class="content">
    <h5>Add Course</h5>
		<center>
        <p class="account-subtitle"><?php echo $error; ?><?php echo $msg; ?></p>
		  <div class="div_form">
            <form action="#" method="POST">
               <div>
                    <lable>Reg. Number</lable>
                    <input type="text" name="RN">
               </div>
               <div>
                    <lable>Semester</lable>
                    <input type="text" name="sem">
               </div>
               <div>
                    <lable>Course ID</lable>
                    <input type="text" name="courseId">
               </div>
               <div>
                    <lable>Course Name</lable>
                    <input type="text" name="courseName">
               </div>
               <div>
                    <lable>Marks</lable>
                    <input type="text" name="marks">
               </div>
               
               <div>
                    <input type="submit" class="btn btn-primary" name="add_course" value="add Course">
               </div>
            </form>
        </div>
</center>
	</div>
    </div>

</body>
</html>
