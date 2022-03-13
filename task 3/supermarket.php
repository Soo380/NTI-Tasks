<?php

switch ($_POST['city']) {
    case 'Cairo':
        $delivery = 0;
        break;
    case 'Giza':
        $delivery = 30;
        break;
    case 'Alex':
        $delivery = 50;
        break;
    default:
        $delivery = 100;
}

if ($_POST['product']) {
    for ($i = 0; $i <= 'product'; $i++) {
        echo "<input type=number name=productinput id=productinput>";
    }
}

echo $name = $_POST['name'];
echo $city = $_POST['city'];
echo $numberofproduct = $_POST['product'];
echo $delivery;

//$total=$price1*$quantity+$price2*$quantity;

// if ($total <= 1000) {
//     $discount = 0;
// } elseif ($total <= 3000) {
//     $discount = .1;
// } elseif ($total <= 4500) {
//     $discount = .15;
// } elseif ($total > 4500) {
//     $discount = .2;
// } else {
//     echo "else";
// }

// $totalprice = $total + $total * $discount + $delivery;
// echo $totalprice;


?>
<!doctype html>
<html lang="en">

<head>
    <title>Buy Now</title>
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
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="product">Number of product</label>
                        <input type="number" name="product" id="product" class="form-control" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <select name="city" class="form-control" id="city">
                            <option value="Cairo">Cairo</option>
                            <option value="Giza">Giza</option>
                            <option value="Alex">Alex</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-primary"> Buy Now </button>
                    </div>

                    <div class="form-group">
                        <label for="product">Name of products</label>
                        <input type="number" name="product" id="product" class="form-control" aria-describedby="helpId">
                    </div>
                    <button class="btn btn-outline-primary"> result </button>
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