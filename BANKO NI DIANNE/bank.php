<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Banko ni Dianne</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
        font-family: 'Josefin Sans', sans-serif;
    }

    body {
        background-color: #f3f5f9;
    }

    .wrapper {
        display: flex;
        position: relative;
    }

    .wrapper .sidebar {
        width: 300px;
        height: 100%;
        background: #e2688a;
        padding: 30px 0px;
        position: fixed;
    }

    .wrapper .sidebar ul li img {
        width: 20px;
        float: left;
    }

    .wrapper .sidebar h2 {
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 30px;
    }

    .wrapper .sidebar ul li {
        padding: 25px;
        border-bottom: 1px solid #bdb8d7;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        text-indent: 10px;
    }

    .wrapper .sidebar ul li a {
        color: white;
        display: block;
    }

    .wrapper .sidebar ul li a .fas {
        width: 25px;
    }

    .wrapper .sidebar ul li:hover {
        background-color: #d85375;
    }

    .wrapper .sidebar ul li:hover a {
        color: #fff;
    }

    .wrapper .sidebar .social_media {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
    }

    .wrapper .sidebar .social_media a {
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

    .wrapper .main_content {
        width: 100%;
        margin-left: 300px;
    }

    .wrapper .main_content .header {
        margin-left: 5%;
        margin-right: 5%;
        margin-top: 1%;
        margin-bottom: 0;
        padding: 30px;
        color: #717171;
        border-bottom: 1px solid #e0e4e8;
    }


    .wrapper .main_content .header .name{
        width: 100%;
        color:#d85375;
        justify-content: left;
         font-size: 25px;
         font-weight: bold;
    }

    .wrapper .main_content .info {
        color: #717171;
        line-height: 25px;
    }

    .wrapper .main_content .info div {
        margin-bottom: 10px;
    }

    table {
        margin: 5%;
        width: 90%;
       
    }

    th, td {
        border: 1px solid whitesmoke;
        background-color: #e2688a;
        margin: 5%;
        padding: 5%;
        text-align: left;
    }

    .wrapper .main_content .info .transaction_box {
        margin: 5%;
        margin-top: 0%;
        padding: 4%;
        border: 2px solid #e2688a;
        display: flex;
        justify-content: space-between; /* Align to the space between elements */
        align-items: center; /* Align vertically centered */
    }

    .transaction_box .transaction-text {
        padding-top: 1%;
        margin-right: 30%; /* Adjust the margin as needed */
        font-size: 20px;
    }

    .transaction_box .submit-button {
        padding: 10px;
        font-size: 16px;
        background-color: #d85375;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .transaction_box .submit-button .btn_txt{
          text-decoration: none;
           color: #fff;
    }

    .submit-button:hover{
        background-color: pink;
    }

    #logo {
        margin-left: 15%;
        margin-bottom: 5%;
        max-width: 200px;
    }

    .info #accountNumber {
        margin-right:5%;
    }

    #accountNumber {
        padding-top: 2%;
        color:#f3f5f9;
        font-size: 16px;
        font-weight: bold;
    }

    .number {
        font-size: 18px;
        color:#f3f5f9;
        margin-top: -10%;
        margin-left: 35%;
    }

    .balance {
        color:#f3f5f9;
        font-size: 18px;
        font-weight: bold;
        border-radius: 10px;

        background:  linear-gradient(-45deg, #FFFDD0, #FAAAC9, #F294B4, #E2688A, #D85375, #E2688A, #F294B4, #FAAAC9, #FFFDD0);
            background-size: 400% 400%; /* Increase the size for a smoother effect */
            animation: gradientChange 7s infinite; /* Adjust the duration as needed */

    }

    @keyframes gradientChange {
            0% {
                background-position: 0% 50%;
            }
            50%{
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

     #myDiv {
      display: none;
      padding: 20px;
      border: 1px solid #ccc;
      margin-top: 10px;
    }
    
    .hide-transaction-history {
        color: #d85375;
        cursor: pointer;
        float: right;
        margin-right: 20px;
        margin-top: 10px;
    }

    .transaction-history {
        display: none;
        margin-top: 20px;
    }

    .transaction-history table {
        width: 90%; /* Adjust the width as needed */
        border-collapse: collapse;
        margin-top: 10px;
    }

    .transaction-history th, .transaction-history td {
        border: 1px solid whitesmoke;
        background-color: #e2688a;
        padding: 15px;
        text-align: left;
        color: #fff;
    }

    .transaction-history th {
        background-color: #d85375;
    }

    .transaction-history tr:nth-child(even) {
        background-color: #fff;
    }

</style>
</style>

<body>

<div class="wrapper">
    <div class="sidebar">
        <img src="bnd vertical transparent.png" alt="Logo" id="logo">
        <ul>
            <li><img src="ICONS/HOME.png"><a href="#main_content">HOME</a></li>
            <li><img src="ICONS/DEPOSIT.png"><a href="deposit.php">DEPOSIT</a></li>
            <li><img src="ICONS/WITHDRAW.png"><a href="withdraw.php">WITHDRAW</a></li>
            <li><img src="ICONS/TRANSFER.png"><a href="transfer.php">TRANSFER</a></li>
            <li><img src="ICONS/MORE.png"><a href="more.php">MORE</a></li>
            <li><img src="ICONS/LOG OUT.png"><a href="login.php">LOG OUT</a></li>
        </ul>
        <div class="social_media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <div class="main_content">
        <div class="header">
            <div id="greeting"></div>
            <div class= "name">
             <?php
                $fileName = 'user.txt';
                if (file_exists($fileName)) {
                    $lines = file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    $userName = isset($lines[0]) ? $lines[0] : 'Guest'; // First line as the username
                    $accountNumber = isset($lines[1]) ? $lines[1] : 'Not Available'; //
                    echo $userName;
                } else {
                    echo 'Guest!';
                }
                $fileName = 'balance.txt';
                if (file_exists($fileName)) {
                    $lines = file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    $balance = isset($lines[0]) ? $lines[0] : 'Php. 0.00'; 
                } else {
                    echo 'Not Available';
                }
                ?>

            </div>
        </div>
        <div class="info">
            <table>
                <tbody>
                <tr>
                    <td><div class="Account"><div id="accountNumber"> Account Number: <?php echo $accountNumber; ?></div></div></td>
                    <td class="balance" style="width: 40%;">Balance: <?php echo "Php " . $balance.".00"; ?></td>
                </tr>
                </tbody>
            </table>

            <div class="transaction_box">
                <div class="transaction-text">Transaction History</div>
                <button type="button" class="submit-button" onclick="toggleTable()">View Transaction History</button>
            </div>
        
            <div class="transaction-history" id="transactionHistory">
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Amount</th>
                <th>Date and Time</th>
                <th>Reference Number</th>
            </tr>
        </thead>
        <tbody id="transactionTableBody">
            <!-- Table rows will be dynamically added here -->
        </tbody>
    </table>
</div>




<script>
      document.addEventListener('DOMContentLoaded', function () {
    var greetingDiv = document.getElementById('greeting');
    var accountNumberDiv = document.getElementById('accountNumber'); // Added line to get the account number element
    var currentTime = new Date().getHours();

    if (currentTime >= 0 && currentTime < 12) {
        greetingDiv.textContent = 'Good Morning, ';
    } else if (currentTime >= 12 && currentTime < 18) {
        greetingDiv.textContent = 'Good Afternoon, ';
    } else {
        greetingDiv.textContent = 'Good Evening, ';
    }

 
});

function toggleTable() {
    var transactionHistory = document.getElementById("transactionHistory");
    var viewBtn = document.querySelector(".submit-button");

    if (transactionHistory.style.display === "none" || transactionHistory.style.display === "") {
        transactionHistory.style.display = "block";
        loadTableData();
        viewBtn.textContent = "Hide Transaction History";
    } else {
        transactionHistory.style.display = "none";
        viewBtn.textContent = "View Transaction History";
    }
}

    function loadTableData() {
        var tableBody = document.getElementById("transactionTableBody");
        tableBody.innerHTML = ""; // Clear existing content

        // Assume transaction_history.txt is in the same directory
        fetch("transaction_history.txt")
            .then(response => response.text())
            .then(data => {
                var transactions = data.trim().split("\n");

                transactions.forEach(transaction => {
                    console.log("Transaction Line:", transaction);
                    var [refNumber, dateTime, type, amount] = transaction.split(" | ");
                    console.log("Parsed Values:", refNumber, dateTime, type, amount);
                    var row = tableBody.insertRow();
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    var cell4 = row.insertCell(3);

                    cell1.innerHTML = refNumber;
                    cell2.innerHTML = dateTime;
                    cell3.innerHTML = type;
                    cell4.innerHTML = amount;
                });
            })
            .catch(error => console.error("Error fetching data:", error));
    }
</script>

</body>
</html>
