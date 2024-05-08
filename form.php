<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bapple</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div class="navigation" >
            <a href="index.html"  class="active">Home</a>
            <a href="Research.html">Research</a>
            <a href="Objective.html">Objective</a>
            <a href="Blog.html">Blog</a>
            <a href="Resume.html">Resume</a>
            <a href="Contact.html">Contact</a>
        </div>
        <div class="logo">
            <img src="CWLogo.png" class="logo-fluid">
        </div>
    </header>
<div class="headerBox">
    <H1 class="BigText">
       Contact Me
    </H1>
</div>
<div class="containForm">
    <script src="Test.js"></script>
    <form name="contactForm" action="form.php" onsubmit="return validateForm()" method="post" target="submit.txt" required>
        <div class="formEl">
        <label for="fname" class="formText">First Name:</label>
        <input type="text" id="fname" class="split" name="firstname" placeholder="Your first name:">
    </div>
    <div class="formEl">
        <label for="lname" class="formText">Last Name:</label>
        <input type="text" id="lname" class="split" name="lastname" placeholder="Your last name:">
</div>
<div class="formEl">
            <label for="email" class="formText">E-Mail:</label>
        <input type="text" id="email" class="split" name="email" placeholder="example@example.com">
</div>
<div class="formEl">      
        <label for="Comments" class="formText">Comments:</label>
        <input type="text" id="Comments" name="comments" class="split" placeholder="comments:">
</div>  
        <input type="submit" value="Submit" class="submit">

      </form>
      <?php
if( isset($_POST['firstname'] ) && isset( $_POST['lastname'] )  && isset($_POST['email']))
{
    $txt= $_POST['firstname'].' - '.$_POST['lastname'] .' - '.$_POST['email'].' - '.$_POST['comments']. PHP_EOL; 
    file_put_contents('submit.txt', $txt, FILE_APPEND);
}
?>
</div>
<footer>
    

    <div class="Block item1">
Phone: 111-222-33-44
    </div>
    <div class="Block item2">

        </div>
    <div class="Block item3">
    Site by: Elijah Haney
    </div>
    <div class="Block item4">
Email: 128778@mylcti.org
    </div>
    <div class="Block item5">
        cc rights reserved
    </div>
    <div class="Block item6">
   Graphics by: Elijah Haney, and Pexels
    </div>
    <div class="Block item7">
    Address:     4500 Education Park Dr, Schnecksville, PA 18078
         </div>
         <div class="Block item8">
            code by: Elijah Haney
         </div>
</footer>

</html>