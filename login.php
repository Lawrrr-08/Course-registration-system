 <?php
session_start();
include "config.php";
?>

<?php

if(isset($_POST['login'])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    // $hash = "$2a$10$";
    // $string = "udsmstudenttalkinghere";
    // $hashString = $hash . $string;
    // $login_pass = crypt($login_pass , $hashString);

    $query = " SELECT * FROM `massuka'stable` WHERE email = '$email' AND password = '$password' LIMIT 1";
    $result = mysqli_query($connection, $query);

    $user = mysqli_fetch_assoc($result);

    if($user){
         $_SESSION['email'] = $user['email'];
         $_SESSION['password'] = $user['password'];
    }else {
        echo "user not found";
    }

}
        if(isset($_SESSION['email'])){   
        header("Location:Course_Registration.php");
}

// ?> 

 <!-- $usernameOfPerson = 'username' ;  -->

 <!-- <?php
// include 'config.php';

// if(isset($_POST['login'])){
//   $email=mysqli_real_escape_string($connection,$_POST['email']);
//   $password=mysqli_real_escape_string($connection,$_POST['password']);
//   // $hash_password=password_hash($password,PASSWORD_BCRYPT);
//   $sql="SELECT * FROM `lawrence'stable` WHERE email='$email' and password='$password'";
//   $result=mysqli_query($connection,$sql);
//   $row=mysqli_fetch_assoc($result);

//   if($row){
//     $email=$row['email'];
//     $sql="SELECT password,id FROM `lawrence'stable` WHERE password='$password'";
//     $pass_result=mysqli_query($connection,$sql);
//     $pass_row=mysqli_fetch_assoc($pass_result);

//     if($pass_row){
//       echo "Login successfully";
//       $_SESSION['id']=$pass_row['id'];
//       $_SESSION['email']=$email;

//       header("location:Course_Registration.php");
//     }
//     else {
//       echo "password is wrong";
//     }
//   }
// }
?> -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
       <link rel="stylesheet" href="login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript">
        function display(){
        if(document.myform.email.value == ""){
              alert("E-mail address is required");
              document.myform.email.value.focus();
              return false;
            }
            var emailid= document.myform.email.value;
              atpos=emailid.indexOf("@");
              dotpos=emailid.lastIndexOf(".");

              if(atpos < 1 || (dotpos - atpos) < 2){
                alert("Write the correct Email Address");
                document.myform.email.value.focus();
                return false;
              }
              if(document.myform.password.value == ""){
              alert("Password is required");
              document.myform.password.value;
              return false;
            }
        }
            </script>
    </head>
    <body >
        <div class="one">
        <ul>
            <li><a href="index.html">home</a></li>
            <li><a href="about_me.html">about me</a></li>
            <li><a href="login.php">courses</a></li>
            <!-- <li><a href="Registration_form.php">register</a></li> -->
            <!-- <li><a href="Course_Registration.php">courses</a></li> -->
            <!-- <li><a href="Course_Registration_Display.php">Course Display</a></li> -->
            <li><a href="Lawrence's CV.pdf">cv</a></li>
            <li><a href="Contacts.html">contacts</a></li>
            <li><a href="logout.php">log out</a></li>
            </ul>
        </div>
        <form id="form" name="myform" method="POST" onsubmit="return(display())" style="align-items: center;">
            <div class="form_info"> 
                <div class="two">
                <h1>LOGIN</h1>
            </div>
            <table align="center" style="margin-top: -140px;">
                <thead>  
    <tr>
        <div class="email">
        <th> <label for="email" >Email Address:</label></th>
          <th><input name="email" id="email" onfocus="return eerror.innerHTML= ''" type="email"></th><br>
         <p id="eerror" style="color:red;"></p><br><br>
         </div>
                      </tr>
                      <tr>
                        <div class="password">
                       <th><label for="password">Password:</label></th>
                       <th><input name="password" id="password" onfocus="return perror.innerHTML= ''" type="password"></th>
                       <p id="perror" style="color:red;"></p><br><br>
                       </div>
                         </tr>
                        </thead>
                    </table>
 <button name="login" type="submit" placeholder="register" >Login</button>
 <div class="three">
    <p>if you don't have an account then please sign up<a href="Registration_form.php">  here</a></p>
  </div> 
                </div>
                </form>

                </body>
                </html>