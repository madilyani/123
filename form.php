<?php 
if(isset($_POST['submit'])){
    $to = "madilyani1@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $company = $_POST['name'];
    $phone = $_POST['phone'];
    $comments = $_POST['text'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['comments'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" ;

    $headers = "From:" . "ejen@dekordizajn.rs";
    mail($to,$subject,$message,$headers);// sends a copy of the message to the sender
    header('Location: http://yudraxa.mycpanel.rs/index.html?q=success');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
    else{
        header('Location: http://yudraxa.mycpanel.rs/index.html?q=error');
    }

?>