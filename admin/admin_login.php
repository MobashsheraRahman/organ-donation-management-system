<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log In</title>
    <base href="http://localhost/organdb/">

</head>

<body>
<?php include('../header.php'); ?> 
<div class="header">
    <img class="img-log" src="images/log in.png" alt="new user icon">
    <div class="h2">
        <h3 class="h3">Admin Log In</h3>
    </div>
</div>

<form action="admin/connect_admin_login.php" method="post" name="adminForm">


    <div class="wrapper">
        <div class="title">
            Admin Log In
        </div>
        <div class="form">
            <div class="inputfield">
                <label for="adminEmail">Email Address</label>
                <input type="email" id="adminEmail" class="input" placeholder="Email" name="ADMIN_EMAIL" required>
            </div> 
            <div class="inputfield">
                <label for="adminPassword">Password</label>
                <input type="password" id="adminPassword" class="input" placeholder="Password" name="ADMIN_PASSWORD" required>
            </div>  
            <div class="inputfield">
                <input type="submit" value="LOG IN" class="btn">
            </div>
        </div> 
    </div>
</form>

</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
.header {
  padding: 25px;
  text-align: center;
  background: #fcc358;
  color: white;
  font-size: 30px;
}
.header .h3 {
  color: #fff;
  font-size: 30px;
}
.header .img-log {
  position: relative;
  left: 20px;
  width: 225px;
  height: 200px;
  margin-top: 50px; /* Add this line to move the image down */
}


body {
  background: #fff;
  padding: 0 0px;
}
.wrapper {
  max-width: 500px;
  width: 100%;
  background: #FFF5EE;
  margin: 50px auto;
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.125);
  padding: 30px;
}
.wrapper .title {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
  color: #fcc358;
  text-transform: uppercase;
  text-align: center;
}
.wrapper .form {
  width: 100%;
}
.wrapper .form .inputfield {
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}
.wrapper .form .inputfield label {
  width: 200px;
  color: #757575;
  margin-right: 10px;
  font-size: 14px;
}
.wrapper .form .inputfield .input {
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}
.wrapper .form .inputfield .input:focus {
  border: 1px solid #39ace7;
}
.wrapper .form .inputfield .btn {
  width: 100%;
  padding: 8px 10px;
  font-size: 15px;
  border: 0px;
  background: #fcc358;
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}
.wrapper .form .inputfield .btn:hover {
  background: #ffbb00;
}
.wrapper .form .inputfield:last-child {
  margin-bottom: 0;
}
@media (max-width: 420px) {
  .wrapper .form .inputfield {
    flex-direction: column;
    align-items: flex-start;
  }
  .wrapper .form .inputfield label {
    margin-bottom: 5px;
  }
}
</style>
<?php include('../footer.php'); ?> 