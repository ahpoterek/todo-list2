<form action = "HW12.php" method = "GET">
Your Number Here:<br><input type= "text" name= "number"><br>
<input type= "submit" name= "submit" value= "Submit"><br>
</form>

<?php
if (isset($_GET['submit'])){
	$int= (int) $_GET['number'];
	if ($int == 0){
		echo "Error! Please enter a number!";
	}
else{
    echo "Thanks!";
}
}
?>

