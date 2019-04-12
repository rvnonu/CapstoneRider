<?php
    //phpinfo();
?>
<?php
		$con = mysqli_connect('localhost','root','');
        mysqli_select_db($con, 'rider');
        $depc = $_POST['dep'];
        $desc = $_POST['des'];
        $dat = $_POST['date'];
        $tim = $_POST['time'];
        $ride = $_POST['rider'];
//		$query="Select * from riders where DepCity='$dep' and DesCity='$des' and Date='$date'";
        $query="Insert into riders(DepCity,DesCity,Date,Time,Rider) Values('$depc','$desc','$dat','$tim','$ride')";
        
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