<!doctype html>  
<html>  
<head>  
<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
<title>Welcome ADMIN</title>  
<script>
function logout()
{  window.open("login2.php","_self");}
</script>
    <style>   
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
	margin-top: 0px;		
    color: indigo;  
     font-family: 'Nanum Gothic', sans-serif; 
    font-size:50px;  
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
  top: 80px;
  right: 90px;
  
}              
          
    </style> 
	<h2>Welcome ADMIN </h2>  
	
	
	<div class="btn-group">
  <button onclick="logout()">Log Out</button>
</div>

	<form action="" method="POST">  
    <legend>  
    <fieldset>  
Depatment: <select name="depart"> 
<option value="Anthropology & Tribal Development">Anthropology & Tribal Development</option> 
<option value="Bio Technology"> Bio Technology</option>
<option value="Botany"> Botany</option>
<option value="Chemical Engineering"> Chemical Engineering</option>
<option value="Civil Engineering"> Civil Engineering</option>
<option value="Commerce"> Commerce</option>
<option value="Chemistry"> Chemistry</option>
<option value="Computer Sc. & Engineering">Computer Sc. & Engineering</option>
<option value="Computer Sc. & IT">Computer Sc. & IT</option>
<option value="Economics">Economics</option>
<option value="Education">Education</option>
<option value="Electronic & Comm. Engineering">Electronic & Comm. Engineering</option>
<option value="English">English</option>
<option value="Forensic Sc.">Forensic Sc</option>
<option value="Forestry & Wild Life">Forestry & Wild Life</option>
<option value="Hindi">Hindi</option>
<option value="History">History</option>
<option value="Industrial & Production Engineering">Industrial & Production Engineering</option>
<option value="Information Technology">Information Technology</option>
<option value="JOUNALISM & MASS COMMUNICATION">JOUNALISM & MASS COMMUNICATION</option>
<option value="Law">Law</option>
<option value="Library Sc.">Library Sc</option>
<option value="Management Studies">Management Studies</option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
<option value="Pharmacy">Pharmacy</option>
<option value="Political Sc.">Political Sc</option>
<option value="Pure & Applied Maths">Pure & Applied Maths</option>
<option value="Pure and Applied Physics">Pure and Applied Physics</option>
<option value="Physical Education">Physical Education</option>
<option value="Rural Technology">Rural Technology</option>
<option value="Social Work">Social Work</option>
<option value="Zoology">Zoology</option>

  </select>
  
 <input type="submit" value="Search List " name="submit" class="b"/>  
 </fieldset>  
        </legend>  
</form>  
<br>
</head>  
<body>  
   


</body>  
</html>  
<?php   
session_start();  
if(!isset($_SESSION['sess_user']) ){  
    header("location:login2.php");  
} else {  }

 $conn = mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($conn,'mydb') or die("cannot select DB");  
	
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
   if(isset($_POST["submit"])){  
   $depart=$_POST['depart'];
   echo "<p>       </p>";
   print $depart;
   
       $result = mysqli_query($conn,"SELECT * FROM login WHERE department='".$depart."'")or die("Error: " . mysqli_error($conn));

  
     echo "<table border='1'>
<tr>
<th>FUll NAME</th>
<th>EMAIL</th>
<th>MOBILE</th>
<th>DESIGNATION</th>
<th>ADDRESS</th>

<th>SCHOOL</th>
<th>COURSES</th>
<th>DEPARTMENT</th>
</tr>";

echo "<p>       </p>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Full_Name'] . "</td>";

echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['MOBIL'] . "</td>";
echo "<td>" . $row['Designation'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";

echo "<td>" . $row['school'] . "</td>";
echo "<td>" . $row['courses'] . "</td>";
echo "<td>" . $row['department'] . "</td>";
echo "</tr>";
   }
   echo "</table>";}

   mysqli_close($conn);
?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
