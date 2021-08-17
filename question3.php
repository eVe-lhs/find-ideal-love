<?php

session_start();
if (isset($_POST['submit'])) {
if(isset($_POST['problem']))
{
    $_SESSION['Q7']=$_POST['problem'] ;

}

if(isset($_POST['inspire']))
{
    $_SESSION['Q8']=$_POST['inspire'] ;

}
if(isset($_POST['alone']))
{
$_SESSION['Q9']=$_POST['alone'] ;
}
if(isset($_POST['thing']))
{
$_SESSION['Q10']=$_POST['thing'] ;
}

    header("location:question4.php");
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <title>Question 3</title>

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
        <h1 align="center" style="margin-bottom: 15%"> Your habits </h1>
    </p>
    <div class="Form-section">
        <span class="Form-title"><label>How do you decide when you face some problem?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="problem" class="Form-label-radio" checked>
            <span class="Form-label-text">Just look for myself</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="problem" class="Form-label-radio">
            <span class="Form-label-text">Always look for others</span>
        </label>
        
    </div>

    
    <div class="Form-section">
        <span class="Form-title"><label>Which things inspire you when you feel depressed?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="inspire" class="Form-label-radio" checked >
            <span class="Form-label-text">Just listen some motivational speech or kind of things </span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="inspire" class="Form-label-radio">
            <span class="Form-label-text">My family’s inspirational speech</span>
        </label>
        
    </div>

    <div class="Form-section">
        <span class="Form-title"><label>What do you do when you are alone?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="alone" class="Form-label-radio" checked >
            <span class="Form-label-text">Just sleep</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="alone" class="Form-label-radio">
            <span class="Form-label-text">Do some hobbies</span>
        </label>
        
    </div>

    <div class="Form-section">
        <span class="Form-title"><label>Which thing you prefer?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="thing" class="Form-label-radio" checked >
            <span class="Form-label-text">Movies</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="thing" class="Form-label-radio">
            <span class="Form-label-text">Books</span>
        </label>
        
    </div>


   
   <button type="submit"  name="submit" class="btn btn-primary btn-lg">Next</button> 
  
</form>
</div>
</body>
</html>