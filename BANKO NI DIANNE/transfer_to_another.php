
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
  $receipt =  "\n"."Transfer to Another Bank: ". "<hidden> ;" . "Php ". number_format($withdrawAmount, 2) . "," . date("Y-m-d H:i:s") . "," .$refNumber ;

  // Save the receipt to the transaction history file
  file_put_contents("transaction_history.txt", $receipt, FILE_APPEND);

  // Send the receipt details as a response to the client along with the reference number
  echo json_encode(['receipt' => $receipt, 'refNumber' => $refNumber]);

  // Exit to prevent further execution
  exit();
}
?>

<script type="text/javascript">\
        var Bank = document.getElementById('outputTextField').value;
        var AccNum = document.getElementById('numericInput').value;
</script>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Transfer</title>
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

.wrapper .main_content .header{
  margin: 5%;
  background: #f3f5f9;
  color: #d85375;
  border-bottom: 1px solid #e0e4e8;
  text-align: center;
}

.header p{
  color: #717171;
  font-style: italic;
  font-size: 13px;
}

#logo {
  margin-left: 15% ;
  margin-bottom: 5%;
  max-width: 200px; 
}


.wrapper .main_content .transfer{
  max-width: 100%;
  margin: 5%;
}

.wrapper .main_content .transfer .transfer_to{
  margin-bottom: 3%;
  color: #e2688a;
}

.wrapper .main_content .transfer .transfer_from{
  margin-bottom: 3%;
  color: #e2688a;
}


.wrapper .main_content .transfer .transfer_amount{
  margin-bottom: 3%;
  color: #f3f5f9;
  background: #e2688a;
  border: 1px solid #e2688a;
  padding: 3%;
}

.wrapper .main_content .transfer .transfer_button{
  height: 10vh;
  display: flex;
  justify-content:center;
  align-items: center;
}

.submit-button {
    margin: auto;
    padding: 15px;
    font-size: 16px;
    background-color:  #d85375;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.accountnum, .amount {
      margin-top: 0.6%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 100%;
      box-sizing: border-box;
      display: flex;
      background-color: #f3f3f3;
      color: #717171;
    }

        .dropdown {
            width: 20.6%;
            text-decoration: none;
            margin: auto;
            padding: 10px;
            font-size: 16px;
            background-color: #d85375;
            border: none;
            color: #f3f5f9;
            border-radius: 5px;
            cursor: pointer;
            position: relative;
            display: inline-block;

        }

        .dropdown button{
          text-decoration: none;
          background-color: #d85375;
          text-align: center;
          border: none;
          color: #f3f5f9;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #d85375;
            min-width: 200px;
            max-width: 80%;
            z-index: 1;
        }

        .dropdown-content a {
            color: #f3f5f9;
            padding: 12px 12px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: pink;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        #outputTextField {
                  align-items: right;
                  justify-content: right;
                  margin-top: 0.6%;
                  padding: 10px;
                  font-size: 16px;
                  border: 1px solid #ccc;
                  border-radius: 5px;
                  width: 78.9%;
                  box-sizing: border-box;
                  background-color: #fefefa;
                  color: #717171;
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
      <div class="header"> 
          <h2>TRANSFER TO ANOTHER BANK ACCOUNT</h2> 
          <p>Banko ni Dianne ang Best For You!</p>
          <br> 
      </div> 

      <?php
            $fileName = 'user.txt';
            if (file_exists($fileName)) {
                $lines = file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                $userName = isset($lines[0]) ? $lines[0] : 'Guest'; // First line as the username
                $accountNumber = isset($lines[1]) ? $lines[1] : 'Not Available'; 
            } 
        ?>  
       
       <div class="transfer">
        <form method="post" id="transferForm">

            <div class="transfer_to">
              <h3>Transfer From</h3>
              <p>Account Number: <?php echo $accountNumber; ?></p>
            </div>

            <div class="transfer_from">
              <h3>Transfer To</h3>
              <input type="text" id="outputTextField" placeholder="Select Other Bank" readonly>
                  <div class="dropdown" required>
                      <button>Select Bank</button>
                      <div class="dropdown-content">
                          <a href="#" onclick="selectOption('Banko ni Yunise')">Banko ni Yunise</a>
                          <a href="#" onclick="selectOption('Banko ni Vim')">Banko ni Vim</a>
                          <a href="#" onclick="selectOption('Banko ni Mea')">Banko ni Mea</a>
                          <a href="#" onclick="selectOption('Banko ni Ellaine')">Banko ni Ellaine</a>
                          <a href="#" onclick="selectOption('Banko na Debunk')">Banko na Debunk</a>
                          <a href="#" onclick="selectOption('Branch of BND Savings')">Branch of BND Savings</a>
                          <a href="#" onclick="selectOption('Gkacrush')">Gkacrush</a>
                          <a href="#" onclick="selectOption('Bank of DaV')">Bank of DaV</a>
                          <a href="#" onclick="selectOption('Just Bank')">Just Bank</a>
                          <a href="#" onclick="selectOption('Pay Meyuh')">Pay Meyuh</a>
                      </div>
                  </div>
                  

              <input type="text" class="accountnum" placeholder="Enter Acount Number here" id="numericInput" oninput="allowDigitsOnly(this)" required maxlength="16" minlength="16" required>
            </div>
            <div class="transfer_amount">
              <h3>Transfer Amount</h3>
              <input type="text" class="amount" placeholder="Enter amount here"  name="withdrawAmount" id="withdrawAmount" oninput="allowDigitsOnly(this)" required>
            </div>

        </form>
          <div class="transfer_button">
              <button class="submit-button" onclick="withdraw_checker()">TRANSFER</button>
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
    function withdraw_checker() {
      var Bank = document.getElementById('outputTextField').value;
      var AccNum = document.getElementById('numericInput').value;
      var Amount = document.getElementById('withdrawAmount').value;

      if(Bank && AccNum && Amount){
        withdraw();
      }
      else{
        alert('Please fill in all required fields.');
      }
    }

        function withdraw(){
          event.preventDefault();

          // Simulating successful withdrawal
          var Amount = document.getElementById("withdrawAmount").value;
          var dateTime = new Date().toLocaleString();

          // Create FormData object
          var formData = new FormData();
          formData.append('amount', Amount);

          // Use fetch to send form data to the server
          fetch('transfer_to_another.php', {
            method: 'POST',
            body: formData
          })
            .then(response => {
              if (response.ok) {
                return response.json(); // Parse response as JSON
              } else {
                throw new Error('Transaction failed: ' + response.statusText);
              }
            })
            .then(data => {
              // Display the receipt pop-up
              showWithdrawalModal(Amount, dateTime, data.refNumber);
              console.log(data.receipt); // Log the receipt to the console (optional)

              // Clear the input field
              document.getElementById("amount").value = "";
              document.getElementById("Bank").value = "";
              document.getElementById("Account").value = "";
            })
            .catch(error => {
              console.error('Error:', error);
            });
        }

        function showWithdrawalModal(amount, dateTime, refNumber) {
        var modal = document.getElementById("withdrawalModal");
        var content = document.getElementById("withdrawalModalContent");
        var Bank = document.getElementById('outputTextField').value;
        var AccNum = document.getElementById('numericInput').value;
        var Amount = document.getElementById('withdrawAmount').value;

        if(typeof refNumber == 'undefined'){
              // Update modal content with transaction details
            content.innerHTML =
              "<h3>TRANSFER USUCCESSFUL!</h3><br>"+
               "<p><b>Reason: Insufficcient Balance. Try again.</b></p>";
        }else{
              // Update modal content with transaction details
            content.innerHTML =
              "<h3>TRANSFER SUCCESSFUL!</h3><br>" +
              "<p><b>Withdrawal Transaction:</b></p><br>" +
              "<p>Amount: <b> Php " + parseFloat(Amount).toFixed(2) + "</b></p>" +
              "<p>Date and Time: " + dateTime + "</p>" +
              "<p>Reference Number: " + refNumber + "</p><br>";
        }
         // Display the modal
            modal.style.display = "block";
                        // Clear the value of the outputTextField
            document.getElementById('outputTextField').value = '';

            // Clear the value of the numericInput
            document.getElementById('numericInput').value = '';

            // Clear the value of the withdrawAmount
            document.getElementById('withdrawAmount').value = '';
      }

      function hideWithdrawalModal() {
        var modal = document.getElementById("withdrawalModal");
        modal.style.display = "none";
      }
    </script>


<script>
    function selectOption(option) {
        document.getElementById('outputTextField').value = option;
    }

    function allowDigitsOnly(input) {
        // Remove non-numeric characters using a regular expression
        input.value = input.value.replace(/\D/g, '');
    }

</script>






</body>
</html>