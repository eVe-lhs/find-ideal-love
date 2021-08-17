<?php

session_start();
$sex = $_SESSION['sex'];
if (isset($_POST['submit'])) {
if(isset($_POST['hate']))
{
    $_SESSION['Q13']=$_POST['hate'] ;

}

if(isset($_POST['sociability']))
{
    $_SESSION['Q14']=$_POST['sociability'] ;

}
if(isset($_POST['anger']))
{
    $_SESSION['Q15']=$_POST['anger'] ;

}
    header("location:result_boy.php");}


?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <title>Question 5</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Titillium+Web:400,700,400italic,700italic|Open+Sans">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/fontawesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="check-radio.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<div style="margin-top: 10%">
<form class="Form" action="" method="post">
    <p>
        <h1 align="center" style="margin-bottom: 15%"> Your mindset </h1>
    </p>
    <div class="Form-section">
        <span class="Form-title"><label>Which kind of person do you hate more?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="hate" class="Form-label-radio" checked>
            <span class="Form-label-text">Person who tell lies </span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="hate" class="Form-label-radio">
            <span class="Form-label-text">Person who tell hurtful truths</span>
        </label>
        
    </div>

    
    <div class="Form-section">
        <span class="Form-title"><label>Which kind of sociability do you prefer?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="sociability" class="Form-label-radio" checked >
            <span class="Form-label-text">One who looks for new friends, sociable</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="sociability" class="Form-label-radio">
            <span class="Form-label-text">One who stay alone by themselves, introvert</span>
        </label>
        
    </div> 
    <div class="Form-section">
        <span class="Form-title"><label>Which one are you when you get annoyed?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="anger" class="Form-label-radio" checked >
            <span class="Form-label-text">Easily get angry and irritable</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="anger" class="Form-label-radio">
            <span class="Form-label-text">Keep cool</span>
        </label>
        
    </div> 
   <button type="submit"  name="submit" class="btn btn-primary btn-lg">Next</button> 
  
</form>
</div>
</body>
</html>