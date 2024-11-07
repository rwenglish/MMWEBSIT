<?php 
include("./include/MMHeader.php");
$errors = array('fullname' => "", 'email' => "", 'message' => "", 'subject' => ""); 
$fullname = $email = $message = $subject = ""; 

if (isset($_POST['submit'])){ 
    if (empty($_POST['fullname'])){ 
        $errors['fullname'] = 'Please enter your full name';
    }else{ 
        $fullname = $_POST['fullname'];
    }
    $errors['firstname'] = 'a first name is required  <br />';
    $firstname = $_POST['firstname'];
    if(!preg_match('/^[a-zA-Z\s]+$/', $fullname)){
        $errors['fullname'] =  'invalid name!';
    }
    //need to add further form validation using strpos on the "@" and ".com" parameters to avoid incorrect email entry
    if(empty($_POST['email'])){ 
        $errors['email'] = 'Please enter an email address';
    }else{ 
        $email = $_POST['email'];
    }
    if(empty($_POST['subject'])){
        $errors['subject'] = "Please enter a subject";
    }else{
        $subject = $_POST['subject'];
    }
    if(empty($_POST['message'])){
        $errors['message']= "Please enter a message";
    }else{
        $message = $_POST['message'];
    }
    
}  
?>
<!DOCTYPE HTML> 
<html> 
<style>
        body{ 
            background: #000;
            color:black; 
        }
    </style>
<head> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link type = "text/css" rel ="stylesheet" href ="css/materialize.css"  media ="screen,projection"/>
  
</head> 

<h3>Contact Form</h3>
<div class="container">
<form action = "" method ="POST">
    <label for="fullname" style = "color:white">Full Name</label>
    <input type = "text" id = "fullname" name ="fullname" placeholder = "enter your name here..." value = "<?php echo htmlspecialchars($fullname);?>">
    <div class="red-text"><?php echo $errors['fullname'];?> </div>
    <label for="email" style = "color:white">Email</label>
    <input type="text" id ="email" name = "email" placeholder ="enter your email address" value = "<?php echo htmlspecialchars($email);?>">
    <div class="red-text"><?php echo $errors['email'];?></div>
    <label for ="subject" style ="color:white">Subject</label> 
    <input type="text" id = "subject" name = "subject" placeholder = "enter subject" value = "<?php echo htmlspecialchars ($subject);?>"> 
    <div class="red-text"><?php echo $errors['subject'];?></div> 
    <label for = "message" style = "color:white">Message</label> 
    <input type = "text" id = "message" name = "message" placeholder = "enter your message" value = "<?php echo htmlspecialchars($message);?>">
    <div class="red-text"><?php echo $errors[$message];?></div>
    <input type="submit" class="submit" value = "submit">
</div>
</html> 

