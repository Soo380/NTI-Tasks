<?php
    
if ($_POST) {
    $_SESSION ['phone']= $_POST['phone'];
    $opinion = $_POST['opinion'];
    $opinion1 = $_POST['opinion1'];
    $opinion2 = $_POST['opinion2'];
    $opinion3 = $_POST['opinion3'];
    $opinion4 = $_POST['opinion4'];
   
switch ($_POST['opinion']) {
    case '0':
        $opinionn = 'bad';
        break;
    case '3':
        $opinionn = 'good';
        break;
    case '5':
        $opinionn = 'verygood';
        break;
    case '10':
        $opinionn = 'exellent';
        break;
}
switch ($_POST['opinion1']) {
    case '0':
        $opinionn1 = 'bad';
        break;
    case '3':
        $opinionn1 = 'good';
        break;
    case '5':
        $opinionn1 = 'verygood';
        break;
    case '10':
        $opinionn1 = 'exellent';
        break;
}
switch ($_POST['opinion2']) {
    case '0':
        $opinionn2 = 'bad';
        break;
    case '3':
        $opinionn2 = 'good';
        break;
    case '5':
        $opinionn2 = 'verygood';
        break;
    case '10':
        $opinionn2 = 'exellent';
        break;
}
switch ($_POST['opinion3']) {
    case '0':
        $opinionn3 = 'bad';
        break;
    case '3':
        $opinionn3 = 'good';
        break;
    case '5':
        $opinionn3 = 'verygood';
        break;
    case '10':
        $opinionn3 = 'exellent';
        break;
}
switch ($_POST['opinion4']) {
    case '0':
        $opinionn4 = 'bad';
        break;
    case '3':
        $opinionn4 = 'good';
        break;
    case '5':
        $opinionn4 = 'verygood';
        break;
    case '10':
        $opinionn4 = 'exellent';
        break;
}
echo $opinionn."<br>";
echo $opinionn1."<br>";
echo $opinionn2."<br>";
echo $opinionn3."<br>";
echo $opinionn4."<br>";

if ($_POST) {
    $review = $opinion + $opinion1 + $opinion2 + $opinion3 + $opinion4;
    if ($review <= 25) {
        echo "we will contact you at your phone :" . $_SESSION ['phone'];
    } else {
        echo "thank you";
    }
    // echo $review;
    // echo $phone;
}

}
?>
