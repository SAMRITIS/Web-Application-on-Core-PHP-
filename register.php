<!doctype html>  
<html>  
<head>  
<title>Register</title>  
    <style>  

        body{  
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: black;  
    font-family: verdana;  
    font-size: 20px;  
      
        }  
            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 200%;  
}  
         h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 150%;  
}</style>  
</head>  


<script>
function validateForm() {
  var m = document.forms["myForm"]["user"].value;
  var n = document.forms["myForm"]["pass"].value;  
  var val = document.forms["myForm"]["mobil"].value;
  var y = document.forms["myForm"]["emai"].value;
  var z = document.forms["myForm"]["full_nam"].value;
  var p = document.forms["myForm"]["designatio"].value;
  var q = document.forms["myForm"]["addres"].value;
  if (m == "") {
    alert("User Name must be filled out");
    return false;
  }
  if (n == "") {
    alert("Pasword must be filled out");
    return false;
  }
  
  if (y == "") {
    alert("Email must be filled out");
    return false;
  }
  if (z == "") {
    alert("Full Name must be filled out");
    return false;
  }
  if (p == "") {
    alert("Designation must be filled out");
    return false;
  }
  if (q == "") {
    alert("Present Address must be filled out");
    return false;
  }
  if (/^\d{10}$/.test(val)==0) {
    alert("Invalid number; must be ten digits");
    return false;
  }
}
</script>
<body>  
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> 
    <center><h1>CREATE REGISTRATION AND LOGIN</h1></center>  
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>  
    <center><h2>Registration Form</h2></center> 
<form name="myForm" action="" method="POST" onsubmit="return validateForm()">  
    <legend>  
    <fieldset>  
    <br>      
Username: <input type="text" name="user" required/><br />  <br>
Password: <input type="password" name="pass" required/><br /> <br>
Email: <input type="email" name="emai" required/><br />   <br>  
Mobile No.<input type="text" name="mobil" required/><br />   <br>
Present Designation: <input type="text" name="designatio" required/><br />  <br> 
Present Address: <input type="text" name="addres" required/><br />   <br>
Full Name: <input type="text" name="full_nam" required/><br />  <br>
School: <select name="schoo" required/>
    <option value="Art">School of Studies in Art</option>
	 <option value="Engineering & Technology">School of Studies in Engineering & Technology</option>
    <option value="Law">School of Law</option>
   	<option value="Life Science">School of Studies in Life Science</option>
	<option value="Management & Commerce">School of Studies in Management & Commerce</option>
	<option value="Mathematical and Computational Science">School of Studies in Mathematical and Computational Science </option>
    <option value="Natural REsource">School of Studies in Natural Science</option>	
    <option value="Physical Science">School of Studies in Physical Science</option>
     <option value="Social Science">School of Studies in Social Science</option> 	
  </select><br><br>
Courses: <select name="course" required/>
   <option value="B.A.">B.A.</option>
   <option value="B.Com.">B.Com</option>
    <option value="B.Ed">B.Ed</option>
  <option value="MCA">MCA</option>
   <option value="B.A.LLB">B.A.LLB</option>
   <option value="B.Com LLB">B.Com LLB</option>
   <option value="B.P.Ed.">B.P.Ed.</option>
   <option value="B.PHARMA.">B.PHARMA</option>
   <option value="B.Sc.">B.Sc</option>
   <option value="B.Sw">B.Sw</option>
   <option value="B.Lib.">B.Lib</option>
   <option value="B.TECH.">B.TECH</option>
   <option value="BJMC">BJMC</option>
   <option value="D.Pharma.">D.Pharma.</option>
   <option value="M.A.">M.A</option>
   <option value="MCA">MCA</option>
   <option value="M.Ed.">M.Ed.</option>
   <option value="M.Lib.">M.Lib.</option>
   <option value="M.P.Ed.">M.P.Ed.</option>
   <option value="M.PHARMA">M.PHARMA</option>
   <option value="M.Sc.">M.Sc.</option>
   <option value="M.TECH.">M.TECH.</option>
   <option value="M.Com.">M.Com</option>
   <option value="M.Sw.">M.Sw</option>
   <option value="MBA">MBA</option>
   <option value="MMCJ">MMCJ</option>
   <option value="Ph.D.">Ph.D.</option>
  </select>   <br><br>
Depatment: <select name="departmen" required/>
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
<option value="Library Sc.">Library Sc</option>
<option value="Law">Law</option>
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

  </select><br><br>  
  <input type="submit" value="Register" name="submit" />  
              
        </fieldset>  
        </legend>  
</form>  
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
	$emai=$_POST['emai']; 
	$mobil=$_POST['mobil'];
    $designatio=$_POST['designatio'];
    $addres=$_POST['addres'];
    $full_nam=$_POST['full_nam'];
    $schoo=$_POST['schoo'];
    $departmen=$_POST['departmen'];
    $course=$_POST['course'];	
     $con = mysqli_connect('localhost','root','') or die(mysql_error());   
    mysqli_select_db($con,'mydb') or die("cannot select DB");  
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO login(username,password,email,MOBIL,Designation,Address,Full_name,school,courses,department) VALUES('$user','$pass','$emai','$mobil','$designatio','$addres','$full_nam','$schoo','$course','$departmen')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  
    echo "Account Successfully Created"; ?>
    
    <script type='text/javascript'>
    window.alert("Your Account has been successfully created go to login page and log in &  upload your recent photo");
    </script><?php
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>  