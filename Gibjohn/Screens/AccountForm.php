
<!DOCTYPE html>
<?php
include "Connection.php";
if (isset($_SESSION['TutorID'])){
  $TutorID = $_SESSION['TutorID'];
  $StudentID = $_SESSION['studentID'];
  $Tutor= "SELECT Tutorname,Email, PhoneNumber FROM tutordb WHERE TutorID = $TutorID ";
  $result = mysqli_query($conn, $Tutor);
  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['Tutorname'];
    $email = $row['Email'];
    $phoneNumber = $row['PhoneNumber'];
  } else {
    // Handle the error or provide a default value
    $name = $email = $phoneNumber= $StudentID = "Not available";
  }
} else { 
  $name = $email = $phoneNumber = $StudentID = "Not Signed in";}
 ?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="\Gibjohn/css/AccountForm.css">
</head>

<body> 
  
<div id="AccountForm" class="modal">
  
  <form class="modal-content animate">
    <div class="container">
      <label for="uname"><b>Name:</b></label>
      <?php echo $name; ?><br>
      <label for="ID"><b>TutorID:</b></label>
      <?php echo $_SESSION['TutorID']; ?><br>
      <label for="Email"><b>Email:</b></label>
      <?php echo $email; ?><br>
      <label for="PhoneNumber"><b>PhoneNumber:</b></label>
      <?php echo $phoneNumber; ?><br>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('AccountForm').style.display='none'" class="cancelbtn">Close</button>
      <a href="/Gibjohn/ServerScripts/LogOutScript.php" class="SignOutbtn">SignOut</a>
    </div>
  </form>
</div>