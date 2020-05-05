<?php

include 'php/dbconnector.php';
// Establishing connection with server..

if(isset($_POST['email'])){
$email = $connect->real_escape_string($_POST[ 'email' ]);

// Fetching Values from URL.
//echo $email;

// Matching user input email and password with stored email and password in database.
$result = mysqli_query ($connect , "SELECT * FROM users WHERE email = '$email'" );
$data = mysqli_num_rows ($result);
//echo "ttt";
if ($data == 1){ //if person exists proceed
	$arrayfetch = mysqli_fetch_assoc($result);
	
}else {
	echo "That email does not exist with us%" ;
}
/*$status = $arrayfetch['account_status'];
if ($status == 0){
    $themail = $arrayfetch['email'];
    echo '33%';
}*/
}

if(isset($_POST['password'])){
   /* if ($status == 0){
    echo '33%';
    }else{*/
    $email = $connect->real_escape_string($_POST[ 'email' ]);
    $password = md5($connect->real_escape_string($_POST['password'])); // PasswordEncryption
    //echo($password);
        
    $result1 = mysqli_query ($connect , "SELECT * FROM users WHERE email = '$email'" );
    $arrayfetch1 = mysqli_fetch_assoc($result1); 
    
        $pass = $arrayfetch1['password']; //fetch password from database
        
	if($pass == $password){ //if password is correct log in
        //set session variables
    
        $email =$arrayfetch1['email'];
   
        session_start();
   
        $_SESSION['email'] = $email;
        echo('login successful');
        // header("location: home.php");
    } 
    else
    {
        echo('wrong password');
    } 

}
?>