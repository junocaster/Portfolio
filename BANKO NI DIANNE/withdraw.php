<?php
// Function to generate a random 12-digit reference number
function generateReferenceNumber() {
  return str_pad(mt_rand(1, 999999999999), 12, '0', STR_PAD_LEFT);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the withdrawal amount from the form
  $withdrawAmount = $_POST["amount"];

  // Read the current balance from the balance file
  $balanceFile = "balance.txt";
  $currentBalance = floatval(file_get_contents($balanceFile));

  // Check if the withdrawal amount is greater than the current balance
    if ($withdrawAmount > $currentBalance) {
      // Send an error response to the client
      echo json_encode(['error' => 'Insufficient funds']);
      return;
      exit();
    }

  // Subtract the withdrawal amount from the current balance
  $newBalance = $currentBalance - $withdrawAmount;

  // Update the balance file with the new balance
  file_put_contents($balanceFile, $newBalance);

  // Generate a reference number
  $refNumber = generateReferenceNumber();

  // Create a receipt with the same reference number
  $receipt =  "\n"."Withdraw | " . "Php ". number_format($withdrawAmount, 2) . " | " . date("Y-m-d H:i:s") . " | " .$refNumber ;

  // Save the receipt to the transaction history file
  file_put_contents("transaction_history.txt", $receipt, FILE_APPEND);

  // Send the receipt details as a response to the client along with the reference number
  echo json_encode(['receipt' => $receipt, 'refNumber' => $refNumber]);

  // Exit to prevent further execution
  exit();
}
?>

      <?php
            $fileName = 'user.txt';
            if (file_exists($fileName)) {
                $lines = file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                $userName = isset($lines[0]) ? $lines[0] : 'Guest'; // First line as the username
                $accountNumber = isset($lines[1]) ? $lines[1] : 'Not Available'; 
            } 
        ?>  

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Withdraw</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
   
</head>
<style>
    
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 300px;
  height: 100%;
  background:   #e2688a;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar ul li img{
  width: 20px;
  float: left;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 25px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
  text-indent: 10px;
}    


.wrapper .sidebar ul li a{
  color: white;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #d85375;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: #d85375;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #fff;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 300px;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}
.wrapper .main_content .info div{
  margin-bottom: 20px;
}

#logo {
  margin-left: 15% ;
  margin-bottom: 5%;
  max-width: 200px; 
}


.wrapper .main_content h2 {
  color:  #e2688a;
  margin-top: 10%;
  margin-left: 5%;
}

   .textbox {
      margin-top: 0.6%;
      margin-left: 5%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 90%;
      box-sizing: border-box;
      display: inline-block;
      background-color: #f3f3f3;
      color: #717171;
    }

    .submit-button {
    position: absolute;
    justify-content: flex-end;
    bottom: 0;
    right: 0;
    margin-top: 30px;
    margin-right: 5%;
    padding: 10px;
    font-size: 16px;
    background-color:  #d85375;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.modal {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 20px;
  background-color: #e2688a; 
  color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  text-align: center;
}

.modal-content {
  text-align: center;
}

.modal-close {
  background-color: #d85375; 
  text-align: center;
  color: #fff;
  padding: 8px 12px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px; 
}

</style>
<body>

<div class="wrapper">
    <div class="sidebar">
    <img src="bnd vertical transparent.png" alt="Logo" id="logo">
        <ul>
            <li><img src="ICONS/HOME.png"><a href="bank.php"></i>HOME</a></li>
            <li><img src="ICONS/DEPOSIT.png"><a href="deposit.php"></i>DEPOSIT</a></li>
            <li><img src="ICONS/WITHDRAW.png"><a href="withdraw.php">WITHDRAW</a></li>
            <li><img src="ICONS/TRANSFER.png"><a href="transfer.php"></i>TRANSFER</a></li>
            <li><img src="ICONS/MORE.png"><a href="more.php">MORE</a></li>
            <li><img src="ICONS/LOG OUT.png"><a href="login.php">LOG OUT</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content" id="main_content" >
        <div class="info">
          <h2> WITHDRAW </h2>
      <div class="textbox-container">
        <form method="post" onsubmit="withdraw(event)">
        <input type="text" class="textbox" placeholder="Enter amount here" name="amount" id="withdrawAmount" oninput="allowDigitsOnly(this)"
         required>
          <br> <br>
          <button class="submit-button">WITHDRAW</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Custom Modal -->
<div id="withdrawalModal" class="modal">
  <div id="withdrawalModalContent" class="modal-content"></div>
  <button class="modal-close" onclick="hideWithdrawalModal()">Close</button>
</div>

<script>
  function allowDigitsOnly(input) {
    // Remove non-numeric characters using a regular expression
    input.value = input.value.replace(/\D/g, '');
  }

  function withdraw(event) {
    event.preventDefault();

    // Simulating successful withdrawal
    var withdrawalAmount = document.getElementById("withdrawAmount").value;
    var dateTime = new Date().toLocaleString();

    // Create FormData object
    var formData = new FormData();
    formData.append('amount', withdrawalAmount);

    // Use fetch to send form data to the server
    fetch('withdraw.php', {
      method: 'POST',
      body: formData
    })
      .then(response => {
        if (response.ok) {
          return response.json(); // Parse response as JSON
        } else {
          throw new Error('Withdrawal failed: ' + response.statusText);
        }
      })
      .then(data => {
        // Display the receipt pop-up
        showWithdrawalModal(withdrawalAmount, dateTime, data.refNumber);
        console.log(data.receipt); // Log the receipt to the console (optional)

        // Clear the input field
        document.getElementById("withdrawAmount").value = "";
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }

  function showWithdrawalModal(amount, dateTime, refNumber) {
    var modal = document.getElementById("withdrawalModal");
    var content = document.getElementById("withdrawalModalContent");

    if(refNumber == undefined){
          // Update modal content with transaction details
        content.innerHTML =
          "<h3>TRANSFER USUCCESSFUL!</h3><br>"+
               "<p><b>Reason: Insufficcient Balance. Try Again.</b></p>";

        // Display the modal
        modal.style.display = "block";
    }else{
          // Update modal content with transaction details
        content.innerHTML =
          "<h3>WITHDRAWAL SUCCESSFUL!</h3><br>" +
          "<p><b>Withdrawal Transaction:</b></p><br>" +
          "<p>Amount: <b> Php " + parseFloat(amount).toFixed(2) + "</b></p>" +
          "<p>Date and Time: " + dateTime + "</p>" +
          "<p>Reference Number: " + refNumber + "</p><br>";

        // Display the modal
        modal.style.display = "block";
    }
  }

  function hideWithdrawalModal() {
    var modal = document.getElementById("withdrawalModal");
    modal.style.display = "none";
  }
</script>