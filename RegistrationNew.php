<?PHP
$isPost=false;
$username="";
//check whether the button is clicked or not
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	//echo "button clicked";
}
?>
<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $username=="")
echo "<span style='color:red;'><small>Required</small></span>";
?>


<form id="regf" name="myForm" action=""  method="post">
  <p id="euid"></p>
  <p id="epass"></p>
  <p id="ename"></p>
  <p id="ephone"></p>
  <table>
    ID:<br><input type="text" id="uid" name="uid" placeholder="Enter your id" ><br>
    Password:<br><input type="password" onkeyup="passv()" id="pass" name="pass" placeholder="Enter your password" ><br>
    
    phone:<br><input type="text" id="phone" name="phone" onkeydown="phonev()" placeholder="Enter your phone"><br><br><br>
  </table>
    <input name="submit" type="submit" value="Register"><br><br>
    <a id="regl" href="userl.php">Login</a><br><br>

   
    
</form>

<br>
<br>