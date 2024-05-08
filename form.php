<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bapple</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
Photo by Piccinng: https://www.pexels.com/photo/photo-of-skyline-at-night-3075993/ 
</head>

<body>
    <header>
        <div class="navigation" >
            <a href="index.html" class="active">Home</a>
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
       Thank You!!!<br>
       Your submission is being processed
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
    <div class="TopB">
        <a href="index.html" class="Top whiteText">Return Home</a>
        </div>
</body>
