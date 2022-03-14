<?php

if ($_POST['phone']) {
    $_SESSION['phone']= $_POST['phone'];
}
$phone=$_SESSION ['phone'];
echo $_SESSION ['phone'];


    ?>

<!doctype html>
<html lang="en">

<head>
    <title>review</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-1">
            <div class="col-5 mt-4">
                <form action="result.php" method="post">
                    <div class="form-group">
                        <label>Are you satisfied with the level of cleanliness?</label><br>
                        <input type="radio" id="bad" name="opinion" value="0">
                        <label for="bad">Bad</label><br>
                        <input type="radio" id="good" name="opinion" value="3">
                        <label for="good">Good</label><br>
                        <input type="radio" id="very good" name="opinion" value="5">
                        <label for="very good">Very Good</label><br>
                        <input type="radio" id="excellent" name="opinion" value="10">
                        <label for="excellent">Excellent</label><br>
                        <?php
                        //echo $opinion;
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Are you satisfied with the service prices?</label><br>
                        <input type="radio" id="bad1" name="opinion1" value="0">
                        <label for="bad1">Bad</label><br>
                        <input type="radio" id="good1" name="opinion1" value="3">
                        <label for="good1">Good</label><br>
                        <input type="radio" id="very good1" name="opinion1" value="5">
                        <label for="very good1">Very Good</label><br>
                        <input type="radio" id="excellent1" name="opinion1" value="10">
                        <label for="excellent1">Excellent</label><br>
                    </div>
                    <div class="form-group">
                        <label>Are you satisfied with the nursing service?</label><br>
                        <input type="radio" id="bad2" name="opinion2" value="0">
                        <label for="bad2">Bad</label><br>
                        <input type="radio" id="good2" name="opinion2" value="3">
                        <label for="good2">Good</label><br>
                        <input type="radio" id="very good2" name="opinion2" value="5">
                        <label for="very good2">Very Good</label><br>
                        <input type="radio" id="excellent2" name="opinion2" value="10">
                        <label for="excellent2">Excellent</label><br>
                    </div>
                    <div class="form-group">
                        <label>Are you satisfied with the level of the doctor?</label><br>
                        <input type="radio" id="bad3" name="opinion3" value="0">
                        <label for="bad3">Bad</label><br>
                        <input type="radio" id="good3" name="opinion3" value="3">
                        <label for="good3">Good</label><br>
                        <input type="radio" id="very good3" name="opinion3" value="5">
                        <label for="very good3">Very Good</label><br>
                        <input type="radio" id="excellent3" name="opinion3" value="10">
                        <label for="excellent3">Excellent</label><br>
                    </div>
                    <div class="form-group">
                        <label>Are you satisfied with the calmness in the hospital?</label><br>
                        <input type="radio" id="bad4" name="opinion4" value="0">
                        <label for="bad4">Bad</label><br>
                        <input type="radio" id="good4" name="opinion4" value="3">
                        <label for="good4">Good</label><br>
                        <input type="radio" id="very good4" name="opinion4" value="5">
                        <label for="very good4">Very Good</label><br>
                        <input type="radio" id="excellent4" name="opinion4" value="10">
                        <label for="excellent4">Excellent</label><br>
                    </div>
                    <div class="form-group">
                        <button class="mt-0 btn btn-outline-dark rounded">result</button>
                    </div>
                </form>
                <!-- <?php
                        if (isset($message)) {
                            echo $message;
                        }
                        ?>  -->
                <!-- <ul>
                    <li> Phone : <?= $_POST['phone'] ?> </li>
                    <li> opinion : <?= $_POST['opinion'] ?> </li>
                    <li> opinion1 : <?= $_POST['opinion1'] ?> </li>
                    <li> opinion2 : <?= $_POST['opinion2'] ?> </li>
                    <li> opinion3 : <?= $_POST['opinion3'] ?> </li>
                </ul> -->
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
