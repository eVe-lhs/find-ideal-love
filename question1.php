<?php

session_start();
if (isset($_POST['submit'])) {
if(isset($_POST['perApp']))
{
    $_SESSION['Q1']=$_POST['perApp'] ;

}

if(isset($_POST['hapWea']))
{
    $_SESSION['Q2']=$_POST['hapWea'] ;

}
if(isset($_POST['important']))
{
$_SESSION['Q3']=$_POST['important'] ;
}


    header("location:question2.php");
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <title>Question 1</title>

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
        <h1 align="center" style="margin-bottom: 15%"> Your idea of life </h1>
    </p>
    <div class="Form-section">
        <span class="Form-title"><label>Which one do you prefer?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="perApp" class="Form-label-radio" checked>
            <span class="Form-label-text">Personality</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="perApp" class="Form-label-radio">
            <span class="Form-label-text">Appearance</span>
        </label>
        
    </div>

    
    <div class="Form-section">
        <span class="Form-title"><label>Which one do you prefer?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="hapWea" class="Form-label-radio" checked >
            <span class="Form-label-text">Happiness</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="hapWea" class="Form-label-radio">
            <span class="Form-label-text">Wealth</span>
        </label>
        
    </div>

    

    <div class="Form-section">
        <span class="Form-title"><label>What do you think is the most important thing in life?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="important" class="Form-label-radio" checked >
            <span class="Form-label-text">Love</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="important" class="Form-label-radio">
            <span class="Form-label-text">Living (Sarr wut nay yay)</span>
        </label>
        
    </div>


   
   <button type="submit"  name="submit" class="btn btn-primary btn-lg">Next</button> 
  
</form>
</div>
</body>
</html>