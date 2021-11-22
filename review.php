<?php
session_start();
if(!empty($_POST['submit'])){
    header("location:thanx.php");
}
else if(!empty($_POST['back'])){
    header("location:third.php");
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

    <style>
        .mrgincenter {
            margin: 20px 0px 0px 0px;
            padding: 50px 10px 50px 10px;
            width: 800px;
        }
    </style>
</head>

<body>
    <h1 class="text-center"><u>Review feedback</u></h1>
    <form class=" container font-width-bold" style="width:700px;" method="POST">
        <div class="mrgincenter">

            <div class="form-group row container">
                <label class="col h5">Are you a current or former employee? </label>
                <div class="col">
                    <input type="radio" disabled name="emp" <?= $_SESSION['btao'] ?> value="current"> Current
                    <input type="radio" disabled name="emp" <?= $_SESSION['btao1'] ?> value="former"> Former
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">Employer's Name</label>
                <div class="col">
                    <input type="text" disabled class="form-control col m-auto" name="name" value="<?= $_SESSION['name'] ?>">
                </div>
            </div>

            <div class="form-group row container">
                <br>
                <br>
                <label class="col h4"> Employment Status</label>
                <div class="col">
                    <input type="text" disabled value="<?= $_SESSION['status'] ?>">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">Job Title</label>
                <div class="col">
                    <input type="text" class="form-control col m-auto" disabled name="jobtitle" value="<?= $_SESSION['jobtitle'] ?>>">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">Review Headline</label>
                <div class="col">
                    <input type="text" class="form-control col m-auto" disabled name="review" value="<?= $_SESSION['review'] ?>">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">PROs</label>
                <div class="col">
                    <input class="form-control" name='pros' disabled value="<?= $_SESSION['pros'] ?>">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">CONs</label>
                <div class="col">
                    <input class="form-control" disabled name="cons" value="<?= $_SESSION['cons'] ?>">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">Advice Management</label>
                <div class="col">
                    <input name="advice" class="form-control" disabled value="<?= $_SESSION['advice'] ?>">
                </div>
            </div>
            <div class="form-group row container">
                <label class="col h4">Submit Proof</label>
                <div class="col-6">
                    <input type="text" name="images" disabled>
                </div>
            </div>

            <div class="container row">

                <!-- Finished -->

                <div class="form-group container col">
                    <input type="checkbox" name="res" class="">
                    <label class=""> Agree Terms and Condition </label>
                </div>
                <div class="text-center container">
            <input type="submit" class="btn btn-success" name="back" value="Back"></button>
            <input type="submit" class="btn btn-success" name="submit" value="Submit"></button>
        </div>
            </div>

            <hr style="width: 20rem; height:.1rem" class="bg-danger">

        </div>
    </form>

</body>

</html>