<?php
// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female

//$msg = '';
//$msgg=''
//foreach ($categories['subCategories'] as $brand => $products) {
//    $msg .= "brand : $brand => ";
//   foreach ($products as $index => $product) {
//        $msg .= $product->id . ' , ';
//        $msgg .= $product->name . ' , ';
//    }
//   $msg .= '<br>';
//   $msgg.='<br>';
//}
//echo $msg;
// echo $msgg;

    $users = [
        (object)[
            'id' => 1,
            'name' => 'Ahmed',
            "gender" => (object)[
                'gender' => 'm'
            ],
            'hobbies' => [
                'football', 'swimming', 'running'
            ],
            'activities' => [
                "school" => 'drawing',
                'home' => 'painting'
            ]
        ],
        (object)[
            'id' => 2,
            'name' => 'Mohamed',
            "gender" => (object)[
                'gender' => 'm'
            ],
            'hobbies' => [
                'swimming', 'running',
            ],
            'activities' => [
                "school" => 'painting',
                'home' => 'drawing'
            ]
        ],
        (object)[
            'id' => 3,
            'name' => 'Menna',
            "gender" => (object)[
                'gender' => 'f'
            ],
            'hobbies' => [
                'running',
            ],
            'activities' => [
                "school" => 'painting',
                'home' => 'drawing'
            ]
        ]
        
    ];
    
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Task2_Table</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
          
            th{
                border: 1px solid ;
            }
            td{
                border: 1px solid ;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table border="3" align="center" cellpadding="20" bgcolor="#75ABEB" class="mt-5">
                        <thead>
                            <?php
                                foreach($users[0] as $key => $value){   
                            ?>
                                <th>
                                    <?php 
                                        echo $key; 
                                    ?>
                                </th>
                                <?php
                                     }
                                 ?>
                        </thead>
                        <tbody>
                            <?php 
                                $lastIndex = count($users) -1;
                                for($count = 0; $count <= $lastIndex; $count++) { 
                            ?>
                                <tr>
                                    <?php
                                        foreach($users[$count] as $key => $value){
                                    ?>
                                        <td>
                                            <?php 
                                                if(is_array($value)){
                                                    foreach($value as $key => $data)
                                                    {
                                                        if ((count($value)-1) != $key) {
                                                            echo $data .= '  ';
                                                        }else{
                                                            echo $data;
                                                        }
                                                    }
                                                }elseif(is_object($value)){
                                                    foreach($value as $key => $value_gender)
                                                    {
                                                        if ($value_gender == 'm') {
                                                            echo 'male';
                                                        }else{
                                                            echo 'female';
                                                        }
                                                    }
                                                }else{
                                                    echo $value;
                                                }
                                            ?>
                                        </td>
                                        <?php 
                                          }   
                                        ?>
                                </tr>
                                <?php 
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>