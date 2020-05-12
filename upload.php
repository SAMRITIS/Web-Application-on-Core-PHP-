<?php   

session_start();  
if(!isset($_SESSION['sess_user']) )
{  
    header("location:member.php");  
} 
else 
{  }

if(isset($_POST['submit']))
    {
     if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
     {
        echo " erroring ";
     }
     else
     {
        $image = $_FILES['image']['tmp_name'];
        $image = addslashes(file_get_contents($image));
        saveimage($image);
     }
    }
    function saveimage($image)
    {
        $dbcon = mysqli_connect('localhost','root','','mydb') or die(mysql_error());
   
		
        $qry="update login set img = '".$image."' where  username ='".$_SESSION['sess_user']."'";
        $result=mysqli_query($dbcon,$qry);
        if($result)
        {
            echo " <br/>Image uploaded.";
            header("location:member.php");
        }
        else
        {
            echo " error set ";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>

</head>
<style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
 font-family: 'Nanum Gothic', sans-serif;
    font-size: 20px;  
      
        }  
            h2 {  
    color: indigo;  
     font-family: 'Nanum Gothic', sans-serif; 
    font-size:50px;  
	position: absolute;
  top: 0;
  RIGHT: 0;
  
}  h6
      {  
    color: indigo;  
     font-family: 'Nanum Gothic', sans-serif; 
    font-size:16px;  
	
  
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
  margin-left: 80px;
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
<body>
<h2>Welcome,  <?=$_SESSION['sess_user'];?>! </h2>  
 <h6>Image size should less than 50 KB </h6>
<form method="post" enctype="multipart/form-data">
<input type="file" name="image"/>
<input type="submit" name="submit" value="Upload"/>
</form>

</body>
</html>