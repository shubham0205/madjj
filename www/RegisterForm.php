<html>
<head>
<style>
   .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 5px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;  
    }
td
{
width : 25px;
height: 60px;
font-family:Times New Roman;
font-size:20px;
color:green;
text-align :center;
vertical-align :middle;
background-color:white;

}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/jquery-ui.js"></script>
 <script>
 function validateMyForm()
 {
	 var name=document.getElementById("n1").value;
	 var uname=document.getElementById("u1").value;
	 var pwd=document.getElementById("p1").value;
	 var md=document.getElementById("m1").value;
	 var pno=document.getElementById("o1").value;
	 var regname=/^[a-zA-Z]+$/;
	 if(regname.test(name)==false)
	 {
		 alert("Name must be in alphabets only");
	     return false;
	 }
	 alert("hi");
	 var reguname=/^[a-zA-Z0-9]+@+[a-zA-z0-9]+$/;
	 if(reguname.test(name)==false)
	 {
		 alert("Name must be in a alphabets only");
	     return false;
	 }
 }
 </script>
</head>
<body bgcolor="#e9e9e9" >
<h1 style =" font-family:Times New Roman;color:green;" align="center"> Registration</h1>
<form name ="f1" action="RegisterForm.php" method="post" onsubmit="return validateMyForm();">
<table align="center" width="40%" height="30%" border="2px solid green">
<tr>
<td>Name</td>
<td><input type="text" name="name" id="n1" required/> </td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="user" id="u1" required/> </td>
</tr>
<tr>
<td> Password</td>
<td >
<input type="password" name="pass" id="p1" required/>
</td>
</tr>
<tr>
<td>Mail Id</td>
<td><input type="email" name="mail" id="m1" required/> </td>
</tr>
<tr>
<td>Phone No.</td>
<td><input type="tel" name="ph" id="o1" required/> </td>
</tr>
<tr>
    <td>Course Field</td>
<td><select name="sel" required>
  <option value="">None</option>
  <option value="enginnering">Engineering</option>
  <option value="business">Business</option>
  <option value="cooking">Cooking</option>
  <option value="music & dance">Music and Dance</option>
</select></td>
</tr>
<tr>
<td colspan="2"> <a href="LoginForm.html"><input type="button" name="rst" value="Back"  class="button"/></a>
<input type="submit" name="bt" value="Register"  class="button" /> </a></td>
</tr>
</table>
</form>
<span style="margin-left:45%;"><a href="frontpage.html"><img style="height:12% ; width:5%;" src="http://localhost/MAD/images/left.png"></a></span>
<span><a href="LoginForm.html"><img style="height:12%; width:5%;" src="http://localhost/MAD/images/right.png"></a></span>
</body>
</html>