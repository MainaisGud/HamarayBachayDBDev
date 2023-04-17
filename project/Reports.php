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
			<a href="Std_Admission.php">student Admission Form</a>
			<a href="Std_Acc_Form.php">student Accompanying Form</a>
			<a href="Assignment_Form.php">Class Assignment Form</a>
			<a href="available_courses.php">Available Courses</a>
			<a href="Update_Info.php">Update Information</a>
			</div>
		</div> 
		<!-- <a href="student.html"><p class="impact">Students</p></a> -->
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
	</body>
	<form action="" method="POST" >
	<div class="form-style-10">
	<h1>Report 1: &nbsp&nbsp&nbsp <span>Enter the Class to see all students currently enrolled in it</span></h1>
        <div class="inner-wrap">
			<table>
			<tr>
			<label>Enter Class <input type="text" name="classchosen" /></label>
			</tr>
			</table>
		</div>
	</div>
	<div class="button-section" align=center>
     <input type="submit" name="report1" value="Search"/>
    </div>
	</form>
	<?php
	if(isset($_POST["report1"])){
			$classchosen = $_POST["classchosen"];

			$con = mysqli_connect("localhost", "root", "", "hamaraybachay"); 

			if($con) 
				{ } 
			else 
				{ die('Could not connect to mySQL: '); } 

					$q= "select s.Student_ID, s.Name, s.Gender, round(TIMESTAMPDIFF(MONTH, curdate(), s.DOB)/12,2), e.Section_ID, e.Enrollment_Date from student s, enrollment_history e
					where e.Student_ID = s.Student_ID and e.Enrolled = 1 and e.Class_ID= '".$classchosen."'";		
				$query_id = mysqli_query($con, $q);
				echo "<br>";
				
				while($arr= mysqli_fetch_array($query_id)){
					echo "STUDENT ID:&nbsp&nbsp";
					echo $arr[0];
					echo "&nbsp&nbsp&nbsp&nbspNAME:&nbsp&nbsp";
					echo $arr[1];
					echo "&nbsp&nbsp&nbsp&nbspGENDER:&nbsp&nbsp";
					echo $arr[2];
					echo "&nbsp&nbsp&nbsp&nbspAGE:&nbsp&nbsp";
					echo $arr[3];
					echo "&nbsp&nbsp&nbsp&nbspSECTION:&nbsp&nbsp";
					echo $arr[4];
					echo "&nbsp&nbsp&nbsp&nbspENROLLMENT DATE:&nbsp&nbsp";
					echo $arr[5];
					echo "<br>";
				}
	}
	?>
	<br>
	<hr>
	<br>
	<form action="" method="POST" >
	<div class="form-style-10">
	<h1>Report 2: &nbsp&nbsp&nbsp <span>Enter Class to view general statistics of it</span></h1>
    <div><p class="monospace"><b>List Of Classes</b></p></div>
        <div class="inner-wrap">
			<table>
			<tr>
			<label>Enter Class <input type="text" name="classchosen" /></label>
			</tr>
			</table>
		</div>
	</div>
	<div class="button-section" align=center>
     <input type="submit" name="report2" value="Search"/>
    </div>
	</form>
	<?php
	if(isset($_POST["report2"])){
		$classchosen = $_POST["classchosen"];

	  $con = mysqli_connect("localhost", "root", "", "hamaraybachay"); 
	  if($con) 
				{ } 
		else 
			{ die('Could not connect to mySQL: '); } 
		$qr2 = "select count(case when UPPER(gender) = 'M' THEN 1 END) Male,
				count(case when UPPER(gender) = 'F' THEN 1 END) Female,
				count(s.student_id) as total from student s, enrollment_history h
				where s.student_id = h.student_id and h.enrolled = 1 and h.class_id = '".$classchosen."'";
		$query_idr2 = mysqli_query($con, $qr2);
		echo "<br>";
				
		while($arr2= mysqli_fetch_array($query_idr2)){
				
			if(isset($arr2))
			{
				echo "MALE STUDENTS: ".$arr2[0];
				echo "<br>FEMALE STUDENTS: ".$arr2[1];
				echo "<br>TOTAL STUDENTS: ".$arr2[2];
			}
			else 
				echo "error";
		}
	}
	?>
	<br>
	<hr>
	<br>
	<form action="" method="POST" >
	<div class="form-style-10">
	<h1>Report 3: &nbsp&nbsp&nbsp <span>Enter Search Information in One of the Following Boxes</span></h1>
    <div><p class="monospace"><b>List Of Dormant Students</b></p></div>
        <div class="inner-wrap">
			<table>
			<tr>
			<label>Enter Months <input type="text" name="MONTHS" /></label>
			<label>Enter Years <input type="text" name="YEARS" /></label>
			</tr>
			</table>
		</div>
	</div>
	<div class="button-section" align=center>
     <input type="submit" name="Display" value="Search"/>
    </div>
	</form>
	<?php
	if(isset($_POST["Display"])){
		echo "<br>"; 
		echo "List of the Dormant Students ";
		$months = $_POST["MONTHS"];
		$years = $_POST["YEARS"];

	$con = mysqli_connect("localhost", "root", "", "hamaraybachay"); 

	if($con) 
			{ } 
		else 
			{ die('Could not connect to mySQL '); }   
		$get_date = date("%Y-%m-%d");
		$space = "		";
		$q = "Alter session set DATE_FORMAT('%Y-%m-%d')";
		$query_id = mysqli_query($con, $q); 		
		if($months > 0){
				$q2 = "select * FROM enrollment_history WHERE TIMESTAMPDIFF(MONTH,STR_TO_DATE('".$get_date."' , '%Y-%m-%d') ,Enrollment_Date) >".$months ;
				$query_id2 = mysqli_query($con, $q2); 		
				$row = mysqli_fetch_array($query_id2);	
				echo "<br>";
				while($row = mysqli_fetch_array($query_id2))  {				
						if($query_id2)
						{
							echo "<b>student ID:</b>" .$row['Student_ID'], $space , "<b>course ID:</b>".$row['Course_ID'] ,
							$space, "<b>Class ID:</b>".$row['Class_ID'], $space,"<b>Section ID:</b>".$row['Section_ID'], $space,"<b>Challan No: </b>".$row['Fee_Challan'],
							$space,"<b>Enrollment Date:</b>".$row['Enrollment_Date']."<br>";
						}
					}
			}
		
		else if ($years > 0){
			$q3 = "select * FROM enrollment_history WHERE TIMESTAMPDIFF(MONTH,'".$get_date."',Enrollment_Date) / 12 >".$years ;
				$query_id3 = mysqli_query($con, $q3); 		
				$row1 = mysqli_fetch_array($query_id3);	
				echo "<br>";
				while($row1 = mysqli_fetch_array($query_id3))  {				
						if($query_id3){
							echo "<b>student ID:</b>" .$row1['Student_ID'], $space , "<b>course ID:</b>".$row1['Course_ID'] ,
									$space, "<b>Class ID:</b>".$row1['Class_ID'], $space,"<b>Section ID:</b>".$row1['Section_ID'], $space,"<b>Challan No: </b>".$row1['Fee_Challan'],
									$space,"<b>Enrollment Date:</b>".$row1['Enrollment_Date']."<br>";}		
					}
		}
		else 
		{
				echo '<script> alert("Error In Search") </script>';
		}
	}
	  ?>
	  
	<br>
	<hr>
	<br>
	<form action="" method="POST" >
	<div class="form-style-10">
	<h1>Report 4: &nbsp&nbsp&nbsp <span>Enter Search Information in One of the Following Boxes</span></h1>
    <div><p class="monospace"><b>All Info Of Given student</b></p></div>
        <div class="inner-wrap">
			<table>
			<tr>
			<label>student ID <input type="text" name="std_id" /></label>
			<label>student Name <input type="text" name="std_name" /></label>
			</tr>
			</table>
		</div>
	</div>
	<div class="button-section" align=center>
     <input type="submit" name="report4" value="Search"/>
    </div>
	</form>
	<?php

	$con = mysqli_connect("localhost", "root", "", "hamaraybachay"); 

	  if($con) 
			{ } 
		else 
			{ die('Could not connect to mySQL '); 
			$e = mysqli_error($query_id);  
			echo $e['message'];	
		}
		if(isset($_POST["report4"])){
			if(!empty($_POST["std_id"])){
				$qm="Select m.F_Name as Mother_Name,m.Mother_ID as Mother_ID from mother m, m_child_of mc
					where mc.Student_ID = '".$_POST["std_id"]."' and 
					mc.Mother_ID=m.Mother_ID and mc.CURRENT_=1";
				$qrym=mysqli_query($con,$qm);
				
				$qf="Select m.Father_Name as Father_Name,m.Father_ID as Father_ID  from Father m, f_child_of mc
				where mc.Student_ID = '".$_POST["std_id"]."' and mc.Father_ID=m.Father_ID and mc.CURRENT_=1";
				$qryf=mysqli_query($con,$qf);
				
				$qg="Select G.Name as Guardian_Name, G.Guardian_ID as Guardian_ID from Guardian G, responsible_for R, student S
				where S.Student_ID='".$_POST["std_id"]."' and S.Student_ID=R.Student_ID and R.Guardian_ID=G.Guardian_ID and R.CURRENT_=1";
				$qryg=mysqli_query($con,$qg);
				
				$qs= "select S1.Name ,S1.Student_ID from m_child_of
					left outer join student S1
					on S1.Student_ID = m_child_of.Student_ID
					where m_child_of.Mother_ID = (
						select m_child_of.Mother_ID from m_child_of,student S2
						where S2.Student_ID='".$_POST["std_id"]."' and
						 m_child_of.Student_ID=S2.Student_ID and
						 m_child_of.CURRENT_=1) and m_child_of.CURRENT_=1 and  S1.Student_ID <> '".$_POST["std_id"]."'
					AND EXISTS
				(select S3.Name, S3.Student_ID from f_child_of
					left outer join student S3
					on S3.Student_ID=f_child_of.Student_ID
					where f_child_of.Father_ID= (
						select f_child_of.Father_ID from f_child_of,student S4
						where S4.Student_ID='".$_POST["std_id"]."' and
						 f_child_of.Student_ID=S4.Student_ID and
						 f_child_of.CURRENT_=1)
						 and f_child_of.CURRENT_=1 and S3.Student_ID <> '".$_POST["std_id"]."')";
				$qrys=mysqli_query($con,$qs);
				
				$qc="select s.name ,e.course_id, c.course_title, e.enrollment_date from	
				student s, enrollment_history e, course c 
				where s.student_Id='".$_POST["std_id"]."' and s.Student_ID=e.Student_ID
					and e.course_id=c.course_id";
				$qryc=mysqli_query($con,$qc);
				/*Echo mother Info:*/
				echo "<br><b>mother Information: </b><br>";
				while($arr_m= mysqli_fetch_array($qrym)){
					echo "mother Name: ".$arr_m[0]." Mother_ID: ".$arr_m[1]." " ;
				}
				echo "<br><b> Father Information: </b><br>";
				while($arr_f= mysqli_fetch_array($qryf)){
					echo "Father Name:".$arr_f[0]." Father_ID: ".$arr_f[1]." " ;
				}
				echo "<br><b>Guardian Information: </b><br>";
				while($arr_g= mysqli_fetch_array($qryg)){
					echo "Guardian Name:".$arr_g[0]." Guardian_ID: ".$arr_g[1]." " ;
				}
				echo "<br><b>Siblings: </b><br>";
				while($arr_s= mysqli_fetch_array($qrys)){
					echo "Student Name:".$arr_s[0]." Student_ID: ".$arr_s[1]." " ;
					echo "<br>";
				}
				echo "<br><b>Class History: </b><br>";
				while($arr_c= mysqli_fetch_array($qryc)){
					echo "Student Name:".$arr_c[0]." Course_ID: ".$arr_c[1]." Course Title: ".$arr_c[2]." Course Date: ".$arr_c[3]." " ;
					echo "<br>";
				}	
			}
			else if(!empty($_POST["std_name"])){
				$qm="Select m.F_Name as Mother_Name,m.Mother_ID as Mother_ID from mother m, m_child_of mc
					where mc.Mother_ID=m.Mother_ID and mc.CURRENT_=1 and mc.Student_ID=(
						Select s.Student_ID from student s where 
						s.Name = '".$_POST["std_name"]."'
					)";
				$qrym=mysqli_query($con,$qm);
				
				$qf="Select m.Father_Name as Father_Name,m.Father_ID as Father_ID from Father m, f_child_of mc
					where mc.Father_ID=m.Father_ID and mc.CURRENT_=1 and mc.Student_ID=(
						Select s.Student_ID from student s where 
						s.Name = '".$_POST["std_name"]."'
					)";
				$qryf=mysqli_query($con,$qf);
				
				$qg="Select G.Name as Guardian_Name, G.Guardian_ID as Guardian_ID from Guardian G, responsible_for R, student S
				where S.Name='".$_POST["std_name"]."' and S.Student_ID=R.Student_ID and R.Guardian_ID=G.Guardian_ID and R.CURRENT_=1";
				$qryg=mysqli_query($con,$qg);
				
				$qs="(select S1.Name ,S1.Student_ID from m_child_of
					left outer join student S1
					on S1.Student_ID = m_child_of.Student_ID
					where m_child_of.Mother_ID = (
						select m_child_of.Mother_ID from m_child_of,student S2
						where S2.name='".$_POST["std_name"]."' and
						 m_child_of.Student_ID=S2.Student_ID and
						 m_child_of.CURRENT_=1
					) and m_child_of.CURRENT_=1 and  S1.name <> '".$_POST["std_name"]."'
				)
				intersect
				(select S3.Name, S3.Student_ID from f_child_of
					left outer join student S3
					on S3.Student_ID=f_child_of.Student_ID
					where f_child_of.Father_ID= (
						select f_child_of.Father_ID from f_child_of,student S4
						where S4.name='".$_POST["std_name"]."' and
						 f_child_of.Student_ID=S4.Student_ID and
						 f_child_of.CURRENT_=1
					)and f_child_of.CURRENT_=1 and  S3.name <> '".$_POST["std_name"]."'
				)";
				$qrys=mysqli_query($con,$qs);
				
				$qc="select s.name ,e.course_id, c.course_title, e.enrollment_date from	
				student s, enrollment_history e, course c 
				where s.name='".$_POST["std_name"]."' and s.Student_ID=e.Student_ID
					and e.course_id=c.course_id";
				$qryc=mysqli_query($con,$qc);
				/*Echo mother Info:*/
				echo "<br><b>mother Information: </b><br>";
				while($arr_m= mysqli_fetch_array($qrym)){
					echo "Mother Name: ".$arr_m[0]." Mother_ID: ".$arr_m[1]." " ;
				}
				echo "<br><b> Father Information: </b><br>";
				while($arr_f= mysqli_fetch_array($qryf)){
					echo "Father Name:".$arr_f[0]." Father_ID: ".$arr_f[1]." " ;
				}
				echo "<br><b>Guardian Information: </b><br>";
				while($arr_g= mysqli_fetch_array($qryg)){
					echo "Guardian Name:".$arr_g[0]." Guardian_ID: ".$arr_g[1]." " ;
				}
				echo "<br><b>Siblings: </b><br>";
				while($arr_s= mysqli_fetch_array($qrys)){
					echo "Student Name:".$arr_s[0]." Student_ID: ".$arr_s[1]." " ;
					echo "<br>";
				}
				echo "<br><b>Class History: </b><br>";
				while($arr_c= mysqli_fetch_array($qryc)){
					echo "Student Name:".$arr_c[0]." Course_ID: ".$arr_c[1]." Course Title: ".$arr_c[2]." Course Date: ".$arr_c[3]." " ;
					echo "<br>";
				}	
			}
			else{
				echo '<script> alert("Error In Search") </script>';
			}
		}
	?>
	
	<br>
	<hr>
	<br>
	<form action="" method="POST" >
	<div class="form-style-10">
	<h1>Report 5: &nbsp&nbsp&nbsp <span>Enter Search Information in One of the Following Boxes</span></h1>
    <div><p class="monospace"><b>All Info of Given Parent</b></p></div>
        <div class="inner-wrap">
			<table>
			<tr>
			<label>mother ID <input type="text" name="m_id" /></label>
			<label>mother Name <input type="text" name="m_name" /></label>
			<label>Father ID <input type="text" name="f_id" /></label>
			<label>Father Name <input type="text" name="f_name" /></label>
			</tr>
			</table>
		</div>
	</div>
	<div class="button-section" align=center>
     <input type="submit" name="report5" value="Search"/>
    </div>
	</form>
	<?php


	  $con = mysqli_connect("localhost", "root", "", "hamaraybachay"); 

	  if($con) 
			{ } 
		else 
			{ die('Could not connect to mySQL '); 
			$e = mysqli_error($query_id);  
			echo $e['message'];
		}
		if(isset($_POST["report5"])){
			if(!empty($_POST["m_id"])){
				$q="select m_child_of.Student_ID, S2.name, E.Class_ID, G.Name as Guardian_Name,G.Guardian_ID  from m_child_of,
				student S2, mother M,enrollment_history E, responsible_for R, Guardian G
				where M.Mother_ID='".$_POST["m_id"]."' and
				 m_child_of.Student_ID=S2.Student_ID and
				 m_child_of.CURRENT_=1 and M.Mother_ID= m_child_of.Mother_ID
				 and E.Student_ID=S2.Student_ID and E.enrolled=1 and 
				 R.Student_ID=S2.Student_ID and G.Guardian_ID=R.Guardian_ID
				 and R.Current_=1";
		
				 $qry=mysqli_query($con,$q);
				while($arr= mysqli_fetch_array($qry)){
					echo "Student ID: ".$arr[0]." Student Name: ".$arr[1]."
					Class ID: ".$arr[2]." Guardian Name: ".$arr[3]." Guardian ID:
					".$arr[4]." " ;
					echo "<br>";
				}
			 
			}
			else if(!empty($_POST["m_name"])){
				$q="select m_child_of.Student_ID, S2.name, E.Class_ID, G.Name as Guardian_Name,G.Guardian_ID  from m_child_of,
				student S2, mother M,enrollment_history E, responsible_for R, Guardian G
				where M.F_name='".$_POST["m_name"]."' and
				m_child_of.Student_ID=S2.Student_ID and
				m_child_of.CURRENT_=1 and M.Mother_ID= m_child_of.Mother_ID
				and E.Student_ID=S2.Student_ID and E.enrolled=1 and 
				R.Student_ID=S2.Student_ID and G.Guardian_ID=R.Guardian_ID
				and R.Current_=1";
				 $qry=mysqli_query($con,$q);
				while($arr= mysqli_fetch_array($qry)){
					echo "student ID: ".$arr[0]." student Name: ".$arr[1]."
					Class ID: ".$arr[2]." Guardian Name: ".$arr[3]." Guardian ID:
					".$arr[4]." " ;
					echo "<br>";
				}
			}
			else if(!empty($_POST["f_id"])){
				$q="select f_child_of.Student_ID, S2.name, E.Class_ID, G.Name as Guardian_Name,G.Guardian_ID  from f_child_of,
				student S2, Father F,enrollment_history E, responsible_for R, Guardian G
				where F.Father_ID='".$_POST["f_id"]."' and
				 f_child_of.Student_ID=S2.Student_ID and
				 f_child_of.CURRENT_=1 and F.Father_Id= f_child_of.Father_Id
				 and E.Student_ID=S2.Student_ID and E.enrolled=1 and 
				 R.Student_ID=S2.Student_ID and G.Guardian_ID=R.Guardian_ID
				 and R.Current_=1";
				 $qry=mysqli_query($con,$q);
				while($arr= mysqli_fetch_array($qry)){
					echo "student ID: ".$arr[0]." student Name: ".$arr[1]."
					Class ID: ".$arr[2]." Guardian Name: ".$arr[3]." Guardian ID:
					".$arr[4]." " ;
					echo "<br>";
				}
			}
			else if(!empty($_POST["f_name"])){
				$q="select f_child_of.Student_ID, S2.name, E.Class_ID, G.Name as Guardian_Name,G.Guardian_ID  from f_child_of,
				student S2, Father F,enrollment_history E, responsible_for R, Guardian G
				where F.Father_Name='".$_POST["f_name"]."' and
				 f_child_of.Student_ID=S2.Student_ID and
				 f_child_of.CURRENT_=1 and F.Father_Id= f_child_of.Father_Id
				 and E.Student_ID=S2.Student_ID and E.enrolled=1 and 
				 R.Student_ID=S2.Student_ID and G.Guardian_ID=R.Guardian_ID
				 and R.Current_=1";
				 $qry=mysqli_query($con,$q);
				while($arr= mysqli_fetch_array($qry)){
					echo "student ID: ".$arr[0]." student Name: ".$arr[1]."
					Class ID: ".$arr[2]." Guardian Name: ".$arr[3]." Guardian ID:
					".$arr[4]." " ;
					echo "<br>";
				}
			}
			else{
				echo '<script> alert("Error In Search") </script>';
			}
		}
	?>
	<br><br><br><br><br>
</html>