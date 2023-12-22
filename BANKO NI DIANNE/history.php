<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Transaction History</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    hr{
        border-top: 1px dotted #e2688a;
    }

    .container{
      margin: 5%;
    }
    .container h2{
      color: #f3f5f9;
      text-align: center;
      border: 1px solid #e2688a;
      background-color: #e2688a;
    }
    .container .frame{
      border: none;
    }

</style>

<body>
  <div class="container">
      <h2>Transaction History</h2>
      <br>
      <hr>
        <iframe class="frame" src="transaction_history.txt" width="100%" height="500vh" target="_blank"></iframe>
      <hr>
  </div>
</body>

</head>
</html>