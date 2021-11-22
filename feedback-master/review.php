
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
            margin: 40px 0px 0px 0px;
            padding: 50px 10px 50px 10px;
            width: 800px;
        }
    </style>
</head>

<body>
    <form class=" container font-width-bold" style="width:700px;">
        <div class="border mrgincenter">
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
                    <input type="radio" name="emp" <?= $ans1?>  value="current"> Current
                    <input type="radio" name="emp" <?= $ans?> value="former"> Former
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">Employer's Name</label>
                <div class="col">
                    <input type="text" class="form-control col m-auto" name="name" value="<?php echo $en ;?>" >
                </div>
            </div>
        </div>
        <form class="m-auto font-width-bold " style="width:700px;">
        <div class="border mrgincenter mt-5">

            <div class="form-group row container">
                <br>
                <br>
                <label class="col h4"> Employment Status</label>
                <div class="col">
                    <select name="status" class="form-control col-9">
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Contract">Contract</option>
                        <option value="Intern">Intern</option>
                    </select>
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">Job Title</label>
                <div class="col">
                    <input type="text" class="form-control col m-auto" name="jobtitle" value="<?php echo $jt; ?>">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">Review Headline</label>
                <div class="col">
                    <input type="text" class="form-control col m-auto" name="review" value="<?php echo $rh; ?>">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">PROs</label>
                <div class="col">
                    <input class="form-control" name='pros' value="<?php echo $pr; ?>">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">CONs</label>
                <div class="col">
                    <input class="form-control" name="cons" value="<?php echo $co; ?>">
                </div>
            </div>

            <div class="form-group row container">
                <label class="col h4">Advice Management</label>
                <div class="col">
                    <input name="advice" class="form-control" value="<?php echo $adv; ?>">
                </div>
            </div>
            </div>
        <body>
    <form class=" container font-width-bold" style="width:700px;">
        <div class="border mrgincenter">
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
                    <input type="file" name="Images">
                </div>
            </div>

            <div class="container row">

                <!-- Finished -->

                <div class="form-group container col">
                    <input type="checkbox" name="res" class="">
                    <label class=""> Agree Terms and Condition </label>
                </div>
                <div class="text-center col">
                    <input type="submit" value="Submit" class="btn btn-success" name="submit">
                </div>
            </div>

            <hr style="width: 20rem; height:.1rem" class="bg-danger">


        </form>

    </form>
    <div class="footer">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">

                <li class="page-item ">
                    <!-- <a class="page-link" href="index.php" hello1">1</a> -->
                    <a href="first.php"><input type="submit" value="1"></a>
                </li>

                <li class="page-item">
                    <!-- <a class="page-link" href="second.php" hello2">2</a> -->
                    <a href="second.php"><input type="submit" value="2"></a>
                </li>

                <li class="page-item">
                    <!-- <a class="page-link" href="Third.php" hello3">3</a> -->
                    <a href="third.php"><input type="submit" value="3"></a>
                </li>
                </li>
            </ul>
        </nav>
    </div>
</body>

</html>