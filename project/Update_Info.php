<!DOCTYPE HTML>
<html>
	<head>
	<meta charset ="UTF-8">
	<title>Humaray Bachchay NGO</title>
	<link href="layout.css" rel='stylesheet' type='text/css'>
	</head>
	<style>
	  .required:after {
		content:" *";
		color: red;
	  }
	  .sidenav {
	  height: 70%;
	  width: 20%;
	  position: fixed;
	  z-index: 1;
	  top: 20%;
	  left: 75%;
	  background-color: thistle;
	  overflow-x: hidden;
	  padding-top: 20px;
	  padding-left: 20px;
	  padding-right: 15px;
	   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
	}
	</style>
	<body>
	<nav id="navigation-bar" style="z-index: 9;">
		<img id="logo" src="logo.png">
		<span class="navbar-text text" style= "margin-top: 30px;"> HUMARAY BACHCHAY  </span>
		<a href="Home.html"><p class="impact">Get in Touch</p></a>
		<div class="dropdown">
			<p class="impact">Parents/Guardians</p>
			<div class="dropdown-content">
			<a href="Std_Admission.php">Student Admission Form</a>
			<a href="Std_Acc_Form.php">Student Accompanying Form</a>
			<a href="Assignment_Form.php">Class Assignment Form</a>
			<a href="available_courses.php">Available Courses</a>
			<a href="Update_Info.php">Update Information</a>
			</div>
		</div> 
		<!-- <a href="Student.html"><p class="impact">Students</p></a> -->
		<div class="dropdown">
			<p class="impact">Staff</p>
			<div class="dropdown-content">
			<a href="Reports.php">Reports</a>
			<a href="student.php">Students Per Class</a>
			<a href="edit.php">Edit Sudents</a>
			</div>
		</div>
		<a href="Home.html"><p class="impact">About</p></a>
		<a href="Home.html"><p class="impact">Home</p></a>
	</nav>
	<br><br><br><br><br><br><br><br><br>
	<div class="sidenav">
		<br><br>
		<center><h3> INSTURUCTIONS </h3></center>
		<p class= "monospace"> 1. Input fields with an asterik (*) must be filled </p>
		<p class="monospace"> 2. Mother/Father/Guardian are not allowed to update CNIC, Name and Gender.
		For issues such as typos, contact head office</p>
		<p class= "monospace"> 3. Contact Format 03XX-XXXXXXX </p>
		<p class= "monospace"> 4. One Update in 24hrs is allowed ONLY </p>
		<p class= "monospace"> 5. Income in Numbers </p>
	</div>
	<form action="" method="POST" >
	<div class="form-style-10">
	<h1>Mother Update Form<span>Please Enter The Following Information</span></h1>
    <div><p class="monospace"><b>Mother Information</b></p></div>
        <div class="inner-wrap">
			<table>
			<tr>
			<label>Enter Mother ID (M000)<span style="color:red">* </span><input type="text" name="mid" /></label>
			<label>Mother Contact <span style="color:red">* </span><input type="text" name="mcontact" /></label>
			<label>Mother Email <span style="color:red">* </span><input type="text" name="memail" /></label>
			<label>Mother Address <span style="color:red">* </span><input type="text" name="maddr" /></label>
			<label>Mother Income <span style="color:red">* </span><input type="text" name="mincome" /></label>
			</tr>
			</table>
		</div>
	</div>
	<div class="button-section" align=center>
     <input type="submit" name="mupdate" value="Update Mother"/>
    </div>
	</form>
	<?php
          
		  $con = mysqli_connect("localhost", "root", "", "hamaraybachay"); 
		  if($con){
			if(isset($_POST["mupdate"])){
				$mid=$_POST["mid"];
				$mcontact=$_POST["mcontact"];
				$memail=$_POST["memail"];
				$maddr=$_POST["maddr"];
				$mincome=$_POST["mincome"];
				$q="insert into mother_history values('".$mid."', CURRENT_DATE(), '".$mcontact."', '".$memail."', '".$maddr."', '".$mincome."')";
				$qry=mysqli_query($con,$q);
				if($qry){
				echo '<script>alert("RECORD HAS BEEN SUCCESSFULLY INSERTED")</script>';
				}
				else {echo '<script>alert("ERROR::RECORD NOT INSERTED")</script>';}
			}
		}
		else{
			echo "RECORD NOT INSERTED";
			$e = mysqli_error($query_id);  
			echo $e['message'];	
		}
	
	?>
	<form action="" method="POST" >
	<div class="form-style-10">
	<h1>Father Update Form<span>Please Enter The Following Information</span></h1>
    <div><p class="monospace"><b>Father Information</b></p></div>
        <div class="inner-wrap">
			<table>
			<tr>
			<label>Enter Father ID (FT0000) <span style="color:red">* </span><input type="text" name="fid" /></label>
			<label>Father Contact <span style="color:red">* </span><input type="text" name="fcontact" /></label>
			<label>Father Email <span style="color:red">* </span><input type="text" name="femail" /></label>
			<label>Father Address <span style="color:red">* </span><input type="text" name="faddr" /></label>
			<label>Father Income <span style="color:red">* </span><input type="text" name="fincome" /></label>
			</tr>
			</table>
		</div>
	</div>
	<div class="button-section" align=center>
     <input type="submit" name="fupdate" value="Update Father"/>
    </div>
	</form>
	<?php          

		$con = mysqli_connect("localhost", "root", "", "hamaraybachay"); 

	   if($con){
			if(isset($_POST["fupdate"])){
				$fid=$_POST["fid"];
				$fcontact=$_POST["fcontact"];
				$femail=$_POST["femail"];
				$faddr=$_POST["faddr"];
				$fincome=$_POST["fincome"];
				$q="insert into father_history values('".$fid."','".$fcontact."', '".$femail."','".$faddr."', CURRENT_DATE(), '".$fincome."')";
				
				$qry=mysqli_query($con,$q);
				if($qry){
				echo '<script>alert("RECORD HAS BEEN SUCCESSFULLY INSERTED")</script>';
				}
				else {echo '<script>alert("ERROR::RECORD NOT INSERTED")</script>';}
			}
		}
		else{
			echo "RECORD NOT INSERTED";
			$e = mysqli_error($query_id);  
			echo $e['message'];	
		}
	
	?>
	
	<form action="" method="POST" >
	<div class="form-style-10">
	<h1>Guardian Update Form<span>Please Enter The Following Information</span></h1>
    <div><p class="monospace"><b>Guardian Information</b></p></div>
        <div class="inner-wrap">
			<table>
			<tr>
			<label>Enter Guardian ID (G00)<span style="color:red">* </span><input type="text" name="gid" /></label>
			<label>Guardian Contact <span style="color:red">* </span><input type="text" name="gcontact" /></label>
			<label>Guardian Email <span style="color:red">* </span><input type="text" name="gemail" /></label>
			<label>Guardian Address <span style="color:red">* </span><input type="text" name="gaddr" /></label>
			</tr>
			</table>
		</div>
	</div>
	<div class="button-section" align=center>
     <input type="submit" name="gupdate" value="Update Guardian"/>
    </div>
	</form>
	
	<?php
		  $con = mysqli_connect("localhost", "root", "", "hamaraybachay"); 

		  if($con){
			if(isset($_POST["gupdate"])){
				$gid=$_POST["gid"];
				$gcontact=$_POST["gcontact"];
				$gemail=$_POST["gemail"];
				$gaddr=$_POST["gaddr"];
				$q="insert into guardian_history values('".$gid."', CURRENT_DATE(), '".$gaddr."', '".$gemail."','".$gcontact."')";
				$qry=mysqli_query($con,$q);
				if($qry){
				echo '<script>alert("RECORD HAS BEEN SUCCESSFULLY INSERTED")</script>';
				}
				else {echo '<script>alert("ERROR::RECORD NOT INSERTED")</script>';}
			}
		}
		else{
			echo "RECORD NOT INSERTED";
			$e = mysqli_error($query_id);  
			echo $e['message'];	
		}
	
	?>
	
	</body>
		<script>
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
			document.getElementById("navigation-bar").style.padding = "0px 10px";
			document.getElementById("logo").style.height = "120px";
			document.getElementById("logo").style.width = "110px";
			document.getElementById("logo").style.marginTop = "0px";
		  } else {
			document.getElementById("navigation-bar").style.padding = "40px 10px";
			document.getElementById("logo").style.height = "190px";
			document.getElementById("logo").style.width = "180px";
			document.getElementById("logo").style.marginTop = "-35px";
		  }
		}
	</script>
</html>