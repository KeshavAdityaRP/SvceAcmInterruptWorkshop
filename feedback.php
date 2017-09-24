<?php  

include('config.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$email = $_POST['email'];
	$firstname = $_POST['firstname'];
	$response = $_POST['response'];


    $sql = "SELECT `*` FROM `feedbacks`";
    $return = mysqli_query($db,$sql);

    if(!$return) {

        $create = "CREATE TABLE feedbacks(id int(8) primary key auto_increment, email varchar(255), firstname varchar(255), response varchar(255))";

        $return_create = mysqli_query($db, $create);
    }

    $sql = "INSERT INTO `feedbacks`(`email`,`firstname`,`response`) VALUES('$email','$firstname','$response')";
            

    $ret=mysqli_query($db,$sql);

    //var_dump(mysqli_error($db));
    //die();

    if( $ret ) {
        $_SESSION["message"] = "Sucessfully Registered";
        header('Location: index.html');
    }
        
    else{
        $_SESSION["message"] = "Error in Registering";
        header('Location: index.html');
    } 

    
}

?>