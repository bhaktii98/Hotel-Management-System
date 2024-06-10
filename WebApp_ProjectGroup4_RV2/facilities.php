<?php

include 'config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <title>Hotel SAB</title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./admin/css/roombook.css">
    
    <link rel="stylesheet" href="popup.css">
    <link rel="stylesheet" href="./css/home.css">

    <style>
      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
      }
    </style>
</head>

<body>
  <nav>
    <div class="logo">
      <img class="bluebirdlogo" src="./image/bluebirdlogo.png" alt="logo">
      <p>S.A.B</p>
    </div>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="roombooking.php">Rooms</a></li>
      <li><a href="facilities.php">Facilites</a></li>
      <li><a href="./contactus.html">Contact Us</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>
    </ul>
  </nav>

    <section id="thirdsection">
      
      
      <div class="class"><h1>≼ Facilities ≽</h1></div>
      <div class="facility">
        <div class="box">
          <h2> <a href="products.php" style="color: white; text-decoration: none;">Food Services</a></h2>
        </div>
      
        <div class="box">
          <a href="#" onclick="showPopup()" style="text-decoration: none;"><h2>Cleaning</h2></a> 
        </div>
        <div class="box">
          <a href="#" onclick="showPopup()" style="text-decoration: none;"><h2>Plumbing</h2></a>
        </div>
        <div class="box">
          <a href="#" onclick="showPopup()" style="text-decoration: none;"><h2>Electrical</h2></a>
        </div>
      </div>
      
    </section>

  

    
  <section id="contactus">
    <div class="social">
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-solid fa-envelope"></i>
    </div>
    <div class="createdby">
      <h5>Created by @SAB</h5>
    </div>
  </section>
  <div id="mainPopup" class="popup">
        <div class="popup-content">
            <button onclick="showScheduleForm()">Schedule</button>
            <button onclick="showUrgentForm()">Urgent</button>
        </div>
    </div>

    <div id="schedulePopup" class="popup">
        <div class="popup-content">
            <form action="schedule.php" method="POST">
                <label for="roomNo">Room No:</label><br>
                <input type="text" id="roomNo" name="roomNo" required><br><br>
                <label for="time">Time:</label><br>
                <input type="time" id="time" name="time" required><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <div id="urgentPopup" class="popup">
        <div class="popup-content">
            <form action="urgent.php" method="POST">
                <label for="urgentRoomNo">Room No:</label><br>
                <input type="text" id="urgentRoomNo" name="urgentRoomNo" required><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <script>
        function showPopup() {
            var popup = document.getElementById("mainPopup");
            popup.style.display = "flex";
        }

        function showScheduleForm() {
            var schedulePopup = document.getElementById("schedulePopup");
            schedulePopup.style.display = "flex";
        }

        function showUrgentForm() {
            var urgentPopup = document.getElementById("urgentPopup");
            urgentPopup.style.display = "flex";
        }
    </script>
    <script>

      var bookbox = document.getElementById("guestdetailpanel");

      openbookbox = () =>{
        bookbox.style.display = "flex";
      }
      closebox = () =>{
        bookbox.style.display = "none";
      }
    </script>
</body>


</html>