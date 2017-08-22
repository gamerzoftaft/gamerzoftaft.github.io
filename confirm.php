<html lang="en">
	<head>
		<title>Gamerz of Taft</title>
  <link rel="stylesheet" type="text/css" href="confirmstyle.css" />
  <link rel="stylesheet" href="Styles.css" type="text/css" />
	</head>
	<body>
		<div id="container">
		<div id="header">
			<img src="got.jpg" width="1300" height="250" />
		</div>
		
		<br><img src="confirm.jpg" width="1260" height="250" /><br>
		
<div id="main">
<?php
		$item=$_POST['item'];
		$quantity=$_POST['quantity'];
		$first=$_POST['fname'];
		$address=$_POST['address'];
		$region=$_POST['region'];
		$pay=$_POST['pay'];
		
			if ($item=="hearttee")
				{ 
				$rate=249.00; 
				}			
			else if ($item=="sonictee")
				{ 
				$rate=249.00;
				}
			else if ($item=="darktee")
				{
				$rate=249.00;
				}
			else if ($item=="gtatee")
				{
				$rate=249.00;
				}
			else if ($item=="zeldahood")
				{
				$rate=809.00;
				}
			else if ($item=="mariobadge")
				{
				$rate=599.00;
				}
			else if ($item=="eldersnecklace")
				{
				$rate=479.00;
				}
			else if ($item=="lolfigure")
				{
				$rate=469.00;
				}
			else if ($item=="personacase")
				{
				$rate=319.00;
				}
			else if ($item=="finalbox")
				{
				$rate=199.00;
				}
			else if ($item=="falloutrucksack")
				{
				$rate=799.00;
				}
			else if ($item=="dotamug")
				{
				$rate=129.00;
				}
			
	?>

	<?php
		echo "<b> Customer's Name: </b>".$_POST['fname']. "<br>";
		echo "<b> Address: </b>".$_POST['address']. "<br>";
		echo "<b> Region/Province: </b>".$_POST['region']. "<br>";
		echo "<b> Item Code: </b>".$_POST['item']. "<br>";
		echo "<b> Item Price (Php): </b> $rate <br>";
		echo "<b> Quantity: </b>".$_POST['quantity']. "<br>";
		
		$itemtotal=$quantity*$rate;
		echo "<b> Item Total (Php): </b> $itemtotal <br>";
		
		$shipfee=$itemtotal*0.2;
		echo "<b> Shipping Fee (Php): </b> $shipfee <br>";
		
		$total=$itemtotal+$shipfee;
		echo "<b>Total Amount (Php): <u>$total</u></b><br>";
		
		
		
	?>

<br>
<img src="pay.jpg" width="1260" height="250" /><br>


</div>
</body>
</meta>
</html>