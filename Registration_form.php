<?php

session_start();
include "config.php" 
 ?>


<?php


if(isset($_POST['register'])){
    
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $surname= $_POST["surname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $CV = $_FILES['file']["name"];
    $facebook= $_POST["facebook"];
    $twitter= $_POST["twitter"];
    $instagram= $_POST["instagram"];

    //   $hash = "$2a$10$";
    //  $string = "udsmstudenttalkinghere";
    //  $hashString = $hash . $string;
    //  $password = crypt($password , $hashString);

     
        // $file = $username . "-" .$_FILES['file']['name'];
        // echo $file ;
        //  $file_loc = $_FILES['file']['tmp_name'];
        // $folder = "./files/";
        //  $new_file_name = strtolower($file);
        //  $final_file = str_replace(' ', '-', $new_file_name);
     
   
    // if (move_uploaded_file($file_loc, $folder . $final_file)) {
        
   $query = " INSERT INTO `massuka'stable`(firstname, middlename, surname, username, password, email, mobile, CV, facebook, twitter, instagram)  VALUES('$firstname',' $middlename',  '$surname' ,'$username','$password', '$email' , '$mobile' , '$CV', '$facebook', '$twitter', '$instagram')"; 

  $insertingData = mysqli_query($connection ,$query);

  if(!$insertingData ){
      echo "can not insert data to db ";
  } else{
    header("Location:login.php");
  }
 }


?> 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
        <link rel="stylesheet" href="Registration_form.css"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript">
          function display(){
            if(document.myform.firstname.value == "" ){
              alert("First name is required");
              document.myform.firstname.value;
              return false;
            }
            else if(!isNaN(document.myform.firstname.value)){
              alert("First name should not have a number");
              document.myform.firstname.value;
              return false;
            }
           if(document.myform.middlename.value == ""){
              alert("Middle name is required");
              document.myform.middlename.value;
              return false;
            }
            else if(!isNaN(document.myform.middlename.value)){
              alert("Middle name should not have a number");
              document.myform.middlename.value;
              return false;
            }
           if(document.myform.surname.value == ""){
              alert("Surname is required");
              document.myform.surname.value;
              return false;
            }
            else if(!isNaN(document.myform.surname.value)){
              alert("Surname should not have a number");
              document.myform.surname.value;
              return false;
            }
            if(document.myform.username.value == ""){
              alert("Username is required");
              document.myform.username.value;
              return false;
            }
           if(document.myform.password.value == ""){
              alert("Password is required");
              document.myform.password.value;
              return false;
            }
          //   var strongpass = new RegExp("^(?=.[A-Z])(?=.[0-9])(?=.{10,})");
		      //     if( strongpass.test(myform.password.value) == false ) {
          //   alert( "Password should contain atleast 1 uppercase,1 numeric character & should be 10 characters or more!" );
          //   document.myform.password.focus() ;
          //   return false;
          // }
            else if(document.myform.CV.value == ""){
              alert("Must upload the CV");
              document.myform.CV.value;
              return false;
            }
            else if(document.myform.email.value == ""){
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
                <h1>Registration Form</h1>
            </div>
                <table align="center" style="margin-top: -600px; padding-left: 45px; position: relative;">
                    <thead>  
                        <tr>
            <div class="fname">
               <th><label for="firstname">First name:</label></th>
               <th><input name="firstname" id="firstname" onfocus="return ferror.innerHTML= ''" type="text"></th>
               <p id="ferror" style="color:red;"></p><br><br>
               </div>
                            </tr>
                        <tr>
                <div class="middlename">
               <th><label for="middlename">Middle name:</label></th>
               <th><input name="middlename" id="middlename" onfocus="return ferror.innerHTML= ''" type="text"></th>
               <p id="ferror" style="color:red;"></p><br><br>
               </div>
                             </tr>
                            <tr>
                <div class="surname">
               <th><label for="surname">Surname:</label></th>
               <th><input name="surname" id="surname" onfocus="return ferror.innerHTML= ''" type="text"></th>
               <p id="ferror" style="color:red;"></p><br><br>
               </div>
                                 </tr>
                                <tr>
               <div class="username">
               <th><label for="username">Username:</label></th>
               <th><input name="username" id="username" onfocus="return lerror.innerHTML= ''" type="text" ></th>
               <p id="lerror" style="color:red;"></p><br><br>
              </div>
                     </tr>
                 <tr>
                <div class="password">
               <th><label for="password">Password:</label></th>
               <th><input name="password" id="password" onfocus="return perror.innerHTML= ''" type="password"></th>
               <p id="perror" style="color:red;"></p><br><br>
               </div>
                 </tr>
                    <tr>
              <div class="email">
              <th> <label for="email">Email Address:</label></th>
                <th><input name="email" id="email" onfocus="return eerror.innerHTML= ''" type="email"></th><br>
               <p id="eerror" style="color:red;"></p><br><br>
               </div>
                            </tr>
                            <tr>     
                <div class="mobile">
                <th> <label for="mobile">Mobile Number:</label></th>
               <th> <input name="mobile" id="mobile" onfocus="return eerror.innerHTML= ''" type="number"></th>
               <p id="merror" style="color:red;"></p><br><br>
               </div>
                        </tr>
                        <tr>
                <div class="CV">
                <th> <label for="CV">CV:</label></th>
               <th> <input name="CV" id="upload" onfocus="return eerror.innerHTML= ''" type="file"></th>
               <p id="merror" style="color:red;"></p><br><br>
               </div>
                            </tr>
                          <tr>
                            
                <div class="facebook">
                    <th> <label for="facebook">facebook:<i class="fa fa-facebook"></i></label></th>
               <th> <input name="facebook" id="facebook" onfocus="return eerror.innerHTML= ''" type="text"></th>
               <p id="ferror" style="color:red;"></p><br><br>
               </div>
                        </tr>
                          <tr>           
                <div class="instagram">
                    <th> <label for="instagram">instagram:<i class="fa fa-instagram"></i></label></th>
               <th> <input name="instagram" id="instagram" onfocus="return eerror.innerHTML= ''" type="text"></th>
               <p id="ierror" style="color:red;"></p><br><br>
               </div>
                  </tr>
                    <tr>  
                <div class="twitter">
                    <th> <label for="twitter">twitter:<i class="fa fa-twitter"></i></label></th>
               <th> <input name="twitter" id="twitter" onfocus="return eerror.innerHTML= ''" type="text"></th>
               <p id="terror" style="color: red;"></p><br><br>
               </div>
                        </tr> 
                    </thead>
                    </table>
             <button type="reset" placeholder="reset" >reset</button>     
            <button type="submit" placeholder="register" name="register" >register</button>
             <div class="three">
              <p>if you have already signed up then login<a href="login.php">  here</a></p>
            </div> 
           </div>
           </form>
           </body>
           </html>