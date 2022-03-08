<?php

if($_POST){
    $physics=$_POST['physics'];
    $chemistry=$_POST['chemistry'];
    $bioligy=$_POST['bioligy'];
    $math=$_POST['math'];
    $computer=$_POST['computer'];

    if ($physics>50 || $physics<0  || $chemistry>50 || $chemistry<0 || $bioligy>50 || $bioligy<0 || $math>50 ||$math<0 ||$computer>50|| $computer<0){
        $message = "<div class='alert alert-danger text-center'>
        <h6>please enter valid grade</h6>
        </div>";
    }
    else{
        $grade=($physics+$chemistry+$bioligy+$math+$computer)/250;
        $percentage=$grade*100;
        $message_grade = "<div class='alert alert-danger text-center'>
        <h6>
            your grade is :$grade / 250 <br>
            your persentage is: $percentage %
        </h6>
        </div>";
        if($percentage>=90 && $percentage<=100){
            $message = "<div class='alert alert-danger text-center'>
        <h6>grade A</h6>
        </div>";
        }
        elseif($percentage>=80){
            $message = "<div class='alert alert-danger text-center'>
            <h6>grade B</h6>
            </div>";
        }
        elseif($percentage>=70){
            $message = "<div class='alert alert-danger text-center'>
            <h6>grade C</h6>
            </div>";
        }
        elseif($percentage>=60){
            $message = "<div class='alert alert-danger text-center'>
            <h6>grade D</h6>
            </div>";
        }
        elseif($percentage>=40){
            $message = "<div class='alert alert-danger text-center'>
            <h6>grade E</h6>
            </div>";
        }
        else{
            $message = "<div class='alert alert-danger text-center'>
            <h6>grade F</h6>
            </div>";
        }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>even</title>
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
                  calculate your grade!
              </div>
              <div class="col-4 offset-4 mt-5">
                    <form action="" method="post">
                        <div class="form-group">
                          <input type="number" name="physics" id="ID" class="form-control" placeholder="Enter the number physics grade" aria-describedby="helpId">
                          <input type="number" name="chemistry" id="ID" class="form-control" placeholder="Enter the chemistry grade" aria-describedby="helpId">
                          <input type="number" name="bioligy" id="ID" class="form-control" placeholder="Enter the bioligy grade" aria-describedby="helpId">
                          <input type="number" name="math" id="ID" class="form-control" placeholder="Enter the number math grade" aria-describedby="helpId">
                          <input type="number" name="computer" id="ID" class="form-control" placeholder="Enter the computer grade" aria-describedby="helpId">
                        </div>
                        <?php  if(isset($message)){
                            echo $message_grade;
                            echo $message;
                        } ?>
                        <div class="form-group">
                           <button class="btn btn-outline-primary">show result </button>
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
