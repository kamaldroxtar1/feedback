<?php
$es="";
$jt="";
$rh="";
$po="";
$co="";
$adv="";
if(!empty($_POST['jobtitle']) && !empty($_POST['review']) &&  !empty($_POST['pros']) &&  !empty($_POST['cons']) &&  !empty($_POST['advice']) && !empty($_POST['status'])){
    $es=$_POST['status'];
    $jt=$_POST['jobtitle'];
    $rh=$_POST['review'];
    $po=$_POST['pros'];
    $co=$_POST['cons'];
    $adv=$_POST['advice'];

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link rel="stylesheet" href="feedback.css">
    <style>
        .mrgincenter {
            margin: 0px 0px 0px 0px;
            padding: 25px 0px 10px 0px;
            width: 800px;
        }
    </style>
    <!-- <script>
var es=document.getElementById("");
var jt=document.getElementById("jobtitle");
var rh=document.getElementById("review");
var po=document.getElementById("pros");
var co=document.getElementById("cons");
var adv=document.getElementById("adv");
</script> -->

</head>

<body>
<div class="container mt-5 text-center">
        <i>
            <h2>FEEDBACK</h2>
        </i>
    </div>
    <hr>

    <form class="m-auto font-width-bold " style="width:700px;" method="POST">
        <div class="border mrgincenter mt-5">

            <div class="form-group row container">
                <br>
                <br>
                <label class="col h4"> Employment Status</label>
                <div class="col">
                    <select name="status" class="form-control col-9">
                        <option  value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option selected value="Contract">Contract</option>
                        <option value="Intern">Intern</option>
                    </select>
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">Job Title</label>
                <div class="col">
                    <input type="text" class="form-control col m-auto" id="jobtitle" name="jobtitle" value="">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">Review Headline</label>
                <div class="col">
                    <input type="text" class="form-control col m-auto" name="review" id="review" value="">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">PROs</label>
                <div class="col">
                    <input class="form-control" id="pros" name='pros' value="">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">CONs</label>
                <div class="col">
                    <input class="form-control" id="cons" name="cons" value="">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">Advice Management</label>
                <div class="col">
                    <input name="advice" id="adv" class="form-control" value="">
                </div>
            </div>
        </div>

        <hr style="width: 20rem; height:.1rem" class="bg-danger">


        

    </form>
    <div class="footer">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">

                <li class="page-item ">
                    <a href="first.php"><input type="submit" value="1"></a>
                </li>

                <li class="page-item">
                    <a href="second.php"><input type="submit" value="2"></a>
                </li>

                <li class="page-item">
                    <a href="third.php"><input type="submit" value="3"></a>
                </li>
                </li>
            </ul>
        </nav>
    </div>
</body>

</html>