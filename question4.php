<?php

session_start();
if (isset($_POST['submit'])) {
if(isset($_POST['food1']))
{
    $_SESSION['Q11']=$_POST['food1'] ;

}

if(isset($_POST['food2']))
{
    $_SESSION['Q12']=$_POST['food2'] ;

}
    header("location:question5.php");
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <title>Question 4</title>

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
        <h1 align="center" style="margin-bottom: 15%"> Your food choice </h1>
    </p>
    <div class="Form-section">
        <span class="Form-title"><label>Which one do you prefer?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="food1" class="Form-label-radio" checked>
            <span class="Form-label-text">Vegetables</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="food1" class="Form-label-radio">
            <span class="Form-label-text">Meat</span>
        </label>
        
    </div>

    
    <div class="Form-section">
        <span class="Form-title"><label>Which kind of food do you like to eat everyday?</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="food2" class="Form-label-radio" checked >
            <span class="Form-label-text">Traditional Foods</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="food2" class="Form-label-radio">
            <span class="Form-label-text">Foods from foreign countries</span>
        </label>
        
    </div> 
   <button type="submit"  name="submit" class="btn btn-primary btn-lg">Next</button> 
  
</form>
</div>
</body>
</html>