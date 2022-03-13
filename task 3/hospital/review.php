<?php
$title = "Review";
include_once "header.php";

if ($_POST) {
    // $phone = $_POST['phone'];
    $opinion = $_POST['opinion'];
    $opinion1 = $_POST['opinion1'];
    $opinion2 = $_POST['opinion2'];
    $opinion3 = $_POST['opinion3'];
    $opinion4 = $_POST['opinion4'];

    // echo $phone;
    echo $opinion;
    echo $opinion1;
    echo $opinion2;
    echo $opinion3;
    echo $opinion4;
    if ($_POST) {
        $review = $opinion + $opinion1 + $opinion2 + $opinion3 + $opinion4;
        if ($review <= 25) {
            echo "we will contact you at your phone" . $phone;
        } else {
            echo "thank you";
        }
        // echo $review;
        // echo $phone;
    }
}


?>
<div class="container">
    <div class="row justify-content-center mt-1">
        <div class="col-12 text-center text-dark h1 font-weight-bold">
            <?= $title ?>
        </div>
        <div class="col-5 mt-4">
            <form action="result.php" method="post">
                <!-- <div class="form-group w-50">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Your Phone Number" aria-describedby="helpId">
                </div> -->
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
        </div>
    </div>
</div>
<?php
include_once "footer.php";
?>