<form id="regf" name="myForm" action=""  method="post">
  <p id="euid"></p>
  <p id="epass"></p>
  <p id="ename"></p>
  <p id="ephone"></p>
  <table>
    ID:<br><input type="text" id="uid" name="uid" placeholder="Enter your id" ><br>
    Password:<br><input type="password" onkeyup="passv()" id="pass" name="pass" placeholder="Enter your password" ><br>
    Name:<br><input type="text" id="name" onkeyup="namev()" name="name" placeholder="Enter your name"><br>
    phone:<br><input type="text" id="phone" name="phone" onkeydown="phonev()" placeholder="Enter your phone"><br><br><br>
  </table>
    <input name="submit" type="submit" value="Register"><br><br>
    <a id="regl" href="userl.php">Login</a><br><br>

    <a id="regl" href="home.php">Home</a><br><br>
    
</form>