<!doctype html>  
<html>  
<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
<head>  
<title>Login</title>  
    <style>  
    @media screen and (min-width: 50rem) {
  .outer-box-frame {
        border: 0.3rem solid #B22222;
      margin-left: 5rem  ; 
        padding: 5rem;
    max-width: 3800rem; // min-width - 2(padding + border)
  }
  body {
    background-color: #6C8C4C;
  }
}
.outer-box-frame {
    background-color: #fff;
  }
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 60px;  
    background-color: azure ;  
    
   font-family: 'Nanum Gothic', sans-serif;
    font-size: 100%  
      
        }  
            h1 {  
   font-color: #00008B;
    font-family: 'Nanum Gothic', sans-serif;
    font-size: 46px;  
	margin-top: 0px;
}  
form.a
{
margin-left: 170px;
	font-size: 14px;
	font-color: BlanchedAlmond;	
}

input.b{
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
  margin-left: 30px;
  margin-top: 30px;
 }


input.b {
  content: "";
  clear: both;
  display: table;
}

input.b {
  border-right: none; 
}


input.b:hover {
 background-color: #B0E0E6;
  font-family: 'Nanum Gothic', sans-serif;
   font-size: 16px;
}
input.c
{
	margin-left: 25px;
}
input.d
{
	margin-left: 22px;
}
         </style>  
</head>  
<body>  

<div class="outer-box-frame">
     <center><h1>ADMIN LOGIN </h1></center>  
     
 
<form action="" method="POST" class="a">  
Admin Id: <input type="text" name="user"  class="c"><br /> <br> 
Password: <input type="password" name="pass" class="d"><br />   
<input type="submit" value="Login" name="submit" class="b"/>  
</form>  
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
  $conn = mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($conn,'mydb') or die("cannot select DB");  
   
    if($user == 'SAURABH' && $pass == '123456')  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: member2.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  

?>
</div>
</body>  
</html>   