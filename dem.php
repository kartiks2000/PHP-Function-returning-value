<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Function returning value in PHP</h1>
    <?php    

        function addit($a,$b){
            return $a + $b;
        }

        $res = addit(9,8);
        echo $res;
    ?>
</body>
</html>
