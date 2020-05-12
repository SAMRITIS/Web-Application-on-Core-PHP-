<html>
<head>
    
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
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
                margin-left: 10px;
   font-color: #00008B;
    font-family: 'Nanum Gothic', sans-serif;
    font-size: 30px;  
	
}  
form.a
{
    font-family: 'Nanum Gothic', sans-serif;
	margin-left: 200px;
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
  margin-left: 50px;
  margin-top: 20px;
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
	margin-left: 23px;
}
         </style>  
  
<div class="outer-box-frame">

<body>  
     <center><h1>Forget Password</h1></center>  
     
 
<form action="" method="POST" class="a">  
Email ID: <input type="text" name="emai"><br /> <br> 
<input type="submit" value="SUBMIT" name="submit" class="b"/>  
</form>  
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['emai'])) {  
    $emai=$_POST['emai'];  
  
  
     $con = mysqli_connect('localhost','root','') or die(mysql_erro());  
    mysqli_select_db($con,'mydb') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE email='".$emai."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbemail=$row['email'];  
   
	
    }  
  
    if($emai == $dbemail)  
    {  
    session_start();  
    $_SESSION['sess_emai']=$emai;  
  
     
    header("Location: reset.php");  
    }  
    } else {  
    echo "Warning: Invalid Email Id !";  
    }  
  
} else {  
    echo "All fields are required !";  
}  
}  
?>
</div>
</head>
</html>