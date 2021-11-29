
<!DOCTYPE HTML>  
<html>

<body>  
 
<?php
// define variables and set to empty values
$amountErr  = $Select_CategoryErr = "";
$amount  = $to = $Select_Category = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["amount"])) {
    $nameErr = "amount is required";
  } else {
    $amount = test_input($_POST["amount"]);
    // check if amount only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$amount)) {
      $amountErr = "Only letters and a-zA-Z- allowed";
    }
  }
  
  if (empty($_POST["Select_Category"])) {
    $Select_CategoryErr = "Select_Category is required";
  } else {
    $Select_Category = test_input($_POST["Select_Category"]);
    // check if e-mail address is well-formed
    if (!filter_var($Select_Category, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid format";
    }
  }
    
   if (empty($_POST["to"])) {
    $genderErr = "to is required";
  } else {
    $to = test_input($_POST["to"]);
  }

 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Page 1 [Home] </h1>
<h4>Digital Wallet</h4>
 <div>
    <ul>
      <li><a href="Home.php" class="menu-item" data-target="words">1. Home</a></li>
      <li><a href="Beneficiary.php" class="menu-item" data-target="words">2. Add Beneficiary </a></li>
       <li><a href="Home.php" class="menu-item" data-target="words">3. Transaction History</a></li>

    </ul>
  </div>

<br>
<br>
<h3>Fund Transfer</h3>



  Select Category:
   <label for="Select Category"></label>
  <select id="Select_Category" name="Select_Category">
    <option value="Select a Value ">Select a Value</option>
    <option value="Bkash">bkash</option>
    <option value="Marchent">marchent</option>
    <option value="Recharge">recharge</option>

  </select>
  <br><br>

To:
   <label for="to"></label>
  <select id="to" name="to">
    <option value="Select a contact">Select a contact</option>
    <option value="Rumi ">Rumi</option>
    <option value="Rahat">Rahat</option>
   
  </select>
  <br><br>
    Amount: <input type="text" name="amount" value="<?php echo $amountErr;?>">
  <span class="error"> <?php echo $amountErr;?></span>
  <br><br>

  
  
    </tr>
          <td align="center" colspan="2"><input type="submit" name="register"></td>
        </tr>
</form>


 <script>
              function get(category)
          {
            return document.getElementById(category);
          }
          
          function validate()
          {
            cleanUp();
            var err_msg = "";
            if(get("category").value == "")
            {
              get("err_c").innerHTML = "Category Required*";
              get("err_c").style.color = "red";
              hasError=true;
            
            }
            if(get("contact").value == "")
            {
               get("err_con").innerHTML = "contact Required*";
               get("err_con").style.color = "red";
              
                hasError=true;
              
            }
           if(get("amount").value == "")
            {
               get("err_amount").innerHTML = "amount Required*";
               get("err_amount").style.color = "red";
                hasError=true;
            
            }
            
            
           if(!hasError)
           {
             
           }
          //alert (err_msg);
            return false;
          }
          
          function cleanUp()
          {
            get("err_c").innerHTML     = "";
            get("err_con").innerHTML     = "";
            get("err_amount").innerHTML   = "";
             
           
          }
    
    </script>


</body>
</html>