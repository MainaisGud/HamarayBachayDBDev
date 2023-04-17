<!DOCTYPE HTML>
<html>
	<head>
	<meta charset ="UTF-8">
	<title>Humaray Bachchay NGO</title>
	<link href="layout.css" rel='stylesheet' type='text/css'>
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
	<br><br><br><br><br><br><br><br><br>

	<form action="" method="post">
	<div class="form-style-10">

	<h1>Student Accompanying  Form<span>Please Enter The Following Information</span></h1>

	<div ><p class="monospace"><b>Students Information</b></p></div>
    <div class="inner-wrap">
	
		<table width="100%">
			<tr>
				<td>
					<label>Name <input type="text" name="std_name" /></label>
					<label>ID<input type="text" name="std_id" required /></p></label>
					<label>Class<input type="text" name="std_class" /></p></label>
				</td>
			</tr>
		</table>
    </div>

    <div><p class="monospace"><b>Accompanying Guardian Information</b></p></div>
    <div class="inner-wrap">
	<table width="100%">
	<tr>
		<td>
       			<label>Name <input type="text" name="g_name" /></label>
        		<label>ID <input type="text" name="g_id" required /></label>
		</td>
		
	</tr>
	<table width="50%">
	<tr>	
        <td>
			
			<label>Pregnant <p class="monospace"> YES </p></label>
			<input type="radio" id="yes" name="preg" value="1" />
		</td>
		<td>
			<label><p class="monospace"> NO </p></label>
			<input type="radio" id="no" name="preg" value="0" />
		</td>

	<tr>
	</table>
	
	<tr>
		<td><br>
				<label>Reason for Parents Absence:<p class="monospace"> </p></label>
				<input type="text" name="reason" required/>
			
		</td>
	</tr>
	</table>
    </div>


    <div class="button-section">
     <input type="submit" name="enter_acc" value="Submit Form"/>
    </div>
	</form>
	</div>
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
	<?php  
          

	  $con = mysqli_connect("localhost", "root", "", "hamaraybachay"); 

	  if($con){
			//Student Information was entered. 
			if(isset($_POST["enter_acc"]))
			{
				if(isset($_POST["std_id"]) && isset($_POST["g_id"]) && isset($_POST["reason"]) )
				{
					$std_id = $_POST["std_id"];
					$g_id = $_POST["g_id"];
					$q1 = "select * from responsible_for where Student_ID = '".$std_id."'" ;
					$query_id1 = mysqli_query($con, $q1);

					$s_arr1= mysqli_fetch_array($query_id1);
		
					if($s_arr1[0] != $std_id)
					{
						echo "<p style='text-align:center;' > RECORD NOT INSERTED.</p>" ;
						echo "<p style='text-align:center;' > Enter a valid Student ID. </p>" ;

						$q2 = "select * from responsible_for where Guardian_ID = '".$g_id."'";
						$query_id2 = mysqli_query($con, $q2);
						$s_arr2= mysqli_fetch_array($query_id2);
						
							if($s_arr2[0] != $g_id)
							{
								echo "<p style='text-align:center;' > Enter a valid Guardian ID. </p>" ;
								echo '<script>alert("ERROR::RECORD NOT INSERTED")</script>';
								exit() ;
							
							}
						
					}
					else
					{
						$q4 = "select * from responsible_for where Guardian_ID = '".$g_id."'";
						$query_id4 = mysqli_query($con, $q4);
						$s_arr4= mysqli_fetch_array($query_id4);

						
							if($s_arr4[1] != $g_id)
							{	
								echo "<p style='text-align:center;' > RECORD NOT INSERTED.</p>" ;
								echo "<p style='text-align:center;' > Enter a valid Guardian ID. </p>" ;
								echo '<script>alert("ERROR::RECORD NOT INSERTED")</script>';
								exit() ;
							
							}	
						
						
					}
						
						
					$q3 = "select * from responsible_for where Guardian_ID = '".$g_id."' and Student_ID = '".$std_id."' ";
					$query_id3 = mysqli_query($con, $q3);
					$s_arr3= mysqli_fetch_array($query_id3);
					
					
					if($s_arr3[0] != $std_id && $s_arr3[1] != $g_id)
					{
							echo "<p style='text-align:center;' > RECORD NOT INSERTED.</p>" ;
							echo "<p style='text-align:center;' >You are not the Guardian of this Student. Please Enter your own child ID </p>" ;
							echo '<script>alert("ERROR::RECORD NOT INSERTED")</script>';
							exit() ;
					
					}
					else if ($s_arr3[3] == 0)
					{
						echo "<p style='text-align:center;' > RECORD NOT INSERTED.</p>" ;
						echo "<p style='text-align:center;' > You are not the current Guardian of this Student </p>" ;
						echo '<script>alert("ERROR::RECORD NOT INSERTED")</script>';
						exit() ;
					}
					
					
					$std_name=$_POST["std_name"];
					$std_class = $_POST["std_class"];
					$preg = $_POST["preg"] ;
					$reason = $_POST["reason"];

					$q="insert into student_accompany_form(Acc_Form_No,Student_ID,Guardian_ID,Date_Of_Visit,Pregnant,Reason)
					values('AF1111','".$std_id."', '".$g_id."', CURRENT_DATE(), ".$preg.", '".$reason."' )" ;

					$query_id = mysqli_query($con, $q);
					
				}
					
			}
		}
		else{
			echo "RECORD NOT INSERTED";
			$e = mysqli_error($query_id);  
			echo $e['message'];	
			echo '<script>alert("ERROR::RECORD NOT INSERTED")</script>';
		}
	?>
</html>