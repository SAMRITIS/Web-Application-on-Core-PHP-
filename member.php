<?php   

session_start();  
if(!isset($_SESSION['sess_user']) ){  
    header("location:login.php");  
} else {  }

 $conn = mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($conn,'mydb') or die("cannot select DB");  
	
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn, "SELECT img FROM login where  username ='".$_SESSION['sess_user']."'");

while ($row = mysqli_fetch_array($result)) {
     
      	echo '<img src="data:img/jpeg;base64,'.base64_encode( $row['img'] ).'" width="100" height="100" /> &nbsp'; 
      	
      echo "</div>";
    }
?>
<br>
<div class="cmd">
<button onclick="upload()">Photo</button>
</div>
<script>
function upload()
{  window.open("upload.php","_self");}
</script>
<br>
<?php
	
 $result = mysqli_query($conn, "SELECT email,MOBIL,Designation,img,Address,Full_name,school,courses,department FROM login where  username ='".$_SESSION['sess_user']."'");
if (mysqli_num_rows($result) > 0) 
{
    
  $row = mysqli_fetch_assoc($result); 
      

      echo '<div style="border: 5px solid #B22222;" margin-left= "100px";>';
                       echo "Full Name ______________      "   . $row["Full_name"]; echo "<p>       </p>";
                
		        echo "Mobile ______________      "   . $row["MOBIL"]; echo "<p>       </p>";
				echo "Designation ______________     "   . $row["Designation"]; echo "<p>       </p>";
				echo "Address ______________     "   . $row["Address"]; echo "<p>       </p>";
			 echo " Email ______________      "   . $row["email"];     echo "<p>       </p>";
				echo "School ______________     "   . $row["school"]; echo "<p>       </p>";
				echo "Courses ______________     "   . $row["courses"]; echo "<p>       </p>";
				echo "Deparment ______________      "   . $row["department"]; echo "<p>       </p>";
				
			
 //   }
} else {
    echo "0 results";
}


?>  



 
 
<head>  
<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
<title>Welcome</title>

<script>
function logout()
{  window.open("login.php","_self");}
</script>
<div class="btn-group">
  
  <button onclick="logout()">Log Out</button>
 
  </div>




    <style>   
     @media screen and (min-width: 50rem) {
  .outer-box-frame {
      margin-top: 0px;
        border: 0.3rem solid #B22222;
      margin-left: 5rem  ; 
        padding: 5rem;
    max-width: 3800rem; // min-width - 2(padding + border)
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
    font-size:50px;  
	position: absolute;
  top: 50;
  RIGHT: 19;
  
}  
      
  input.b,.btn-group button,.cmd button{
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
 .btn-group button
 {
	 position: absolute;
	 right: 0;
	 top: 0;
 }
 .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
span {
  content: "\00A9";
}
</style>  
</head>  
<body>  
   <br><br>
      
<h2>Welcome,  <?=$_SESSION['sess_user'];?>! </h2>  
 </div>
</body>  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="footer">

  <p>All Copy Right Reserved <span>&#169;</span> STEPLAR UNIVERSITY</p>
</div>
</html>  
  