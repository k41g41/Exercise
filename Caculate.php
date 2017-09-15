<html>
<head>

<title>

A simple fucntion for caculating


</title>


</head>


<body>

<?php

/**
*/

//aaa

	$mess = "" ;

	if (isset ( $_POST["sub"])) {

		if ( $_POST["num1"] == "") {
		
		$mess .= "The first blank can't be empty <br/>"; 
		} else {
		if ( !is_numeric ( $_POST["num1"] )) {

				$mess .= "The fist blank must be numberic <br/>";
			}
	
		}
	
		if ( $_POST["num2"] =="") {
	
			$mess .= "The second blank can't be empty <br/>";  
			}  else{

					if ( !is_numeric( $_POST["num2"])	) {
					
					$mess .= "The second blank must be numberic <br/>";

							
					} else {if ( $_POST["opt"] == "/" && $_POST["num2"] == 0) {

							$mess .= "The 除数can't be 0 <br/>";
												
												}	
					 }
					
				}  
		
	
	}


 // echo 'This space must be a number <br/>';


?>

<table border="1" align="center" width="400">

<form action="" method="post">

<caption><h1>Caculater</h1></caption>

<tr bgcolor=#fff100>

<td	width="5">

<input type="text"	name="num1"	value="<?php echo @$_POST["num1"] ;  ?>"/>

</td>


 <td width="6">

  <select name="opt" value="<?php echo @$_POST["opt"];   ?>">
	<option	value="0">Please Choose</option>
	<option	value="+">+</option>
	<option	value="-">-</option>
	<option	value="*">*</option>
	<option	value="/">/</option>
	<option	value="%">%</option>

  </select>

 </td>

<td	width="5">
<input type="text"	name="num2"	value="<?php echo @$_POST["num2"];   ?>" />

</td>

 <td width="2">
	<input type="submit" name="sub"	value="go" />


	</input>

 </td>


</tr>

 </form>

 <?php

	 if (  isset ( $_POST["sub"] )  ) {
	
	 echo '<tr> <td colspan="4"> ' ;


	 if ( !$mess ){
	
	
	 echo 'Result:'.$_POST["num1"].$_POST["num2"].'='.$_POST["num2"].'<br/>';
	 echo "Result: {$_POST["num1"]} {$_POST["num2"]} = {$_POST["num1"]} ";

	
		
		} else {

           echo "$mess $mess $mess"; //echo several variables
				}

	
	echo '</td> </tr> ' ;
	

  }

	

 ?>



</table>


</body>
</html>
