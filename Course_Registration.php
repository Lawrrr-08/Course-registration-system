 <?php
session_start();
include "config.php";  
?>

<?php
if (isset($_POST['submit'])) {

    $Course_Name = $_POST["Course_Name"];
    $Course_Code = $_POST["Course_Code"];
    $Course_Department = $_POST["Course_Department"];
    $Semister_Offered = $_POST["Semister_Offered"];
    $Academic_Year = $_POST["Academic_Year"];
    $Course_Instructor = $_POST["Course_Instructor"];
    $Grade = $_POST["Grade"];
    $Course_Description = $_POST["Course_Description"];

    $query = " INSERT INTO `lawrence'stable`(Course_Name ,Course_Code ,Course_Department , Semister_Offered , Academic_Year, Course_Instructor,Grade, Course_Description) VALUES( '$Course_Name','$Course_Code','$Course_Department','$Semister_Offered','$Academic_Year','$Course_Instructor','$Grade','$Course_Description')";

    $insertingData = mysqli_query($connection, $query);

    if (!$insertingData) {
        echo "can not insert data to db ";
    } else {
        header("Location:Course_Registration_Display.php");
    }
}
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Course_Registration.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Course Registration</title>
    </head>
    <body>
      
      <ul>
        <li><a href="index.html">home</a></li>
        <li><a href="about_me.html">about me</a></li>
        <li><a href="login.php">Courses</a></li>
        <!-- <li><a href="Registration_form.php">register</a></li> -->
        <!-- <li><a href="Course_Registration.php">courses</a></li> -->
        <!-- <li><a href="Course_Registration_Display.php">Course Display</a></li> -->
        <li><a href="Lawrence's CV.pdf">cv</a></li>
        <li><a href="Contacts.html">contacts</a></li>
        <li><a href="logout.php">log out</a></li>
        </ul>
      

          <form method="POST"> 
            <h1>Course Enrollment</h1>    
        <table style="margin-top: -280.60px; padding-left: 120px;" align="center">
                  <tbody>
                      <tr>
            <td><label for="Course Name">Course Name:</label></td>
            <td><select name="Course_Name">
              <option value=""></option>
              <option value="Bachelor of Science in Agriculture">Bachelor of Science in Agriculture</option>
              <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
              <option value="Bachelor of Science in Computer Engineering">Bachelor of Science in Computer Engineering</option>
              <option value="Bachelor of Science in Business in Information Technology">Bachelor of Science in Business in Information Technology</option>
              <option value="Bachelor of Science in Statistics">Bachelor of Science in Statistics</option>
              <option value="Bachelor of Science in Land Management and Evaluation">Bachelor of Science in Land Management and Evaluation</option>
            </select></td><br><br>
                          </tr>
                      <tr>
            <td><label for="Course Code">Course Code:</label></td>
            <td><select name="Course_Code">
              <option value=""></option>
              <option value="CS 171">CS 171</option>
              <option value="CS 158">CS 158</option>
              <option value="IS 181">IS 181</option>
              <option value="IS 143">IS 143</option>
            </select></td><br><br>
                      </tr>
                      <tr>
            <td><label for="Course Department">Course Department:</label></td>
            <td><select name="Course_Department">
              <option value=""></option>
              <option value="CoICT">CoICT</option>
              <option value="CoET">CoET</option>
              <option value="SJMS">SJMS</option>
              <option value="UDBS">UDBS</option>
            </select></td><br><br>
              </tr>
                      <tr>
              <td><label for="Semister Offered">Semister Offered:</label></td>
           <td><select name="Semister_Offered">
              <option value=""></option>
              <option value="Semister 1">Semister 1</option>
              <option value="Semister 2">Semister 2</option>
            </select></td><br><br>
        </tr>
                      <tr>
           <td><label for="Academic Year">Academic Year:</label></td>
          <td><select name="Academic_Year">
            <option value=""></option>
            <option value="2020 / 2021">2020 / 2021</option>
            <option value="2019 / 2020">2019 / 2020</option>
            <option value="2018 / 2019">2018 / 2019</option>
            <option value="2017 / 2018">2017 / 2018</option>
          </select></td><br><br>
    </tr>
                      <tr>
         <td><label for="Course Instructor">Course Instructor:</label></td>
        <td><select name="Course_Instructor">
          <option value=""></option>
          <option value="Dr.Mushi">Dr.Mushi</option>
          <option value="Dr.Leonard">Dr.Leonard</option>
          <option value="Dr.Juma">Dr.Juma</option>
        </select></td><br><br>
</tr>
                      <tr>
        <td><label for="Grade">Grade:</label></td>
      <td><select name="Grade">
        <option value=""></option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="F">F</option>
      </select></td><br><br>
</tr>
<tr>
  <td><label>Course Description:</label></td>
  <td><input type="text" name="Course_Description"></td>
</tr>
                        </tbody>
                  </table> 
       <button type="reset" placeholder="reset" >reset</button>         
      <button type="submit" placeholder="submit" name="submit">submit</button>
          </form>
    </body>
</html>
