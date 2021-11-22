<?php
session_start();
if (!empty($_POST['next'])){
    if (!empty($_POST['status']) && !empty($_POST['jobtitle']) && !empty($_POST['review'])  && !empty($_POST['pros'])  && !empty($_POST['cons'])  && !empty($_POST['advice'])) {
        $_SESSION['status'] = $_POST['status'];
        $_SESSION['jobtitle'] = $_POST['jobtitle'];
        $_SESSION['review'] = $_POST['review'];
        $_SESSION['pros'] = $_POST['pros'];
        $_SESSION['cons'] = $_POST['cons'];
        $_SESSION['advice'] = $_POST['advice'];
    
        header("location:third.php");
    } 
    else {
        $error = "Fill all fields";
    }
    
}
else if(!empty($_POST['back'])){
    header("location:first.php");
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

</head>

<body>
<div class="container mt-5 text-center">
        <i>
            <h2>FEEDBACK</h2>
        </i>
    </div>
    <hr>

    <form class="m-auto font-width-bold " style="width:700px;" method="POST">
        <div class="mrgincenter mt-5">
        <?php
            if (!empty($error)) {
            ?>
                <div class="alert-danger alert col-12 m-auto p-auto" role="alert"> <?php echo $error ?> </div>
            <?php  }
            ?>
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
                    <input type="text" class="form-control col m-auto" name="jobtitle" value="<?=$_SESSION['jobtitle']?>">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">Review Headline</label>
                <div class="col">
                    <input type="text" class="form-control col m-auto" name="review" id="review" value="<?=$_SESSION['review']?>">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">PROs</label>
                <div class="col">
                    <input class="form-control" id="pros" name='pros' value="<?=$_SESSION['pros']?>">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">CONs</label>
                <div class="col">
                    <input class="form-control" id="cons" name="cons" value="<?=$_SESSION['cons']?>">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">Advice Management</label>
                <div class="col">
                    <input name="advice" id="adv" class="form-control" value="<?=$_SESSION['advice']?>">
                </div>
            </div>
        </div>

        <div class="text-center">
                    <input type="submit" class="btn btn-success" name="back" value="Back"></button>
                    <input type="submit" class="btn btn-success" name="next" value="Next"></button>
                </div>
        

    </form>
    
</body>

</html>