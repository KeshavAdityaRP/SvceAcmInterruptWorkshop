<?php  

include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST['email'];
	$firstname = $_POST['firstname'];
	$response = $_POST['response'];

    $sql = "INSERT INTO `feedbacks`(`email`,`name`,`feedback`) VALUES('$email','$firstname','$response')";	
    $ret=mysqli_query($db,$sql);

    if( $ret ) {
       echo "Feedback Sent";
    }
    else{
    	echo "Network issue";
    }
}

?>