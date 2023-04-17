<!DOCTYPE HTML>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h3{
	font-size: 25px;
	color:white;
}
select {
   background-color: thistle;  
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    color: #555;
	max-width : 10%;
}
select:hover{
		border: dashed purple;
}

.bg-contact2 {
  width: 100%;  
  background-repeat: repeat;
  background-position: center center;
  background-size: cover;
  background-opacity: 30%;
}

.sidenav {
  height: 100%;
  width: 15.5%;
  position: fixed;
  z-index: 1;
  top: 15%;
  left: 84%;
  background-color: thistle;
  overflow-x: hidden;
  padding-top: 17px;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
}

.sidenav a {
  padding: 0px 0px 0px 0px;
  text-decoration: none;
  font-family: "Lato", sans-serif;
  font-size: 20px;
  color: #611f72;
  display: block;
  text-align: center;
}

.sidenav a:hover {
  color: thistle;
  background-color: #611f72;
}

.main {
  margin-right: 20% ; /* Same as the width of the sidenav */
  margin-left: 2%;
  font-size: 25px; /* Increased text to enable scrolling */
  padding: 150px 0px;
  color = white;
  height: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
input[type=text2] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: white;
  color: black;
}
input[type=text2]:focus {
  background-color: thistle;
}
input[type=text2]:hover {
  background-color: thistle;
}

#classes-button {
   background-color: thistle ;
   border: none;
   font-family: "Lato", sans-serif;
   font-size: 28px;
   color: #611f72;
   padding: 28px 65px;
   margin: 10px 0px;
   cursor: pointer;
}
#classes-button:hover{
  color: thistle;
  background-color: #611f72;
  text-align = center;
}
#Nameid-button {
   background-color: thistle ;
   border: none;
   font-family: "Lato", sans-serif;
   font-size: 20px;
   color: #611f72;
   padding: 10px 50px;
   margin: 0px 0px;
   cursor: pointer;
}
#Nameid-button:hover{
  color: thistle;
  background-color: #611f72;
  text-align = center;
}
#search-button {
  background-color:#611f72 ;
  color: white;
  padding: 12px 0px;
  border: none;
  cursor: pointer;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 12px;
}
#search-button:hover{
  background-color:thistle ;
}

.btn {
  background-color: transparent;
  border: none;
  color: purple;
  padding: 10px 15px;
  font-size: 30px;
  cursor: cursor;
}
.btn-right{
  float:right;
  background-color: transparent;
  border: none;
  color: purple;
  padding: 3px 3px;
  font-size: 26px;
  cursor: cursor;
  border: 2px solid black;
  border-color : purple;
}
/* Darker background on mouse-over */
.btn:hover {
  background-color: purple;
  color: white;
}
.btn-right:hover {
  background-color: purple;
  color: white;
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
	

	<div class="sidenav">
		<form action="" method = "post">
		<a href="#Class1"><input type="submit" id = "classes-button" Name = "choice" value="CLASS 1" /></a>
		<a href="#Class2"><input type="submit" id = "classes-button" Name = "choice" value="CLASS 2"/></a>
		<a href="#Class3"><input type="submit" id = "classes-button" Name = "choice" value="CLASS 3"/></a>
		<a href="#Class4"><input type="submit" id = "classes-button" Name = "choice" value="CLASS 4"/></a>
		<a href="#Class5"><input type="submit" id = "classes-button" Name = "choice" value="CLASS 5"/></a>
		<a href="#Class6"><input type="submit" id = "classes-button" Name = "choice" value="CLASS 6"/></a>
		</form>
	</div>
	<div class="bg-contact2" style="background-image: url('bgnew.jpg')">
	<div class="main" >
		<form action="" method = "get"> 
			 <h3>Enter Student Information: <input type="text2" Name="stdid"/>
				<select Name = "srch">
				<option value = "id"> ID </option>
				<option	value = "Name"> Name </option>
				</select>
			</h3>
			<button Name = "actionn1" type = "submit" class="btn"><i class="fa fa-search"></i></button>
			<a href = "edit.php"  type = "submit" class="btn"><i class="fa fa-edit"></i></a>
			<button Name = "actionn4" type = "submit" class="btn"><i class="fa fa-trash"></i></button>
			<right><a href = "enroll.php" type = "submit" class="btn-right"><i class="fa fa-plus"> [ADD] </i></a></right>
		<form>
	</div>
	</div>
	</body>
	
<?php
	// 		$db_sid = "(DESCRIPTION =
	// 	(ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-MR66B9O)(PORT = 1521))
	// 	(CONNECT_DATA =
	// 	  (SERVER = DEDICATED)
	// 	  (SERVICE_Name = orcl)
	// 	)
	//   )";

	  $con = mysqli_connect("localhost", "root", "", "hamaraybachay"); 

	  if($con) 
				{ } 
			else 
				{ die('Could not connect to Database: '); } 
			
		if(isset($_POST["choice"])){
			echo "<br>";
			$choice = $_POST["choice"];
			if($choice == 'CLASS 1'){
					$choice = 1;
			}
			else if($choice == 'CLASS 2'){
					$choice = 2;
			}
			else if($choice == 'CLASS 3'){
					$choice = 3;
			}
			else if($choice == 'CLASS 4'){
					$choice = 4;
			}
			else if($choice == 'CLASS 5'){
					$choice = 5;
			}
			else if($choice == 'CLASS 6'){
					$choice = 6;
			}
				
			$q = "select COUNT(Enrolled) as C from Enrollment_History 
					where enrolled = 1 and class_id=".$choice;
					$query_id = mysqli_query($con, $q);
					//$runselect = mysqli_stmt_execute($query_id);
					$arr= mysqli_fetch_array($query_id);
			$totalst = $arr[0];
			$q = "select COUNT(Gender) as C from Enrollment_History h , student s
					where enrolled = 1 and Gender = 'M' and s.Student_ID = h.Student_ID and class_id=".$choice;
					$query_id = mysqli_query($con, $q);
					//$runselect = mysqli_stmt_execute($query_id);
					$arr= mysqli_fetch_array($query_id);
			$totalboys = $arr[0];
			$q = "select COUNT(Gender) as C from Enrollment_History h , student s
					where enrolled = 1 and Gender = 'F' and s.Student_ID = h.Student_ID and class_id=".$choice;
					$query_id = mysqli_query($con, $q);
					//$runselect = mysqli_stmt_execute($query_id);
					$arr= mysqli_fetch_array($query_id);
			$totalgirls = $arr[0];
			echo '<div style="font-size:25px ;color:purple ; text-decoration: underline #611f72"> GENERAL STATISTICS </div>';
			echo "<font size='4.5' face='Sans Serif' color = 'silver'>";
			echo "TOTAL STUDENTS IN CLASS:&nbsp&nbsp".$totalst."<br>";
			echo "TOTAL BOYS IN CLASS:&nbsp&nbsp".$totalboys."<br>";
			echo "TOTAL GIRLS IN CLASS:&nbsp&nbsp".$totalgirls."<br>";
			?>
			<hr><br><br>
			<?php	
				//SECTION BL-G ---->
				$q = "select COUNT(Enrolled) as C from Enrollment_History 
					where section_id = 'BL-G' and enrolled = 1 and class_id=".$choice;
					$query_id = mysqli_query($con, $q);
					//$runselect = mysqli_stmt_execute($query_id);
					$arr= mysqli_fetch_array($query_id);
				
				echo '<div style="font-size:30px ;color:#611f72 ; text-decoration: underline #611f72">CLASS '.$choice.' [BL-G]:   '.$arr[0].' </div>';
				if($arr[0] != 0){
				$q= "select s.Student_ID, s.Name, s.Gender, round(TIMESTAMPDIFF(MONTH, curdate(), s.DOB)/12,1) from Student s, Enrollment_History e
					where e.Student_ID = s.Student_ID and e.enrolled = 1 and e.section_id = 'BL-G' and e.class_id= " .$choice;
				$query_id = mysqli_query($con, $q);
				//$runselect = mysqli_stmt_execute($query_id);
				echo "<br>";
				
				while($arr= mysqli_fetch_array($query_id)){
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "STUDENT ID:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[0];
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "&nbsp&nbsp&nbsp&nbspName:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[1];
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "&nbsp&nbsp&nbsp&nbspGender:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[2];
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "&nbsp&nbsp&nbsp&nbspAGE:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[3];
					echo "<br>";
				}
				}
				else { 
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "<br>--------------- NO STUDENTS IN THE SECTION ---------------<br> ";
				}
				echo "<br>";
				
				//SECTION GR-B ---->
				$q = "select COUNT(Enrolled) as C from Enrollment_History 
					where section_id = 'GR-B' and enrolled = 1 and class_id=".$choice;
				$query_id = mysqli_query($con, $q);
				//$runselect = mysqli_stmt_execute($query_id);
				$arr= mysqli_fetch_array($query_id);
				
				echo '<div style="font-size:30px ;color:#611f72 ; text-decoration: underline #611f72">CLASS '.$choice.' [GR-B]:   '.$arr[0].' </div>';
				if($arr[0] != 0){
				$q= "select s.Student_ID, s.Name, s.Gender, round(TIMESTAMPDIFF(MONTH, curdate(), s.DOB)/12,2) from Student s, Enrollment_History e
					where e.Student_ID = s.Student_ID and e.enrolled = 1 and e.section_id = 'GR-B' and e.class_id= " .$choice;
				$query_id = mysqli_query($con, $q);
				//$runselect = mysqli_stmt_execute($query_id);
				echo "<br>";
				
				while($arr= mysqli_fetch_array($query_id)){
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "STUDENT ID:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[0];
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "&nbsp&nbsp&nbsp&nbspName:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[1];
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "&nbsp&nbsp&nbsp&nbspGender:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[2];
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "&nbsp&nbsp&nbsp&nbspAGE:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[3];
					echo "<br>";
				}
				}
				else { 
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "<br>--------------- NO STUDENTS IN THE SECTION ---------------<br> ";
				}
				echo "<br>";
				
				//SECTION YW-G ---->
				$q = "select COUNT(Enrolled) as C from Enrollment_History 
					where section_id = 'YW-G' and enrolled = 1 and class_id=".$choice;
				$query_id = mysqli_query($con, $q);
				//$runselect = mysqli_stmt_execute($query_id);
				$arr= mysqli_fetch_array($query_id);
				
				echo '<div style="font-size:30px ;color:#611f72 ; text-decoration: underline #611f72">CLASS '.$choice.' [YW-G]:   '.$arr[0].' </div>';
				if($arr[0] != 0){
				$q= "select s.Student_ID, s.Name, s.Gender, round(TIMESTAMPDIFF(MONTH, curdate(), s.DOB)/12,2) from Student s, Enrollment_History e
					where e.Student_ID = s.Student_ID and e.enrolled = 1 and e.section_id = 'YW-G' and e.class_id= " .$choice;
				$query_id = mysqli_query($con, $q);
				//$runselect = mysqli_stmt_execute($query_id);
				echo "<br>";
				
				while($arr= mysqli_fetch_array($query_id)){
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "STUDENT ID:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[0];
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "&nbsp&nbsp&nbsp&nbspName:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[1];
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "&nbsp&nbsp&nbsp&nbspGender:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[2];
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "&nbsp&nbsp&nbsp&nbspAGE:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[3];
					echo "<br>";
				}
				}
				else { 
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "<br>--------------- NO STUDENTS IN THE SECTION --------------- <br>";
				}
				echo "<br>";
				
				//SECTION YW-B ---->
				$q = "select COUNT(Enrolled) as C from Enrollment_History 
					where section_id = 'YW-B' and enrolled = 1 and class_id=".$choice;
				$query_id = mysqli_query($con, $q);
				//$runselect = mysqli_stmt_execute($query_id);
				$arr= mysqli_fetch_array($query_id);
				
				echo '<div style="font-size:30px ;color:#611f72 ; text-decoration: underline #611f72">CLASS '.$choice.' [YW-B]:   '.$arr[0].' </div>';
				if($arr[0] != 0){
				$q= "select s.Student_ID, s.Name, s.Gender, round(TIMESTAMPDIFF(MONTH, curdate(), s.DOB)/12,2) from Student s, Enrollment_History e
					where e.Student_ID = s.Student_ID and e.enrolled = 1 and e.section_id = 'YW-B' and e.class_id= " .$choice;
				$query_id = mysqli_query($con, $q);
				//$runselect = mysqli_stmt_execute($query_id);
				echo "<br>";
				
				while($arr= mysqli_fetch_array($query_id)){
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "STUDENT ID:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[0];
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "&nbsp&nbsp&nbsp&nbspName:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[1];
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "&nbsp&nbsp&nbsp&nbspGender:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[2];
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "&nbsp&nbsp&nbsp&nbspAGE:&nbsp&nbsp";
					echo "<font size='5' face='Sans Serif' color = 'dimgrey'>";
					echo $arr[3];
					echo "<br>";
				}
				}
				else { 
					echo "<font size='5' face='Sans Serif' color = 'silver'>";
					echo "<br>--------------- NO STUDENTS IN THE SECTION ---------------<br> ";
				}
				echo "<br>";
		}
		if(isset($_GET["actionn1"])){
				echo "<br>";
				$srch = $_GET["srch"];
				$std_id = $_GET["stdid"]; 
				if($srch == "id"){
					$q = " select Student_ID, Name, Gender, round(TIMSETAMPDIFF(MONTH, curdate(), DOB)/12,1)age from student where Student_ID ='".$std_id."'";
				}
				else if($srch == "Name"){
					$q = " select Student_ID, Name, Gender, round(TIMESTAMPDIFF(MONTH, curdate(), DOB)/12,1)age from student where Name ='".$std_id."'";	
				}
				$query_id = mysqli_query($con, $q);
				//$r = mysqli_stmt_execute($query_id); 
				$row = mysqli_fetch_array($query_id);
				if($row){
					echo '<div style="font-size:30px ;color:purple ; text-decoration: underline purple">RESULTS:<br> </div>';
					echo "<font size='4' face='Arial' color = 'purple'>";
					echo "Student_ID: ".$row['Student_ID']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbspName: ".$row['Name'];
					echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGender: ".$row['Gender']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAge: ".$row['age'];
					echo "<br>";
				}
				else{
					echo '<div style="font-size:30px ;color:purple ; text-decoration: underline purple">RESULTS:<br> </div>';
					echo "<font size='4' face='Arial' color = 'dimgrey'>";
					echo "NO STUDENTS FOUND<br>";
				}
		}
		if(isset($_GET["actionn4"])){
				echo "<br>";
				$srch = $_GET["srch"];
				$std_id = $_GET["stdid"]; 
				if($srch == "id"){
					$q = "update enrollment_history 
								set enrolled = 0 where Student_ID ='".$std_id."'";
				}
				else if($srch == "Name")
				{
					$q = " update enrollment_history 
								set enrolled = 0 where Name ='".$std_id."'";	
				}
				$query_id = mysqli_query($con, $q);
				//$r = mysqli_stmt_execute($query_id); 
				if($query_id)
				{
					echo "<font size='5' face='Arial' color = 'dimgrey'>";
					echo "<br>&nbspSTUDENT HAS BEEN SUCCESSFULLY REMOVED FROM CLASS";
				}
				else{
					echo '<script>alert("ERROR :: STUDENT COULD NOT BE REMOVED")</script>';
				}
		}
		
?>
</html>