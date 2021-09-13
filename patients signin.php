<?php
   /* define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS' ,'');
    define('DB_NAME', 'hospital');
    $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    // Check connection
    if (mysqli_connect_errno())
    {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
     */

    if(isset($_POST['submit']))
{
  
   $name=$_POST['name'];
   $email=$_POST['email'];
   $address=$_POST['address'];
   $tel=$_POST['tel'];
   $sex=$_POST['sex'];
   $password=$_POST['password'];
   $connect = mysqli_connect("localhost", "root", "", "hospital");
   
    $query="INSERT INTO `patient`(`name`, `email`, `address`, `tel`, `sex`, `password`) VALUES ('$name','$email','$address','$tel','$sex','$password')";

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
         <legend><h2>Patients Signin</h2></legend>
           <img src="images/grid-img3.png" alt="">
            <form class="" action="" method="post">
              Name <br><input type="text" name="name" value=""><br>
            
              email <br><input type="text" name="email" value=""><br>
              address <br><input type="text" name="" value=""><br>
              tel <br><input type="text" name="tel" value=""><br>
              sex <br><input type="radio" name="sex" value="male">male
                   <input type="radio" name="sex" value="female">female<br>
              password <br><input type="password" name="password" value=""><br>
              <input type="submit" name="submit" value="Signin"><br>

            </form>
       </fieldset>

    </div>
  </body>
</html>
