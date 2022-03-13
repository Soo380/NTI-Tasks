<?php
$title = "number";
include_once "header.php";

if ($_POST) {
    $phone = $_POST['phone'];
    //echo $phone;
}
?>
<div class="container">
    <div class="row justify-content-center mt-1">
        <div class="col-12 text-center text-dark h1 font-weight-bold">
            <?= $title ?>
        </div>
        <div class="col-5 mt-4">
            <form action="review.php" method="post">
                <div class="form-group w-50">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Your Phone Number" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <button class="mt-0 btn btn-outline-dark rounded">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include_once "footer.php";
?>