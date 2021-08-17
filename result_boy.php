<?php
include "process.php";

session_start();

$type = find_type(
$_SESSION['Q1']
,$_SESSION['Q2']
, $_SESSION['Q3']
, $_SESSION['Q4']
, $_SESSION['Q5']
, $_SESSION['Q6']
, $_SESSION['Q7']
, $_SESSION['Q8']
, $_SESSION['Q9']
, $_SESSION['Q10']
, $_SESSION['Q11']
, $_SESSION['Q12']
, $_SESSION['Q13']
, $_SESSION['Q14']
, $_SESSION['Q15']
);
$name = $_SESSION['name'];
$age = $_SESSION['age'];
$address = $_SESSION['address'];
$sex = $_SESSION['sex'];
$myfile = fopen("ideal.pl", "a+") or die("Unable to open file!");

fprintf($myfile , "'$name and $type'.\n" );
?>

<html lang="en"><head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Resultat</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>



  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Material Bootstrap Wizard by Creative Tim</title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">




    <div class="image-container set-full-height" style="background-image: url('bg.jpg')">
      <!--   Creative Tim Branding   -->
  

    <!--  Made With Material Kit  -->
    

      <!--   Big container   -->
      <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <!-- Wizard container -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="red" id="wizard">
                        <form action="" method="">
                    <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                          <div class="wizard-header">
                              <h3 class="wizard-title">
                                The caculated results 
                              </h3>
                  <h5>These results are just imaginaries and dont take seriously.</h5>
                          </div>
                <div class="wizard-navigation">
                  


<?php
print("<p class='bg-primary' style='font-weight:bold;font-size:18px'> <font style='margin-left:4px;font-family:Roboto'>Your name : $name</font></p>");
print("<p class='bg-info'  style='font-weight:bold;font-size:18px' ><font style='margin-left:4px;font-family:Roboto'>Your Gender  : $sex</font></p>");
print("<p class='bg-info'  style='font-weight:bold;font-size:18px' ><font style='margin-left:4px;font-family:Roboto'>Your age  : $age</font></p>");
print("<p class='bg-warning'  style='font-weight:bold;font-size:18px'><font style='margin-left:4px;font-family:Roboto'>Your address  : $address</font></p>");
print("<p class='bg-success'  style='font-weight:bold;font-size:18px'><font style='margin-left:4px;font-family:Roboto'>$name is most suited with $type</font></p>");
?>
                </div>


                            
                            <div class="wizard-footer">
                                <div class="pull-right">
                                      <input type="button"  onclick="location.href = 'index.php';" class="btn btn-next btn-fill btn-danger btn-wd" name="finish" value="Finish">
                                  </div>
                                  <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div> <!-- row -->
    </div> <!--  big container -->

   
      </div>
  







</body></html>