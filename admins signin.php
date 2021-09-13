<?php

if(isset($_POST['submit']))
{
  
   $name=$_POST['name'];
   $email=$_POST['email'];
   $address=$_POST['address'];
   $tel=$_POST['tel'];
   $sex=$_POST['sex'];
   $speciality=$_POST['speciality'];
   $password=$_POST['password'];


   $connect = mysqli_connect("localhost", "root", "", "hospital");
   $query = "INSERT INTO `admin`(`name`, `email`, `address`, `tel`, `sex`, `speciality`, `password`) VALUES ('$name','$email','$address','$tel','$sex','$speciality','$password')";

   $result=mysqli_query($connect,$query);

   if($result){
    echo $name;
    echo "";
       echo "data inserted";
      
   }
   else{
       echo "not inserted";
   }
  /* mysqli_free_result($result);
   mysqli_close($connect);*/
}



/*
if(isset($_POST['submit']))
{
  
  
   $name=$_POST['name'];
   $email=$_POST['email'];
   $address=$_POST['address'];
   $tel=$_POST['tel'];
   $sex=$_POST['sex'];
   $speciality=$_POST['speciality'];
   $password=$_POST['password'];
   $connect = mysqli_connect("localhost", "root", "", "hospital");
   
    $query="INSERT INTO `admin`(`name`, `email`, `address`, `sex`, `tel`, `password`, `speciality`) VALUES ('$name','$email',$address,'$sex','$tel','$password','$speciality')";

}

$result=mysqli_query($connect,$query);

if($result){
    echo "data inserted";
    echo"  ";
    echo $name;
}
else{
    echo "not inserted";
    echo $name;
}*/
?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admins signin</title>
    <link rel="stylesheet" href="css/hms.css">
    <link rel="stylesheet" href="css/background.css">

  </head>
  <body>
    <div class="login-container">
       <fieldset>
         <legend><h2>Admins Signin</h2></legend>
           <img src="images/grid-img2.png" alt="">
            <form class="" action="" method="post">
              Name <br><input type="text" name="name" value=""><br>
              email <br><input type="text" name="email" value=""><br>
              address<br> <input type="text" name="address" value=""><br>
              tel <br><input type="text" name="tel" value=""><br>
              sex <br><input type="radio" name="sex" value="male">male
                   <input type="radio" name="sex" value="female">female<br>
              speciality <br><input type="text" name="speciality" value=""><br>     
              password <br><input type="password" name="password" value="password"><br>
              <input type="submit" name="submit" value="Signin"><br>

            </form>
       </fieldset>

    </div>
  </body>
</html>
