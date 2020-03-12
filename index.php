


<!DOCTYPE html>
<html>
<head>
<title>
</title>FORM VALIDATE
<style>
.reg
{
  width : 300px;
  height : 600px;
  margin-top : 50px;
  margin-left : 50px; 
  background-color : darkblue;
}
.in 
{
  padding : 20px;
   background-color : lightblue;
   color : red;
   margin-left : 45px;
   margin-bottom : 20px;
   border-radius : 15px;
}
#sub
{
  background-color : red;
  width : 100px;
  color : white;
  margin-left : 105px;
  border-radius : 15px;
}
</style>
</head>
<body>
<t1>HEy this is my first change</t1>
<div class="reg">
<form method="post">
<input type="text" name="fname" placeholder="full-name" required="" class="in"/>
<input type="text" name="email" placeholder="email-id" required="" class="in"/>
<input type="password" name="password" placeholder="password" required="" class="in"/>
<input type="password" name="confpass" placeholder="confirm-password" required="" class="in"/>
<input type="submit" name="register" value="register" class="btn btn-primary" required="" class="in" id="sub"/>
</form>
</div>
</body>
</html>
