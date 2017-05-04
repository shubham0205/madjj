<?php
session_start();
if(!isset($_SESSION['username']))
 header('location:http://localhost/MAD/LoginForm.html');
$sea=$_POST['search'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'register');
$q="select * from tech where course_name='$sea'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==0)
{
header('location:http://localhost/MAD/CookingForm.php');
}	
mysqli_close($con);
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
a
{
	color:BLACK;
	text-decoration:none;
}
table
{
	position:relative;
	margin-left:25%;
	margin-top:0%;
	border:2px solid green;
}
table td,th
{
	border:1px solid black;
	color:black;
	padding-bottom:5%;
	font-size:19px;
}
button{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 60%;
    transition-duration: 0.1s;
    cursor: pointer;
}
button:hover {
   background-color:white;
    color: black;
    border: 2px solid #555555;
}
p
{
 text-align:center;
}
<style>
</style>
</style>
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/jquery-ui.js"></script>
<script>
 $(document).ready(function()
        {
            $("button").click(function()
			{
                $("div").slideToggle();
				$("button").hide();
				$("h3").fadeIn(1000).css("background-color", "grey");
				$("div").css("background-color", "#e9e9e9");
				$("table").css("background-color", "white");
				$("div").css("border", "2px solid grey");
                $("img").show();				
				$("#p1").show();

			});
		});


</script>
</head>
<body bgcolor="#e9e9e9">
<p><a href="CookingForm.php"><img style="height:10% ; width:5%; display:none;" src="http://localhost/MAD/images/left.png"></a></p>
  <p id="p1"style="font-size:20px;display:none;"><i>Cooking is at once child's play and adult joy. And cooking done with care is an act of love</i></p>.
<button style="margin-left:38%;">Click here to view your course details</button>
<h3 style="text-align:center;display:none;margin-top:2%;color:white;">Hey! <?php echo $_SESSION['username'];?>, here is your required course details</h3>
<div style="display:none;">
<table>
<tr>
<th>courseid</th>
<th>coursename</th>
<th>webname</th> 
<th>clgname</th> 
<th>stdate</th>  
<th>endate</th>  
<th>weblink</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
	 $row=mysqli_fetch_array($result);
?>

	 <tr>
	 <td> <?php echo $row['course_id'];?></td>
	 <td> <?php echo $row['course_name'];?></td>
     <td> <?php echo $row['webname'];?></td>
	 <td> <?php echo $row['clgname'];?></td>
	 <td> <?php echo $row['st_date'];?></td>
	 <td> <?php echo $row['en_date'];?></td>
	 <td> <a href="$row['weblink']"><?php echo $row['weblink'];?></a></td>
     </tr>
<?php
}
?>
</table>
</div>
</body>
</html>
