<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	<title>Home Page</title>
	</head>
	<body>
		
	     <?php include 'Header.php';?>
		<p><h1>Converter</h1></p><br>
		<form>
			<select name="Conversion" required="">
				<option value="Feet to Inch"> Feet to Inch</option>
				<option value="Inch to Feet"> Inch to Feet</option>
				
			</select >
		</form>
		<br>
		<label>Value:</label><input id="value" type="number" name="val"  required=""><br><br><br>

		<?php
			if(isset($_POST['convert']))
			{ 
			 $value=$_POST['value'];
			 $option=$_POST['Conversion'];

			 if($option=='Feet to Inch'){

                 $result=$value*12;
                 echo $result;
                  $show=$_POST['result'];
             }
             if($option=='Inch to Feet'){

                 $result=$value/12;
                 echo $result;
             }
			}
		?>
		<label>Result:</label><input id="show" type="text" name="">
		<input id="convert" type="submit" name="results" value="Show" >
	    
         
	</body>
</html>