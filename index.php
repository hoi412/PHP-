https://stackoverflow.com/questions/17642872/refresh-page-and-keep-scroll-position<html>
<head>
<title> Gastenboek Kalsbeek College </title>
</head>
<body>

<img src="hot.jpg" class="centerImage" alt="kalsbeek logo" width="300" height="120">

<img src="kalsbeek_school.jpeg" class="bottomImage" alt="kalsbeek school" style="width:400px;height:300px;">
</body>
<style>
body {
  background-color: #23a73a;
}

.Enter
{  background: #f5b1bc;
   border: none;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  position:fixed;
  bottom:28px;
  left:42.75%;
  cursor: pointer;
  border: 1px solid white;}

.centerImage {
 padding-left: 630px;
}

.bottomImage{
    position:fixed;
    bottom:0px;
    left:70%;
}

.text{
  color: black;
  text-align: center;
  font-size: 20px;
  padding-left: 300px;
  padding-right: 300px;
  padding-top: 40px;
  }

.username{
  color: black;
  text-align: center;
  font-size: 30px;
  padding-left: 450px;
  position:fixed;
  bottom:0px;
  left:6%;
}


.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: green;
  overflow-x: hidden;
  padding-top: 20px;
  border: 2px solid white;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
}




  
</style>


<?php
session_start();
?>
<div class = "username">
<form action="chatroom.php" method="POST">
<br>Klaar om een bericht achter te laten?</br>
<input type="text" name="username"/>
<input type= "submit" class= "Enter" value = "Naar het gastenboek!"/>
<br></br>
</div>

<body
<body class= "book">

<div class="sidenav">
  <a href="https://chatroom--n333n444.repl.co/">Gastenboek</a>
  <a href="https://chatroom--n333n444.repl.co/contact.php">Contact</a>
</div>

<div class = "text">
<p><h1> Het gastenboek </h1></p>
Welkom op het gastenboek van het Kalsbeek College!
</div>

</form>
</class>
</body>

</html>

