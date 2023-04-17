<html>
<style>
h2{
	font-size: 30px;
	color:#611f72;
	text-decoration: underline #611f72;
}
h3{
	font-size: 25px;
	color:white;
}
h4{
	font-size: 21px;
	color:white;
}
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
  margin-right: 25% ; /* Same as the width of the sidenav */
  padding: 150px 60px;
  height: 100%;
}

#contact {
  background: #F9F9F9;
  padding: 20px;
  margin: 120px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
   border-radius: 15px;
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
	float: right;
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
  border-radius: 15px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
}
#search-button:hover{
  background-color:thistle ;
}
.sidenav {
  height: 55%;
  width: 20%;
  position: fixed;
  z-index: 1;
  top: 25%;
  left: 75%;
  background-color: 	rgb(250,90,120);
  overflow-x: hidden;
  padding-top: 20px;
  padding-left: 20px;
  padding-right: 15px;
   border-radius: 15px;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
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
			<div class="bg-contact2" style="background-image: url('courses.jpg')">
			<div class = "sidenav">
				<center><h3>IMPORTANT!!</h3></center>
				<h4> SENSITIVE INFORMATION (e.g CNIC, Date of Birth, Gender) is assumed to be already valid and unchangeable - if under any circumstances or errors
				data needs to be updated/edited please refer to the concerned authorities.</h4>
				<h4> The following page may only be accessed by authorized personnel </h4>
				<br><form action = "test.php" method = "post">
				<input placeholder="Enter Staff ID to edit sensitive information" type="text" name = "staffid" >
				<center><input type="submit" id = "search-button" name = "staffbutton" /></a></center>
				</form>
			</div>
			<div class = "main">
				<form id = "contact" action = "" method = "post">
					<h2>EDIT STUDENT INFORMATION: <right><input type="submit" id = "search-button" name = "button" value="INSERT" /></right></h2>
					  <fieldset>
						<input placeholder="Enter Student ID" type="text" name = "stdid" >
					 </fieldset>
					 <fieldset>
					 <input placeholder="Enter new address......" type="text" name = "addrs" >
					</fieldset>
					<br><br><br><hr>
					<h2>CHANGE CURRENT SECTION: <a href ="Assignment_Form.php" input type="submit" id = "search-button"  />CHANGE SECTION</a></center>
					<br>
				</form>
			</div>
		</div>
		</body>
		<?php
		if(isset($_POST["button"])){
			$db_sid =   "(DESCRIPTION =
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
		
			$stdid = $_POST["stdid"];
			$addrs = $_POST["addrs"];
			$q2 = "insert into student_history values('".$stdid."',sysdate,'" .$addrs. "')";
			$query_id2 = oci_parse($con2, $q2); 		
			$r2 = oci_execute($query_id2); 
			if($r2){
				echo '<script>alert("ADDRESS HAS BEEN SUCCESSFULLY UPDATED")</script>';
			}
			else{
				echo '<script>alert("ERROR::ADDRESSES TABLE NOT UPDATED")</script>';
			}
		}
		?>
</html>