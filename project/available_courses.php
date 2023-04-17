<html>
<style>
h2{
	font-size: 30px;
	color:#611f72;
	text-decoration: underline #611f72;
}
h3{
	font-size: 25px;
	color:#611f72;
}
p{
	font-size: 21px;
	color:#611f72;
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
  border-radius: 15px;
  background: #F9F9F9;
  padding: 20px;
  margin: 40px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
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
  border-radius: 15px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
}
#search-button:hover{
  background-color:thistle ;
}
.sidenav {
  height: 60%;
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
	
	</body>
	<?php

		$con = mysqli_connect("localhost", "root", "", "hamaraybachay"); 
		
		if($con) 
			{ } 
		else 
			{ die('Could not connect to mySQL: '); } 
			$counter = 0;
			$row = array();
			$q = "select c.Course_ID, c.Course_Title, h.Start_Date, h.Due_Date, h.fee, h.Duration 
			from course c, course_history h
			where h.Due_Date > current_date and c.Course_ID = h.Course_ID";
			
			$query_id = mysqli_query($con, $q);

			while ($row[$counter] = mysqli_fetch_array($query_id)){
					$counter += 1;
			}
	?>
	<body>	
		<div class="bg-contact2" style="background-image: url('courses.jpg')">
			<!-- <div class = "sidenav">
			<br>
				<center><h3>INSTRUCTIONS</h3></center>
				<p> 1. A Student can only enroll in one course at a time.</p>
				<p> 2. A Student can only enroll if fee is paid.</p>
				<p> 3. Default section will be BL-G for girls and GR-B for boys. For any changes please contact admin.</p>
				<p> 4. Classes are divided based on age so the same courses are taught for different levels of intellect. Please choose wisely.</p>
			</div> -->
			<div class = "main">
				<form id = "contact" action = "" method = "post">
					<h2>AVAILABLE COURSES:</h2>
					<?php 
						$temp = 0;
						while($temp < $counter){
								echo "<font size= '6' face='Sans Serif' color = 'dimgrey'>";
								echo "ID:&nbsp".$row[$temp]['Course_ID']."&nbsp&nbsp&nbsp&nbsp";
								echo "TITLE:&nbsp".$row[$temp]['Course_Title'];
								echo "<br>";?>
								<hr><?php 
								echo "<font size= '5.5' face='Sans Serif' color = 'grey'>";
								echo "START DATE:&nbsp".$row[$temp]['Start_Date']."&nbsp&nbsp&nbsp&nbsp";
								echo "DURATION:&nbsp".$row[$temp]['Duration']."&nbsp&nbsp&nbsp&nbsp";
								echo "LAST DATE TO REGISTER:&nbsp".$row[$temp]['Due_Date'];
								echo "<br><br><br>";
								$temp+=1;
						}
					?>
					<br>
					<center><a href ="enroll.php" input type="submit" id = "search-button" name = "button" />REGISTER</a></center>
					<br>
				</form>
			</div>
		</div>
	
	</body>
</html>