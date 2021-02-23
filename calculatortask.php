<?php 
extract($_POST);
if(isset($save))
{
	switch($ch)
	{
		case '+':
		$result=$fn+$sn;
		break;
		
		case '-':
		$result=$fn-$sn;
		break;
		
		case '*':
		$result=$fn*$sn;
		break;
		
	}
	
}

?>
<!DOCTYP html>
<html>
	<head>
		<title>Calculator- switch</title>
		
	</head>
	<body>
		<form method="post">
		<table border="1" align="center">
			<tr>
				<th>The Answer</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$result;?>"/></th>
			</tr> 
			
			<tr>
				<th>Enter your First number</th>
				<th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
			</tr> 
			<tr>
				<th>Enter your Second number</th>
				<th><input type="number" name="sn" value="<?php  echo @$sn;?>"/></th>
			</tr>
			<tr>
				<th>Select Your Choice</th>
				<th>
				<select name="ch">
					<option>+</option>
					<option>-</option>
					<option>*</option>
				</select>
				</th>
			</tr>
			<tr>
				
				<th colspan="2">
				<input type="submit" 
				name="save" value="Show Answer"/>
				</th>
			</tr>
		</table>
		</form>
	</body>
</html>
