<?php
if(isset($_POST['abc'])){
 
   /// $username = "alhassan.cse@gmail.com";
   /// $hash = "5022a975905539d0b9af45ff6343be3b65d06a55";
    
    $username = $_POST['username'];
    $hash = $_POST['hash'];

    // Config variables. Consult http://api.txtlocal.com/docs for more info.
    $test = "0";

    // Data for text message. This is the text message data.
    ///$sender = "API Test"; // This is who the message appears to be from.
    $sender = $_POST['sender'];
    ///$numbers = "44777000000"; // A single number or a comma-seperated list of numbers
    $numbers = $_POST['number'];
    ///$message = "This is a test message from the PHP API script.";
    $message = $_POST['msg'];
    // 612 chars or less
    // A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
    $ch = curl_init('http://api.txtlocal.com/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
   
    curl_close($ch);
    if($result){
        echo "Message Send.";
    }
   
    
    
}


    // Authorisation details.
    
?>
