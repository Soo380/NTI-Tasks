<?php
$title = "bank";
//include_once "header.php";

if ($_POST) {
    $name = $_POST['name'];
    $loan = $_POST['loan'];
    $years = $_POST['years'];

    if ($years <= 3) {
        $rate = 0.1;
    } else {
        $rate = 0.15;
    }

    $interest = $loan * $rate * $years;
    $total = $loan + $interest;
    $month = $total / ($years * 12);
}


?>

<!doctype html>
<html lang="en">

<head>
    <title>Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row ">
            <div class="col-12 mt-5 text-center text-primary font-weight-bold h3">
                Buy Now !
            </div>
            <div class="col-4 offset-4 mt-5">
                <form action="" method="post">
                    <div class="form-group">
                        <label name="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your name" aria-describedby="helpId">
                        <label for="loan">loan</label>
                        <input type="number" name="loan" id="loan" class="form-control" placeholder="Enter Your loan" aria-describedby="helpId">
                        <label for="years">years</label>
                        <input type="years" name="years" id="years" class="form-control" placeholder="Enter years" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button class="mt-0 btn btn-outline-dark rounded">calculate</button>
                    </div>
                    <div class="alert alert-success" role="alert">
                        <ul>
                            <li> your name is:<?= $name ?> </li>
                            <li> your loan is:<?= $loan ?></li>
                            <li> number of years is:<?= $years ?></li>
                            <li> the interest is:<?= $interest ?></li>
                            <li> the total money:<?= $total ?></li>
                            <li> paid per month:<?= $month ?></li>
                        </ul>
                    </div>
                </form>
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