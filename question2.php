<?php

session_start();
if (isset($_POST['submit'])) {
if(isset($_POST['headHeart']))
{
    $_SESSION['Q4']=$_POST['headHeart'] ;

}

if(isset($_POST['precendence']))
{
    $_SESSION['Q5']=$_POST['precendence'] ;

}
if(isset($_POST['ideal']))
{
$_SESSION['Q6']=$_POST['ideal'] ;
}


    header("location:question3.php");
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <title>Question 2</title>

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
        <h1 align="center" style="margin-bottom: 15%"> Who do you wanna be with? </h1>
    </p>
    <div class="Form-section">
        <span class="Form-title"><label>Which one do you prefer?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="headHeart" class="Form-label-radio" checked>
            <span class="Form-label-text">One who decide with head</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="headHeart" class="Form-label-radio">
            <span class="Form-label-text">One who decide with heart</span>
        </label>
        
    </div>

    
    <div class="Form-section">
        <span class="Form-title"><label>Which one do you prefer?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="precendence" class="Form-label-radio" checked >
            <span class="Form-label-text">One who precedent his/her parents</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="precendence" class="Form-label-radio">
            <span class="Form-label-text">One who precendent you</span>
        </label>
        
    </div>

    

    <div class="Form-section">
        <span class="Form-title"><label>What is your ideal type of person ?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="ideal" class="Form-label-radio" checked >
            <span class="Form-label-text">Kind-hearted understanding person</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="ideal" class="Form-label-radio">
            <span class="Form-label-text">intelligent outstanding person</span>
        </label>
        
    </div>


   
   <button type="submit"  name="submit" class="btn btn-primary btn-lg">Next</button> 
  
</form>
</div>
</body>
</html>