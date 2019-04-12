<?php
    //phpinfo();
?>
<?php
		$con = mysqli_connect('localhost','root','');
		mysqli_select_db($con, 'rider');
//		$query="Select * from riders where DepCity='$dep' and DesCity='$des' and Date='$date'";
		$query="Select * from riders";
    $result=mysqli_query($con, $query);
    
    
    //while($item = mysqli_fetch_assoc($result)){
    //} 
?>  
		<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Rider is a carpooling application that provides drivers with the ability to create ride offers and passengers to join available ride offers.">
    <meta name="keywords" content="rider, carpool, carpooling, car, pool, offer ride">
    <meta name="language" content="English">
    <meta name="theme-color" content="#2c3e50">
    <meta name="viewport" content="width=device-width">
    <title>Available Ride(s) - Rider</title>
    <link href="https://fonts.googleapis.com/css?family=Capriola" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/reset.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
  </head>
  <body>
                
    <div id="container">

      <nav id="navbar">
        <a href="../index.html"><img src="../images/rider-big.png" alt="rider-logo" title="Rider | Live, Ride, Share"></a>
        <input type="checkbox" id="burger-toggle">
        <label id="burger" for="burger-toggle">
          <div></div>
        </label>
        <ul>
          <li>
            <a href="../index.html" class="shortcut">Home</a>
          </li>
          <li>
            <a href="./create-ride-offer.html" class="shortcut">Offer Ride</a>
          </li>
          <li>
            <a href="./signup.html" class="shortcut">Sign Up</a>
          </li>
          <li>
          <a href="./rider.html" class="shortcut">Create Rider Profile</a>          </li>
               <li>
            <a href="#" class="shortcut">Available Rides</a>
          </li>
        </ul>
      </nav>

      <section style="background-image: url('../images/1205-taxis5.jpg');  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;" class="spread">
        <h2>Available Ride(s)</h2>
        <ul id="rides">
          <?php
            $temp = '';
            foreach($result as $item){ 
              $temp.=  '<li class="ride"><div><ul><li><strong>Departure: </strong>';
              $temp.= $item['DepCity'];
              $temp.=  '</li><li><strong>Destination: </strong>';
              $temp.= $item['DesCity'];
              $temp.= '</li><li><strong>Date: </strong>';
              $temp.= $item['Date'];
              $temp.= '</li><li><strong>Time: </strong>';
              $temp.= $item['Time']; 
              $temp.= '</li><li><strong>Rider: </strong>'; 
              $temp.= $item['Rider'];
              $temp.= '</li></ul></div>';
            }
            echo $temp;
          ?>
        </ul>