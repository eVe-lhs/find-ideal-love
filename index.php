 
<?php

session_start();



if (isset($_POST['submit'])) {

  if((empty($_POST['name'])) || (empty($_POST['age'])) || (empty($_POST['address']))  )

  {

echo " <script>alert('Fill All Fields .')</script>";


  } else {


if(isset($_POST['name']))
{
$_SESSION['name']=$_POST['name'] ;

}


if(isset($_POST['age']))
{
    $_SESSION['age']=$_POST['age'] ;

}

if(isset($_POST['sex']))
{
    $_SESSION['sex']=$_POST['sex'] ;

}
if(isset($_POST['address']))
{
$_SESSION['address']=$_POST['address'] ;
}
header("location:question1.php");
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ideal Finder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="container inverse">
  <h2 align="center">Your personal information</h2><br><br><br><br>
  <form class="form-horizontal" method="post" action="">
    <div class="form-group">
      <label class="col-sm-2 control-label">Name</label>
      <div class="col-sm-10">
        <input class="form-control" name="name" id="focusedInput" type="text" value="">
      </div>
<br><br><br><br>
  <label for="sel1" class="col-sm-2 control-label" >Gender </label>
  <select style="margin-left: 12px; margin-top: 3px "  class="col-sm-2 control-label" name="sex" id="sel1">
    <option value="Male" selected="selected" >Male</option>
    <option value="Female">Female</option>
  
  </select>

<br><br><br><br>
<label class="col-sm-2 control-label">Age</label>
      <div class="col-sm-10">
        <input class="form-control" name="age" id="focusedInput" type="number" value="">
      </div> <br><br><br><br>

<label class="col-sm-2 control-label">Address</label>
      <div class="col-sm-10">
        <input class="form-control" name="address" id="focusedInput" type="text" value="">
      </div> <br><br><br><br>

<INPUT  TYPE='SUBMIT' style='margin-left: 50%; height: 50px; width: 120px' CLASS='btn btn-primary' name='submit' VALUE='Submit'>

     </div>


  </form>
    </div>
    
</body>
</html>
