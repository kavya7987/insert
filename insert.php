<?php
  include 'conect.php';

  if(isset($_POST['submit'])){

    $finame=$_POST['finame'];
    $lname=$_POST['lname'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $mob=$_POST['mob'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $adhar=$_POST['adhar'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $category=$_POST['category'];
    $skill=$_POST['skill'];
    $skills=implode(",",$skill);
    $address=$_POST['address'];

    $sql="INSERT INTO `users`( firstname,lastname,fname,mname,mobile,email,password,cpassword,aadhar,dob,gender,category ,skill, address ) VALUES('$finame','$lname','$fname','$mname','$mob','$email','$password','$cpassword','$adhar','$dob','$gender','$category','$skills','$address')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"data successfuly insert";
    }

  }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend><h1>USER INFORMATION FORM</h1> </legend>
        <form action="" method="post">
            <label for="fin">FIRST NAME</label>
            <input type="text" name="finame" id="fin">
            <label for="ln">LAST NAME</label>
            <input type="text" name="lname" id="ln"><br><br>
            <label for="fn">FATHER NAME</label>
            <input type="text" name="fname" id="fn">
            <label for="mn">MOTHER NAME</label>
            <input type="text" name="mname" id="mn"><br><br>
            <label for="mob">MOBILE NO.</label>
            <input type="tel" name="mob" id="mob">
            <label for="email">EMAIL ID</label>
            <input type="email" name="email" id="email"> <br><br> 
            <label for="pass">PASSWORD</label>
            <input type="password" name="password" id="pass">
            <label for="cpass">PASSWORD</label>
            <input type="password" name="cpassword" id="cpass"><br><br>
            <label for="aadh">AADHAR NO.</label>
            <input type="tel" name="adhar" id="aadh">
            <label for="dob">DATE OF BIRTH</label>
            <input type="datetime-local" name="dob" id="dob"><br><br>
            <label for=""><H3>GENDER</H3></label>
            <input type="radio" name="gender" id="gn" value="male">male
            <input type="radio" name="gender" id="gn" value="female">female
            <input type="radio" name="gender" id="gn" value="other">other<br><br>        <label for="category">CATEGORY</label>
            <select name="category" id="category">
            <option value="selected">selected</option>
            <option value="general">general</option>
            <option value="obc">obc</option>
            <option value="sc">sc</option>
            <option value="st">st</option>
            </select><br>
            <label for=""><h3>skill</h3></label>
            <input type="checkbox" name="skill[]" id="slill" value="html">html
            <input type="checkbox" name="skill[]" id="skill" value="css">css
            <input type="checkbox" name="skill[]" id="skill" value="javascript">javascript
            <input type="checkbox" name="skill[]" id="skill" value="jquery">jquery
            <input type="checkbox" name="skill[]" id="skill" value="php">php
            <input type="checkbox" name="skill[]" id="skill" value="mysql">mysql
            <input type="checkbox" name="skill[]" id="skill" value="bootstrap">bootstrap
            <input type="checkbox" name="skill[]" id="skill" value="laravel">laravel<br><br>  
            <label for="add">address</label>
            <textarea name="address" id="add" cols="30" rows="5"></textarea>
            <input type="submit" value="submit" name="submit"><br><br>
    </form>
   
    </fieldset>

</body>
</html>