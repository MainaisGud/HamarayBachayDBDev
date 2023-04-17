
<html>
<head>
	<title>Class Assignment Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  
</head>
<style>
 .sidenav {
	  height: 70%;
	  width: 20%;
	  position: fixed;
	  z-index: 1;
	  top: 20%;
	  left: 80%;
	  background-color: thistle;
	  padding-top: 20px;
	  padding-left: 20px;
	  padding-right: 15px;
	  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
	.dropdown {
	float:right;
	display: inline-block;
	color: black;
	text-align: center;
	padding: 40px;
	text-decoration: none;
	font-size: 17px;
	border-bottom: 2px solid transparent;
	color:#c7abc9;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:#c7abc9 ;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: #611f72;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #611f72;
}

.dropdown:hover .dropdown-content {
  display: block;
}
p.impact {
  font-family: Impact, Charcoal, sans-serif;
}
#navigation-bar {
    width: 100%; 
    height: 120px; 
    background-color: #892ca0; 
	transition: 0.7s;
	position: fixed;
	opacity: 1; 
    filter:(opacity=100);
}
#navigation-bar > a {
	float: right;
	display: inline-block;
	color: black;
	text-align: center;
	padding: 40px;
	text-decoration: none;
	font-size: 17px;
	border-bottom: 2px solid transparent;
	color:#c7abc9;
	z-index: 9;
}
#navigation-bar a:hover {
	color:#fae2a5 !important;
	line-height: 0.2;
	border-bottom: 3px solid #fae2a5;
	padding: 35px;
	color: black;
	  
}

#navigation-bar a.active {
	line-height: 0.2;
	border-bottom: 3px solid #fae2a5;
	padding: 35px;
	color: white;
}
</style>
<body>
<div class="sidenav">
		<span> HUMARAY BACHCHAY  </span>
		<a href="Home.html"><p class="impact">Get in Touch</p></a>
		<div class="dropdown">
			<p class="impact" style="color:blue">Parents/Guardians</p>
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
</div> 
  <div class="cont">
    <div class="form sign-in">
      <h2>Class Assignment Form</h2>
      <label>
        <span>CLICK ON CHANGE TO FILL INFORMATION</span>
      </label>

      <div class="social-media">
        <ul>
          <li><img src="wave.gif"></li>
        </ul>
      </div>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Change Section?</h2>
          <p>Click on change and fill in your information!</p>
        </div>
        <div class="img-text m-in">
          <h2>Great!</h2>
          <p>Now just fill in this form!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">CHANGE</span>
          <span class="m-in">CHANGE</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Fill Up</h2>
		<form action="Assignment_Form.php" method="POST"> 
        <label>
          <span>Student ID</span>
          <input type="text" name="Student_ID">
        </label>
        <label>
          <span>Current Section</span>
          <input type="text" name="Old_Section">
        </label>
        <label>
          <span>New Section</span>
          <input type="text" name="New_Section">
        </label>
        <label>
          <span>Reason For Change</span>
          <input type="text" name="reason">
        </label>
		<label>
          <span>Approved By</span>
          <input type="text" name="approved">
        </label>
        <button type="submit" class="submit" name="save">Save</button>
		  </form>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="script.js"></script>
</body>
<?php  // creating a database connection 
	$St_ID = isset($_POST['Student_ID']) ? $_POST['Student_ID'] : '';
	$New = isset($_POST['New_Section']) ? $_POST['New_Section'] : '';
	$old = isset($_POST['Old_Section']) ? $_POST['Old_Section'] : '';
	$reason =isset($_POST['reason']) ? $_POST['reason'] : '';
	$approved = isset($_POST['approved']) ? $_POST['approved'] : '';
	$Date = date("d/m/Y");
	//$Challan = $_POST['Fee_Challan'];
    $servername = "localhost";
	$username = "root";
	$password = "";
	$con = new mysqli($servername, $username, $password, "hamaraybachay");
   if($con) 
      {  } 
   else 
      { die('Could not connect to database: '); } 
     // Insertion  in the emp Table
	 if(isset($_POST["save"])){
			$q1="select Fee_Challan from enrollment_history where Student_ID ='".$St_ID."'";
			$query_id1 = mysqli_query($con, $q1); 		
			//$r1 = mysqli_stmt_execute($query_id1); 
			$row = mysqli_fetch_array($query_id1);
			$Challan = $row["Fee_Challan"];
			if($query_id1){
					$q="insert into section_change values('".$Challan."',current_date(),'".$old."','".$reason."','".$approved."')";
					$query_id = mysqli_query($con, $q); 		
				//	$r = mysqli_stmt_execute($query_id); 
					if($query_id)
					{
						$q2 = "Select * from section_change where fee_challan ='".$Challan."'";
						$query_id2 = mysqli_query($con, $q2); 		
				//		$r2 = mysqli_stmt_execute($query_id2);
						if($query_id2){}
						else {echo '<script>alert("ERROR::RECORD NOT INSERTED")</script>';}						
						$q3="update enrollment_history set Section_ID = '".$New."' where Fee_Challan = '".$Challan."'";
						$query_id3 = mysqli_query($con , $q3);
				//		$r3 = mysqli_stmt_execute($query_id3);
						if($query_id3)
						{
						echo '<script>alert("RECORD HAS BEEN SUCCESSFULLY INSERTED")</script>';
						}
						else {echo '<script>alert("ERROR::RECORD NOT INSERTED")</script>';}
					}	
					else
					{
						echo '<script>alert("ERROR::RECORD NOT INSERTED")</script>';
					}
			}
			else{
				echo '<script>alert("ERROR::RECORD NOT INSERTED")</script>';
			}
	}
?>


</html>