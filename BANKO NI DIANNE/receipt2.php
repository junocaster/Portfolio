<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Checkout</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

h2{
  text-align: center;
  color: #d85375;
  padding: 10px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f3f5f9;
  padding: 5px 20px 15px 20px;
  border: 1px solid #fefefa;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #d85375;
  color: #f3f5f9;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: pink;
}

a {
  color: #fefefa;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>

<style>
    /* Add your existing styles here */

    /* Style for the modal */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.4);
      padding-top: 60px;
    }

    /* Style for the modal content */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    /* Close button style */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    .modal-content p{
      text-indent: 2%;
      margin: 0;
      padding: 0;
    }
  </style>


</head>
<body>
<a href="card.php"><span class="close" id="closeBtn">&times;</span></a>
<h2>BANKO NI DIANNE CHECKOUT FORM</h2>
<hr>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="javascript:void(0)" onsubmit="return false;">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required >
            <label for="email"> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" required >
            <label for="adr"> Address</label>
            <input type="text" id="adr" name="address" placeholder="Sagpon, Guevara Street, Albay" required>
            <label for="city"> City/Municipality</label>
            <input type="text" id="city" name="city" placeholder="Legazpi" required >

            <div class="row">
              <div class="col-50">
                <label for="state">Region</label>
                <input type="text" id="state" name="state" placeholder="Bicol" required >
              </div>
              <div class="col-50">
                <label for="zip">Zip Code</label>
                <input type="text" id="zip" name="zip" placeholder="1001" required maxlength="4" oninput="validateZipCode(this)">
              </div>
            </div>
          </div>
          
        </div>
        <input type="submit" value="Proceed to checkout" class="btn" id="checkoutBtn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"> <b>[1]</b></span></h4>
      <p>Limited Edition Pink Mastercard <span class="price">Php. 10,500.00</span></p>
      <hr>
      <p>Total: <span class="price" style="color:black"><b>Php. 10,500.00</b></span></p>
    </div>
  </div>
</div>


<script>
  // Function to validate Zip Code input
  function validateZipCode(inputField) {
    // Remove any non-digit characters using a regular expression
    inputField.value = inputField.value.replace(/\D/g, '');

    // Optionally, you can limit the length to 4 characters
    if (inputField.value.length > 4) {
      inputField.value = inputField.value.slice(0, 4);
    }
  }
</script>

<script>

function openReceiptModal() {
  // Retrieve values from text fields
  var fullName = document.getElementById('fname').value;
  var email = document.getElementById('email').value;
  var address = document.getElementById('adr').value;
  var city = document.getElementById('city').value;
  var zip = document.getElementById('zip').value;
  var region = document.getElementById('state').value;

  // Check if required fields are filled
  if (fullName && email && address && city && zip && region) {
    // Required fields are filled, proceed to display the modal
    var modal = document.getElementById('receiptModal');
    modal.style.display = 'block';

    // Get the current date and time
      var currentDate = new Date();
      var currentDateTimeString = currentDate.toLocaleString();

      // Display the current date and time in the receipt modal
      document.getElementById('currentDateTime').innerText = currentDateTimeString;


    // You may need to calculate the total dynamically
    var totalAmount = 'Php. 500.00';

    // Update receipt modal content
    document.getElementById('receiptFullName').innerText = 'Full Name: ' + fullName;
    document.getElementById('receiptEmail').innerText = 'Email: ' + email;
    document.getElementById('receiptadd').innerText = 'Address: ' + address;
    document.getElementById('receiptTotal').innerText = 'Total Amount: ' + totalAmount;
  } else {
    // Display an alert or handle the case where required fields are not filled
    alert('Please fill in all required fields.');
  }
}

  // Function to close the modal
  function closeReceiptModal() {
    var modal = document.getElementById('receiptModal');
    modal.style.display = 'none';
  }

  // Event listener for the "Proceed to checkout" button
  document.getElementById('checkoutBtn').addEventListener('click', openReceiptModal);

  // Event listener for the close button in the modal
  document.getElementById('closeBtn').addEventListener('click', closeReceiptModal);
</script>

<!-- Modal for the receipt -->
<div id="receiptModal" class="modal">
  <div class="modal-content">
    <a href="card.php"><span class="close" id="closeBtn">&times;</span></a>
    <h2>BND Receipt</h2>
    <hr>
    <p id="receiptTime">Date and Time: <span id="currentDateTime"></span></p>
    <br>
    <p>Product: Beginner's BND Debit Card</p>
    <p id="receiptFullName">Full Name: John M. Doe</p>
    <p id="receiptEmail">Email: john@example.com</p>
    <p id="receiptadd">Address: Sagpon</p>
    <p id="receiptTotal">Total Amount: Php. 10,500.00</p>
  </div>
</div>

</body>
</html>
