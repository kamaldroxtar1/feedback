<?php
session_start();
if (!empty($_POST['next'])){
    if (!empty($_FILES['images'])) {
        header("location:review.php");
    } 
    else {
        $error = "Fill all fields";
    }
    
}
else if(!empty($_POST['back'])){
    header("location:second.php");
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
    <form class=" container font-width-bold" style="width:700px;" method="POST" enctype="multipart/form-data">
        <div class="mrgincenter">
            <!-- <h1 class="display-4 text-center">Feed Back</h1> -->

            <?php
            if (!empty($error)) {
            ?>
                <div class="alert-danger alert col-12 m-auto p-auto" role="alert"> <?php echo $error ?> </div>
            <?php  }
            ?>

            <div class="form-group row container">
                <label class="col h4">Submit Proof</label>
                <div class="col-4">
                    <input type="file" name="images">
                </div>
            </div>

            <div class="text-center container">
            <input type="submit" class="btn btn-success" name="back" value="Back"></button>
            <input type="submit" class="btn btn-success" name="next" value="Next"></button>
        </div>
        </form>
        

</body>

</html>