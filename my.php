<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
</head>
<body>
	<form>
<input type="text" name="num1" placeholder="Number1">
<input type="text" name="num2" placeholder="Number2">
<select name="operator">
	<option>None</option>
	<option>Add</option>
	<option>Multiply</option>
	<option>Divide</option>
	<option>Subtract</option>
</select>
<br>
	<button type="submit" name="submit" value="submit">Calculate</button>

</form>
<p>The Answer Is!:</p>
</body>
</html>


<?php 
if (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator) {
    	    case "None":
    		echo "Please select a method!";
    		break;
    	    case "Add":
    		echo $result1 + $result2;
    		break;
    		case "Multiply":
    		echo $result1 * $result2;
    		break;
    		case "Divide":
    		echo $result1 / $result2;
    		break;
    		case "Subtract":
    		echo $result1 - $result2;
    		break;
    		
    }
}
 ?>