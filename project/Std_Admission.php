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
	<br><br><br><br><br><br><br><br><br>
	<div class="sidenav">
		<br><br>
		<center><h3> INSTURUCTIONS </h3></center>
		<p class= "monospace"> 1. Input fields with an asterik (*) must be filled </p>
		<p class="monospace"> 2. If a Mother/Father has already registered with a 
		previous Student, enter CNIC No. only for Mother/Father </p>
		<p class= "monospace"> 3. A Student MUST have a Guardian (For Age <5 a Female Guardian)</p>
		<p class= "monospace"> 4. CNIC Format XXXXX-XXXXXXX-X </p>
		<p class= "monospace"> 5. Contact Format 03XX-XXXXXXX </p>
		<p class= "monospace"> 6. Date Format (dd/mm/yyyy) </p>
		<p class= "monospace"> 7. Income in Numbers </p>
	</div>
	<form action="" method="post">
	<div class="form-style-10">
	<h1>Student Admission Form<span>Please Enter The Following Information</span></h1>
    <div ><p class="monospace"><b>Students Information <span style="color:red">* </span></b> </p></div>
    <div class="inner-wrap">
		<label for="img"> Attach Image </label>
		<input type="file" id="img" name="img" accept="image/*">
        <label >Name <span style="color:red">* </span> <input type="text" name="std_name" /></label>
		<label>Date of Birth(dd/mm/yyyy) <span style="color:red">* </span><input type="text" name="dob" /></label>
		<label>CNIC(XXXXX-XXXXXXX-X) <span style="color:red">* </span><input type="text" name="std_cnic" /></label>
		<label>Address <span style="color:red">* </span><input type="text" name="std_add" /></label>
		<table width="50%">
		<tr>
		<td>
			<label><p class="monospace"> Male <span style="color:red">* </span> </p></label>
			<input type="radio" id="male" name="gender" value="M" />
		</td>
		<td>
			<label><p class="monospace"> Female <span style="color:red">* </span> </p></label>
			<input type="radio" id="female" name="gender" value="F" />
		</td>
		</table>
      <!--  <label>Address <textarea name="field2"></textarea></label> -->
    </div>

    <div><p class="monospace"><b>Parents Information</b></p></div>
    <div class="inner-wrap">
	<table width="100%">
	<tr>
		<td>
        <label>Mother Name <input type="text" name="m_name" /></label>
        <label>Mother Contact <input type="text" name="m_contact" /></label>
		<label>Mother CNIC <input type="text" name="m_cnic" /></label>
		<label>Mother Email <input type="text" name="m_email" /></label>
		<label>Mother Address <input type="text" name="m_address" /></label>
		<label>Mother Income <input type="number" name="m_income" /></label>
		</td>
		<td>
		<label>Father Name <input type="text" name="f_name" /></label>
        <label>Father Contact <input type="text" name="f_contact" /></label>
		<label>Father CNIC <input type="text" name="f_cnic" /></label>
		<label>Father Email <input type="text" name="f_email" /></label>
		<label>Father Address <input type="text" name="f_address" /></label>
		<label>Father Income <input type="number" name="f_income" /></label>
		</td>
	</tr>
	</table>	
    </div>
	<div><p class="monospace"><b>Guardians Information <span style="color:red">* </span> </b></p></div>
    <div class="inner-wrap">
	<table width="100%">
	<tr>
		<td>
        <label>Guardian Name <span style="color:red">* </span> <input type="text" name="g_name" /></label>
        <label>Guardian Contact <input type="text" name="g_contact" /></label>
		<label>Guardian CNIC <span style="color:red">* </span> <input type="text" name="g_cnic" /></label>
	
		<label>Guardian Address <input type="text" name="g_address" /></label>
		<label>Guardian Email <input type="text" name="g_email" /></label>
		<label>Relation <span style="color:red">* </span><input type="text" name="g_relation" /></label>
		<p class="monospace"> NOTE: The students less than the age of 5 MUST have a Female Guardian </p>
		<table width="50%">
		<tr>
		<td>
			<label><p class="monospace"> Male <span style="color:red">* </span></p></label>
			<input type="radio" id="male" name="g_gender" value="M" />
		</td>
		<td>
			<label><p class="monospace"> Female <span style="color:red">* </span></p></label>
			<input type="radio" id="female" name="g_gender" value="F" />
		</td>
		</table>
		</td>
	</tr>
	</table>	
	</div>
	<div class="button-section">
     <input type="submit" name="enroll" value="Enroll"/>
    </div>
	</form>
	<form action="" method="POST">
    <div><p class="monospace"><b>FOR STAFF ONLY</b></p></div>
        <div class="inner-wrap">
		<table>
		<tr>
		<label>Enter Student ID <span style="color:red">* </span><input type="text" name="fee_sid" /></label>
        <label>Fee Amount <span style="color:red">* </span><input type="text" name="fee_amount" /></label>
		<label>Discount <span style="color:red">* </span><input type="text" name="discount" /></label>
		<label>Fee Fully Paid <span style="color:red">* </span></label>
		<table width="50%">
		<tr>
		<td>
			<label><p class="monospace"> YES </p></label>
			<input type="radio" id="yes" name="feepaid" value="1" />
		</td>
		<td>
			<label><p class="monospace"> NO </p></label>
			<input type="radio" id="no" name="feepaid" value="0" />
		</td>
		</tr>
		</table>
		<label>Challan # <span style="color:red">* </span><input type="text" name="challan" /></label>
		<label>Due Date(yyyy-mm-dd) <span style="color:red">* </span><input type="text" name="fee_due_date" /></label>
		</tr>
		</table>
    </div>
    <div class="button-section">
     <input type="submit" name="enterstd" value="Confirm Payment"/>
    </div>
	</form>
		<?php 
     
	 $servername = "localhost";
	 $username = "root";
	 $password = "";
	 $con = new mysqli($servername, $username, $password, "hamaraybachay"); 
	   /*Alter Date session*/
					//$ses="ALTER session set NLS_DATE_FORMAT='DD/MM/YYYY'" ;
					//$sd=mysqli_query($con);
					//$shh=mysqli_stmt_execute($sd);
			if(isset($_POST["enterstd"])){
				if(!empty($_POST["fee_sid"]) and !empty($_POST["fee_amount"]) and
				!empty($_POST["discount"]) and !empty($_POST["feepaid"]) and  !empty($_POST["challan"])
				 and !empty($_POST["fee_due_date"]))
				{
				$st_id=$_POST["fee_sid"];
				$Fee_amt=$_POST["fee_amount"];
				$discount=$_POST["discount"];
				$full_paid=$_POST["feepaid"];
				$challan=$_POST["challan"];
				$fee_date=$_POST["fee_due_date"];
				$q="insert into Fee_Details values('".$st_id."','".$challan."',
				".$Fee_amt.",".$discount.",'".$fee_date."', TO_DATE('".date("d/m/yy")."','dd/mm/yyyy'),
				".$full_paid.")";
			//	echo $q;
				$query_id = mysqli_query($con, $q);
			//	$runselect = mysqli_stmt_execute($query_id);
				$finalamt= $Fee_amt - $discount;
				echo "<p class=monospace><b> Final Amount is: " .$finalamt. "</b></p>";
				}
				else{
					echo '<script>alert ("Complete Payment Information Not Entered")</script>';
				}		
			}
		?>
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

	$servername = "localhost";
	$username = "root";
	$password = "";
	$con = new mysqli($servername, $username, $password,"hamaraybachay"); 
		if($con){
			if(isset($_POST["enroll"])){
				
				//Student Information was entered. 
				if(!empty($_POST["std_cnic"]) && !empty($_POST["g_cnic"])){
				//	echo "In std";
					$std_name=$_POST["std_name"];
					$dob=$_POST["dob"];
					$img=$_POST["img"];
					$gender=$_POST["gender"];
					$CNIC=$_POST["std_cnic"];
					$sAddress=$_POST["std_add"];
					$q="insert into Student(Name,Gender,DOB,image_link,signup_date,CNIC)
					values('".$std_name."', '".$gender."',
					TO_DATE('".$dob."', 'dd/mm/yyyy'), '".$img."', TO_DATE('".date("d/m/yy")."','dd/mm/yyyy'),'".$CNIC."')";	
				//	echo $q;
					$query_id = mysqli_query($con, $q);
					//$runselect = mysqli_stmt_execute($query_id);
					/*Get Student ID via CNIC to insert into Std History*/
					$q2="select * from Student where CNIC ='".$_POST["std_cnic"]."'";
					$std_id = mysqli_query($con, $q2);
					//$s=mysqli_stmt_execute($std_id);
					$s_arr= mysqli_fetch_array($std_id);
						//echo $s_arr[0];
					/*Insert into Std History*/
					$q3="insert into Student_History values('".$s_arr[0]."',
					TO_DATE('".date("d/m/yy")."', 'dd/mm/yyyy'),'".$sAddress."')";
					$q3parse=mysqli_query($con,$q3);
					//$q3run=mysqli_stmt_execute($q3parse);
					
				}
				else{
					echo '<script>alert("Student Information Not Entered Correctly")</script>';
				}
				
				
				if(!empty($_POST["m_cnic"]) and !empty($_POST["std_cnic"])){
					$qm="Select * from Mother where F_CNIC='".$_POST["m_cnic"]."' ";
				//	echo $qm;
					$query_idm=mysqli_query($con,$qm);
					//$runselectm = mysqli_stmt_execute($query_idm);
					$nrows_m = mysqli_fetch_array($query_idm);
					if($nrows_m == 0){
					//	echo "in hereee";
						$m_name=$_POST["m_name"];
						$m_contact=$_POST["m_contact"];
						$m_cnic=$_POST["m_cnic"];
						$m_email=$_POST["m_email"];
						$m_address=$_POST["m_address"];
						$m_income=$_POST["m_income"];
						/*Insert in Mother table*/
						$qw="insert into Mother(F_Name,F_CNIC) 
						values ('".$m_name."','".$m_cnic."')";
						$qry1=mysqli_query($con,$qw);
					//	$run= mysqli_stmt_execute($qry1);
					}
					/*Get the Student_ID for the current Student to insert into bridge*/
					$q2="select * from Student where CNIC ='".$_POST["std_cnic"]."'";
					$std_id = mysqli_query($con, $q2);
					//$s=mysqli_stmt_execute($std_id);
					$s_arr= mysqli_fetch_array($std_id);
					//	echo $s_arr[0];
					$q3="select * from Mother where F_CNIC= '".$_POST["m_cnic"]."'";
					$qid=mysqli_query($con,$q3);
					//$ss=mysqli_stmt_execute($qid);
					$s2_arr= mysqli_fetch_array($qid,MYSQLI_ASSOC);
					//	echo $s2_arr[0];
					/*Insert into the Mother-Student Bridge*/
					$qb="insert into M_CHILD_OF values('".$s2_arr[0]."','".$s_arr[0]."',1)";
					$qryb=mysqli_query($con,$qb);
					//$qrybr=mysqli_stmt_execute($qryb);
					if($nrows_m == 0)
					{
						/*Insert into Mother History Table*/
						$qr="insert into Mother_History values('".$s2_arr[0]."',
						TO_DATE('".date("d/m/yy")."', 'dd/mm/yyyy'), '".$m_contact."' , '".$m_email."',
						'".$m_address."', ".$m_income.")";
						$qry2=mysqli_query($con,$qr);
					//	$run2= mysqli_stmt_execute($qry2);
					}
				}
				if(!empty($_POST["f_cnic"]) and !empty($_POST["std_cnic"])){
					$qm="Select * from Father where CNIC='".$_POST["f_cnic"]."' ";
				//	echo $qm;
					$query_idm=mysqli_query($con,$qm);
					//$runselectm = mysqli_stmt_execute($query_idm);
					$nrows_m = mysqli_fetch_array($query_idm);
					if($nrows_m == 0){
						$f_name=$_POST["f_name"];
						$f_contact=$_POST["f_contact"];
						$f_cnic=$_POST["f_cnic"];
						$f_email=$_POST["f_email"];
						$f_address=$_POST["f_address"];
						$f_income=$_POST["f_income"];
						/*Insert in Father table*/
						$qw="insert into Father(Father_Name,CNIC) 
						values ('".$f_name."','".$f_cnic."')";
						$qry1=mysqli_query($con,$qw);
						//$run= mysqli_stmt_execute($qry1);	
					}
					/*Get the Student_ID for the current Student to insert into bridge*/
					$q2="select * from Student where CNIC ='".$_POST["std_cnic"]."'";
					$std_id = mysqli_query($con, $q2);
					//$s=mysqli_stmt_execute($std_id);
					$s_arr= mysqli_fetch_array($std_id);
					//	echo $s_arr[0];
					$q3="select * from Father where CNIC= '".$_POST["f_cnic"]."'";
					$qid=mysqli_query($con,$q3);
					//$ss=mysqli_stmt_execute($qid);
					$s2_arr= mysqli_fetch_array($qid,MYSQLI_ASSOC);
					//	echo $s2_arr[0];
					/*Insert into the Father-Student Bridge*/
					$qb="insert into F_CHILD_OF values('".$s2_arr[0]."','".$s_arr[0]."',1)";
					$qryb=mysqli_query($con,$qb);
					//$qrybr=mysqli_stmt_execute($qryb);
					/*Insert into Father History Table*/
					if($nrows_m == 0)
					{
						$qr="insert into Father_History values('".$s2_arr[0]."', '".$f_contact."','".$f_email."',
						'".$f_address."',TO_DATE('".date("d/m/yy")."', 'dd/mm/yyyy') , 
						 ".$f_income.")";
					//	echo $qr;
						$qry2=mysqli_query($con,$qr);
					//	$run2= mysqli_stmt_execute($qry2);
					}
				}
				if(!empty($_POST["g_cnic"]) and !empty($_POST["std_cnic"])){
					$qm="Select * from Guardian where CNIC='".$_POST["g_cnic"]."' ";
				//	echo $qm;
					$query_idm=mysqli_query($con,$qm);
					//$runselectm = mysqli_stmt_execute($query_idm);
					$nrows_m = mysqli_fetch_array($query_idm);
					
					/*Get the Student_ID for the current Student to insert into bridge & age case*/
					$q2="select * from Student where CNIC ='".$_POST["std_cnic"]."'";
					$std_id = mysqli_query($con, $q2);
					//$s=mysqli_stmt_execute($std_id);
					$s_arr= mysqli_fetch_array($std_id);
					//	echo $s_arr[0];
					
					/*Alter Date session*/
					$ses="ALTER session set NLS_DATE_FORMAT='DD/MM/YYYY'" ;
					$sd=mysqli_query($con,$ses);
					//$shh=mysqli_stmt_execute($sd);
					
					/*Calculate the Std Age to Rule out younger students*/
					$q_date= "select trunc(months_between('".date("d/m/yy")."','".$_POST["dob"]."')/12) as Years
					from Student where Student.Student_ID = '".$s_arr[0]."'";
				//	echo $q_date;
					$query_date=mysqli_query($con,$q_date);
					//$run_date=mysqli_stmt_execute($query_date);
					$arr_date= mysqli_fetch_array($query_date);
						echo $arr_date[0];
						/*Insert only Female if Std Age<=5*/
					if($arr_date[0] <=5 and $_POST["g_gender"] !== 'F' ){
						echo '<script> alert("Guardian Must be Female")</script>';
					}
					else{
						/*Insert in Guardian table*/
						if($nrows_m == 0){
							$g_name=$_POST["g_name"];
							$g_contact=$_POST["g_contact"];
							$g_cnic=$_POST["g_cnic"];
							$g_gender=$_POST["g_gender"];
							$g_relation=$_POST["g_relation"];
						
							$qw="insert into Guardian(Name,Gender,CNIC) 
							values ('".$g_name."','".$g_gender."', '".$g_cnic."')";
							$qry1=mysqli_query($con,$qw);
							$run= mysqli_stmt_execute($qry1);	
						}
						/*Insert into Responsible For*/
						
						/*Get Guardian ID of Current Guardian via CNIC*/
						$q3="select * from Guardian where CNIC= '".$_POST["g_cnic"]."'";
						$qid=mysqli_query($con,$q3);
					//	$ss=mysqli_stmt_execute($qid);
						$s2_arr= mysqli_fetch_array($qid,MYSQLI_ASSOC);
						//	echo $s2_arr[0];
						/*Insert into RESPONSIBLE-FOR Bridge*/
						$qb="insert into Responsible_For values('".$s_arr[0]."','".$s2_arr[0]."',
						'".$_POST["g_relation"]."',1)";
						$qryb=mysqli_query($con,$qb);
					//	$qrybr=mysqli_stmt_execute($qryb);
						if($nrows_m == 0)
						{
							$qr="insert into Guardian_History values('".$s2_arr[0]."',TO_DATE('".date("d/m/yy")."','dd/mm/yyyy'),
							'".$_POST["g_address"]."','".$_POST["g_email"]."','".$_POST["g_contact"]."')";
						//	echo $qr;
							$qry2=mysqli_query($con,$qr);
							//$run2= mysqli_stmt_execute($qry2);
						}
					}
				}
				else{
					echo '<script> alert(" GUARDIAN INFORMATION NOT ENTERED") </script>';
				}				
			}
		}
		else{
			echo "RECORD NOT INSERTED";
			$e = mysqli_error($query_id);  
			echo $e['message'];	
		}
	?>
</html>