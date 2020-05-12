<?php   

session_start();  
if(!isset($_SESSION['sess_emai']) ){  
    header("location:login.php");  
} else {  }

 $conn= mysqli_connect('localhost','root','','mydb') or die(mysql_error());
     
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
 

  
?>  
<!doctype html>  
<html>  
<head>  
<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
<title>Change Password</title>  
<h2>Welcome,  <? echo  $_SESSION['sess_emai'];?>! </h2>  <br><br><br>
    <style>   
    @media screen and (min-width: 50rem) {
  .outer-box-frame {
        border: 0.3rem solid #B22222;
        margin-top: 3px;
      margin-left: 5rem  ; /*the auto for the left/right keeps the page centered*/
        padding: 5rem;
    max-width: 38000rem; // min-width - 2(padding + border)
  }
  body {
    background-color: #6C8C4C;
  }
}
.outer-box-frame {
    background-color: #fff;
  }
  input.c
{
	margin-left: 34px;
}
input.d
{
	margin-left: 5px;
}
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: black;  
 font-family: 'Nanum Gothic', sans-serif;
    font-size: 20px;  
      
        }  
            h2 {  
    color: indigo;  
     font-family: 'Nanum Gothic', sans-serif; 
    font-size:30px;  
	position: absolute;
  top: 0;
  RIGHT: 0;
  
}  
      
      form.m
      {
          	margin-left: 50px;
      }
        form.n
      {
          	margin-left: 500px;
      }
  input.b,.btn-group button{
  border-radius: 1px;
 	
  border: none;
  
  text-align: center;
  font-size: 18px;
  padding: 8px;
  width: 110px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  align:center;
  color:  #800000
  font-family: 'Nanum Gothic', sans-serif;
  margin-left: 3px;
  margin-top: 20px;
 }


input.b,.btn-group button{
  content: "";
  clear: both;
  display: table;
}

input.b,.btn-group button {
  border-right: none; 
}


input.b:hover,.btn-group button:hover {
 background-color: #B0E0E6;
  font-family: 'Nanum Gothic', sans-serif;
   font-size: 16px;
}     
.btn-group button
{
	position: absolute;
  top: 120;
  right: 19;
  
}  

          
    </style>  
</head>  
<body>  
  <center> 
   <div class="outer-box-frame">   
 
<form action="" method="POST" class="a">  
Password: <input type="password" name="pass1" class="c" ><br /> <br> 
Re-Password: <input type="password" name="pass2" class="d" ><br /> <br> 
<input type="submit" value="SUBMIT" name="submit" class="b"/>  
</form></center>
<?php
if(isset($_POST["submit"])){  
  
if(!empty($_POST['pass1']) && !empty($_POST['pass1'])) {  
    $pass1=$_POST['pass1'];  
	$pass2=$_POST['pass2'];  
  
 $conn=mysqli_connect('localhost','root','') or die(mysql_error());
    mysqli_select_db($conn,'mydb') or die("cannot select DB");  
	
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($pass1==$pass2)
{	
 $result = mysqli_query($conn, "UPDATE login set password = '".$pass1."'  where  email ='".$_SESSION['sess_emai']."'");
 echo  "Password changed";
}
else
{
	echo "Warning-> Password and conformation password both are not same!!!";
}}
 else {  
echo "Warning-> All fields are required !";  }}

?>  
</div>
</body>  
</html>  
  