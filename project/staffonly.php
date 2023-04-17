<html>
<style>
.container {
  max-width: 900px;
  width: 100%;
  margin: 0 auto;
  position: center;
}

.bg-contact2 {
  width: 100%;  
  background-repeat: repeat;
  background-position: center center;
  background-size: cover;
  background-opacity: 30%;
}

.main {
  margin-right: 15% ; /* Same as the width of the sidenav */
  margin-left: 15%;
  padding: 150px 0px;
}

#contact {
  background: #F9F9F9;
  padding: 20px;
  margin: 10px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
  border-radius: 12px;
}
#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
  color : purple;
}
  
 fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid black;
  background-color: white;
  color: black;
}
input[type=text]:focus {
  background-color: thistle;
}
input[type=text]:hover {
  background-color: thistle;
}
#search-button {
  background-color:#611f72 ;
  color: white;
  padding: 12px 40px;
  border: none;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 30px;
  border-radius: 12px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
}
#search-button:hover{
  background-color:thistle ;
}  
</style>
<head>
		<meta charset ="UTF-8">
	<title>Humaray Bachchay NGO</title>
	<link href="layout.css" rel="stylesheet" type="text/css">
	</head>
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
		<a href="Student.html"><p class="impact">Students</p></a>
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
	
	<div class="bg-contact2" style="background-image: url('bgnew.jpg')">
		<div class = "main"><center>
		<form id = "contact" action = "" method = "post">
		<h3><center>Edit Student Data</center></h3>
		<fieldset>
			<input placeholder="Enter Student ID - MUST FILL" type="text" name = "stdid">
		</fieldset>
		 <fieldset>
			<input placeholder="Enter Full Name" type="text" name = "sname">
		</fieldset>
		 <fieldset>
			<input placeholder="Enter Date of Birth" type="text" name = "dob" >
		</fieldset>
		<fieldset>
			<input placeholder="Enter CNIC (in proper format i.e 11111-111111-1)" type="text" name = "cnic">
		</fieldset>
		<fieldset>
			<input placeholder="Enter Gender" type="text" name = "gender">
		</fieldset>
		<fieldset>
			<input placeholder="Enter image_link" type="text" name = "image_link">
		</fieldset>
		<input type="submit" id = "search-button" name = "u_button" value="EDIT" />
		 </form></center>
	</div>
	</div>
</body>
<?php
	if(!empty($_POST["u_button"])){
	if(isset($_POST["u_button"])){
	$stdid = $_POST["stdid"];
	$cnic = $_POST["cnic"];
	$sname = $_POST["sname"];
	$dob = $_POST["dob"];
	$gender = $_POST["gender"];
	$image_link = $_POST["image_link"];
	echo "<br><br><br><br><br><br>";
		$db_sid= "(DESCRIPTION =
		(ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-MR66B9O)(PORT = 1521))
		(CONNECT_DATA =
		  (SERVER = DEDICATED)
		  (SERVICE_NAME = orcl)
		)
	  )";
		$db_user = "scott";   // Oracle username e.g "scott"
		$db_pass = "1234";    // Password for user e.g "1234"
		$con2 = oci_connect($db_user,$db_pass,$db_sid); 
		if($con2) 
			{ } 
		else 
			{ die('Could not connect to Oracle '); } 
	}

		// edit the record
		if(!empty($_POST["cnic"])){
			$q = "update student set cnic = '".$cnic."' where student_id = '" .$stdid. "'";
			$query_id = oci_parse($con2, $q); 		
			$r = oci_execute($query_id); 
			if($r){
				echo '<script>alert("CNIC UPDATED")</script>';
			}
			else{
				echo '<script>alert("ERROR:: CNIC NOT UPDATED")</script>';
			}
		}
		if(!empty($_POST["dob"])){
			$q = "update student
				set dob = to_date('".$dob."','dd/mm/yyyy') where student_id = '".$stdid."' ";
			$query_id = oci_parse($con2, $q); 		
			$r = oci_execute($query_id); 
			if($r){
				echo '<script>alert(" DATE OF BIRTH UPDATED")</script>';
			}
			else{
				echo '<script>alert("ERROR:: DATE OF BIRTH NOT UPDATED")</script>';
			}
		}
		if(!empty($_POST["sname"])){
			$q = "update student
				set name = '".$sname."' where student_id = '".$stdid."' ";
			$query_id = oci_parse($con2, $q); 		
			$r = oci_execute($query_id); 
			if($r){
				echo '<script>alert("NAME UPDATED")</script>';
			}
			else{
				echo '<script>alert("ERROR::NAME NOT UPDATED")</script>';
			}
		}
		if(!empty($_POST["gender"])){
			$q = "update student
				set gender = '".$gender."' where student_id = '".$stdid."' ";
			$query_id = oci_parse($con2, $q); 		
			$r = oci_execute($query_id); 
			if($r){
				echo '<script>alert("GENDER UPDATED")</script>';
			}
			else{
				echo '<script>alert("ERROR:: GENDER NOT UPDATED")</script>';
			}
		}
		if(!empty($_POST["image_link"])){
			$q = "update student
				set image_link = '".$image_link."' where student_id = '".$stdid."' ";
			$query_id = oci_parse($con2, $q); 		
			$r = oci_execute($query_id); 
			if($r){
				echo '<script>alert("IMAGE UPDATED")</script>';
			}
			else{
				echo '<script>alert("ERROR:: IMAGE NOT UPDATED")</script>';
			}
		}
	}
?>
</html>