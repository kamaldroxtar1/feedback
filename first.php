<?php
error_reporting(0);
session_start();
$_SESSION['btao']="";
$_SESSION['btao1']="";
if (!empty($_POST['next'])){
    if (!empty($_POST['name']) && !empty($_POST['emp'])) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['emp'] = $_POST['emp'];
        if($_POST['emp']=="current"){
            $_SESSION['btao']="checked";
            $_SESSION['btao1']="";
        }
        else if($_POST['emp']=="former"){
            $_SESSION['btao']="";
            $_SESSION['btao1']="checked";
        }
        echo $_SESSION['emp'];
        echo $_SESSION['name'];
        header("location:second.php");
    } 
    else {
        $error = "Fill all fields";
    }
    
}
else if(!empty($_POST['back'])){
    header("location:dashboard.php");
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
            margin: 200px 0px 0px 0px;
            padding: 50px 10px 50px 10px;
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
    <form class=" container font-width-bold" style="width:700px;" method="POST">
        <div class="mrgincenter">
            <!-- <h1 class="display-4 text-center">Feed Back</h1> -->

            <?php
            if (!empty($error)) {
            ?>
                <div class="alert-danger alert col-12 m-auto p-auto" role="alert"> <?php echo $error ?> </div>
            <?php  }
            ?>

            <div class="form-group row container">
                <label class="col h5">Are you a current or former employee? </label>
                <div class="col">
                    <input type="radio" name="emp" <?=$_SESSION['btao']?> value="current"> Current
                    <input type="radio" name="emp"  <?=$_SESSION['btao1']?> value="former"> Former
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">Employer's Name</label>
                <div class="col">
                    <input type="text" class="form-control col m-auto" name="name" value="<?= $_SESSION["name"]?>">
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