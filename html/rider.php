<?php
    //phpinfo();
?>
<?php
		$con = mysqli_connect('localhost','root','');
        mysqli_select_db($con, 'rider');
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mail = $_POST['mail'];
        $rideg = $_POST['rideg'];
        $phone = $_POST['phone'];
//		$query="Select * from riders where DepCity='$dep' and DesCity='$des' and Date='$date'";
        $query="Insert into rider(Fname,Lname,Email,RidesGiven,Phone) Values('$fname','$lname','$mail','$rideg','$phone')";
        
    if(!mysqli_query($con, $query))
    {
        echo 'Not Inserted';
    }else{
        echo 'Inserted Succesfully';
    }
    header("location:../index.html");
    
    
    //while($item = mysqli_fetch_assoc($result)){
    //}
?>