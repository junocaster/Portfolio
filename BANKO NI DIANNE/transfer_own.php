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

.wrapper .main_content .content{
  margin: 15%;
  background: #f3f5f9;
  color: #e2688a;
  text-align: center;
}

.content p{
  color: #717171;
  font-style: italic;
  font-size: 13px;
}

#logo {
  margin-left: 15% ;
  margin-bottom: 5%;
  max-width: 200px; 
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
          <h2>TRANSFER TO OWN ACCOUNT</h2> 
          <p>Banko ni Dianne, Bank na Dito!</p> 
          <br>
      </div>  
      <div class="content">
          <h3>No eligible accounts found</h3> 
          <p>There are no elibible accounts for your transaction. Please contact the bank for assistance</p> 
      </div> 
          
    </div>
</div>
</div>

</body>
</html>