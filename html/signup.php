<?php
		$con = mysqli_connect('localhost','root','');
        mysqli_select_db($con, 'rider');
        $name = $_POST['name'];
        $depc = $_POST['depcity'];
        $desc = $_POST['descity'];
        $seat = $_POST['seat'];
        $email = $_POST['mail'];
        $pass = $_POST['pin'];
        $phone = $_POST['phone'];
//		$query="Select * from riders where DepCity='$dep' and DesCity='$des' and Date='$date'";
        $query="INSERT INTO signup(Fname,DepCity,DesCity,Seat,Email,Pass,Phone) Values('$name','$depc','$desc','$seat'$email','$pass','$phone')";
        
    if(!mysqli_query($con, $query))
    {
      echo "Registration Unsuccesful";
    }
    else{
      echo "Registration Succesful! Welcome $name in Rider Family!";
    }
    
			
			?>		
			
     