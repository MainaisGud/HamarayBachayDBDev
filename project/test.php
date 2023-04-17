<html>
<style>
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
  .container {
  max-width: 900px;
  width: 100%;
  margin: 0 auto;
  position: center;
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
  margin: 10px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5), 0 5px 5px 0 rgba(0, 0, 0, 0.5);
}
#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
  color : purple;
}
</style>
<body>
<?php
	if(isset($_POST["staffbutton"])){
	$staffid = $_POST["staffid"];
	echo $staffid;
	echo "<br>";
	if($staffid == 1){
		echo '<a href="staffonly.php" id = "search-button">GO FORTH</a>';
	}
	}
	echo '<a href="edit.php" id = "search-button">GO BACK</a>';
?>
</form>
</div>
</div>
</body>
</html>