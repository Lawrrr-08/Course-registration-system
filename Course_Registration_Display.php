<?php
include 'config.php';

$result = mysqli_query($connection, "SELECT * FROM `lawrence'stable`");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Course_Registration_Displaying.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body>
<ul>
        <li><a class="one" href="index.html">home</a></li>
        <li><a  class="one" href="about_me.html">about me</a></li>
        <li><a href="login.php">Courses</a></li>
        <!-- <li><a class="one" href="Registration_form.php">register</a></li> -->
        <!-- <li><a class="one" href="Course_Registration.php">courses</a></li> -->
        <!-- <li><a class="one" href="Course_Registration_Display.php">Course Display</a></li> -->
        <li><a class="one" href="Lawrence's CV.pdf">cv</a></li>
        <li><a class="one" href="Contacts.html">contacts</a></li>
        <li><a href="logout.php">log out</a></li>
        
        </ul>

        <h1>Courses</h1>
        <?php foreach ($rows as $row) : ?>
        <table align="center" border="5" style="border-color: white; margin-top: -50px;">
        <tbody>
        <tr>
        <td><p>Course Name:</td>
        <td><?php echo $row['Course_Name'] ?></p></td>
        </tr>
        <tr>
       <td> <p>Course Code:</td>
       <td> <?php echo $row['Course_Code'] ?></p></td>
        </tr>
        <tr>
       <td> <p>Course Department:</td>
       <td> <?php echo $row['Course_Department'] ?></p></td>
        </tr>
        <tr>
       <td> <p>Semister Offered:</td>
       <td> <?php echo $row['Semister_Offered'] ?></p></td>
        </tr>
        <tr>
        <td><p>Academic Year:</td>
        <td> <?php echo $row['Academic_Year'] ?></p></td>
        </tr>
        <tr>
       <td> <p>Course Instructor:</td>
       <td> <?php echo $row['Course_Instructor'] ?></p></td>
        </tr>
        <tr>
       <td> <p>Grade:</td>
       <td> <?php echo $row['Grade'] ?></p></td>
        </tr>
        <tr>
       <td> <p>Course Description:</td>
       <td> <?php echo $row['Course_Description'] ?></p></td>
        </tr>
        </tbody>
        </table>
        <?php endforeach ?>
        </div>
        </body>

        </html>
