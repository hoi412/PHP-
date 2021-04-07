<html>
<head>
<meta http-equiv="refresh" content= "2">
</head>
<body>
<script> setTimeout(() => {
  window.location.reload(true);
  },5000); </script>
<?php
//messages from the server

//contect database
$link = mysqli_connect('localhost', 'root', 'usbw', 'im');
if (!$link)
{     die('Could not connect:'.mysqli_error()); }
else
{ 
  //echo 'were good';
}


//quety database

$query = "SELECT * FROM messages";

if ($result = mysqli_query($link, $query)) {
		/*fetch assotiative array*/
	while ($row = mysqli_fetch_row($result))  {
	  echo $row['3']. ' says: '.$row['1'].'</br>';
	}
	mysqli_free_result($result);
}

/*close connection*/
mysqli_close($link);





?>
</body>
</html>

<style type="text/css">
body
{ 
    background-image: url('../Images/Black-BackGround.gif');
    background-repeat: repeat;
}
</style>


function myFunction() {
  .location.reload(true);
}

<script> setTimeout(function(){ location.reload(true); },1000); </script>
