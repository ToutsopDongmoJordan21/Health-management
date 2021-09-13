

<?php

if(isset($_POST['submit']))
{
  
   $name=$_POST['dname'];
   $email=$_POST['demail'];
   $address=$_POST['daddress'];
   $tel=$_POST['dtel'];
   $sex=$_POST['dsex'];
   $speciality=$_POST['dspeciality'];
   $password=$_POST['dpassword'];


   $connect = mysqli_connect("localhost", "root", "", "hospital");
   $query = "INSERT INTO `doctor`(`name`, `email`, `address`, `tel`, `sex`, `speciality`, `password`) VALUES ('$name','$email','$address','$tel','$sex','$speciality','$password')";

   $result=mysqli_query($connect,$query);

   if($result){
       echo "data inserted";
       echo $name;
   }
   else{
       echo "not inserted";
   }
  /* mysqli_free_result($result);
   mysqli_close($connect);*/
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patients login</title>
    <link rel="stylesheet" href="css/hms.css">
    <link rel="stylesheet" href="css/background.css">

  </head>
  <body>
    <div class="login-container">
       <fieldset>
         <legend><b><h2>Doctors Signin</h2></b></legend>
           <img src="images/grid-img1.png" alt="">
            <form class="" action="" method="post">
              Name <br><input type="text" name="dname" value=""><br>
              email <br>:<input type="text" name="demail" value=""><br>
              address <br>:<input type="text" name="daddress" value=""><br>
              tel <br><input type="text" name="dtel" value=""><br>
              sex <br><input type="radio" name="dsex" value="male">male <br>
                   <input type="radio" name="dsex" value="female">female<br>
              speciality <br><input type="text" name="dspeciality" value=""><br>
              password <br><input type="password" name="dpassword" value="password"><br>
              <input type="submit" name="submit" value="Signin"><br>

            </form>
       </fieldset>

    </div>
  </body>
</html>
