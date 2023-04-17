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
  padding: 200px 0px;
}

#contact {
  background: #F9F9F9;
  padding: 20px;
  margin: 10px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
  border-radius: 20px;
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
  background-color: blue;
}
input[type=text]:hover {
  background-color: blue;
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
  background-color: blue ;
}  
</style>
<head>
		<meta charset ="UTF-8">
	<title>Humaray Bachchay NGO</title>
	<link href="layout.css" rel="stylesheet" type="text/css">
	</head>
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
	
	<div class="bg-contact2" style="background-image: url('bgnew.jpg')">
		<div class = "main"><center>
		<form id = "contact" action = "" method = "post">
		<h3><center>Enroll New Student in Course</center></h3>
		 <fieldset>
			<input placeholder="STUDENT ID...." type="text" name = "stdid">
		</fieldset>
		 <fieldset>
			<input placeholder="COURSE ID...." type="text" name = "crsid" >
		</fieldset>
		<fieldset>
			<input placeholder="FEE CHALLAN...." type="text" name = "fee">
		</fieldset>
		<fieldset>
			<input placeholder="CLASS...." type="text" name = "class">
		</fieldset>
		<input type="submit" id = "search-button" name = "button" value="INSERT" />
		 </form></center>
	</div>
	</div>
</body>
<?php
	if(!empty($_POST["button"])){	
		$stdid = $_POST["stdid"];
		$crsid = $_POST["crsid"];
		$feechallan = $_POST["fee"];


		$con = mysqli_connect("localhost", "root", "", "hamaraybachay"); 

		if($con) 
			{ } 
		else 
			{ 
				die('Could not connect to mySQL: '); 
			} 
		$q2="select round(TIMSTAMPDIFF(MONTH, curdate(), DOB)/12,1) from Student where Student_ID ='".$stdid."'";
		$std_id = mysqli_query($con, $q2);
		$s_arr= mysqli_fetch_array($std_id);
			echo $s_arr[0];
		
		if($s_arr[0] <6){
			$class = 1;
		}
		if($s_arr[0] >6 && $s_arr[0]<8){
			$class = 2;
		}
		if($s_arr[0] >=8 && $s_arr[0]<10){
			$class = 3;
		}
		if($s_arr[0] >=10 && $s_arr[0]<12){
			$class = 4;
		}
		if($s_arr[0] >=12 && $s_arr[0]<14){
			$class = 5;
		}
		if($s_arr[0] >=14 && $s_arr[0]<16){
			$class = 6;
		}
		if(!empty($_POST["class"])){
			$class = $_POST["class"];
		}
		echo $class;
		echo "<br>";
		
		
		$q0 = "select Gender from student where Student_ID = '" .$stdid. "'";
		$query_id0 = mysqli_query($con, $q0);
		$row0 = mysqli_fetch_array($query_id0);
		if($row0){
				echo $row0['Gender'];
				echo "<br>";
		}
		else {echo "ERROR GETTING Gender <br>";}
		$Gender = $row0['Gender'];
	
		
		$q2 = "select f.Student_ID from fee_details f, Course_History c where Fee_Challan = '" .$feechallan. "' and Student_ID = '" .$stdid. "' and f.Due_Date = c.Due_Date and c.Course_ID = '" .$crsid. "'";
		$query_id2 = mysqli_query($con, $q2);
		$row2 = mysqli_fetch_array($query_id2);
		if($query_id2){
			if($Gender == 'M'){
				$q3 = "insert into enrollment_history values('" .$stdid. "', '" .$crsid. "', 'GR-B','" .$class. "','" .$feechallan. "', 1, curdate() )";
			}
			else {	
				$q3 = "insert into enrollment_history values('" .$stdid. "', '" .$crsid. "', 'BL-G','" .$class. "','" .$feechallan. "', 1, curdate() )";
			}
			$query_id3 = mysqli_query($con, $q3); 
			if($query_id3){
				echo '<script>alert("RECORD HAS BEEN SUCCESSFULLY INSERTED")</script>';
			}
			else {echo '<script>alert("ERROR::RECORD NOT INSERTED OR ALREADY EXISTS")</script>';
			}
		}
		else {echo '<script>alert("ERROR:: STUDENT HAS NOT PAID FEE")</script>';}
	}

?>
</html>