<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	$b_nameErr  = $mobile_noErr = "";

	?>

<h1>Page 2 [Add Beneficiary] </h1>
<h4>Digital Wallet</h4>
1. Home 2. Add Beneficiary 3. Transaction History
<br>
<br>
<h3>Fund Transfer</h3>

    Beneficiary Name: <input type="text" name="b_name" value="<?php echo $b_nameErr;?>">
  <span class="error"> <?php echo $b_nameErr;?></span>
  <br><br>

    Mobile No: <input type="text" name="mobile_noErr" value="<?php echo $mobile_noErr;?>">
  <span class="error"> <?php echo $mobile_noErr;?></span>
  <br><br>

</body>
</html>

       
        
   