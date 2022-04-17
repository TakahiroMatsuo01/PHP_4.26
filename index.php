<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i = 1; $i<4; $i++){
        $result = 0;
        switch($i){
            case 1:
            case 3:
            $result = $i * $i;
            case 2:
                continue;
        }
        print "{$i}の２乗は{$result}です。";
    }
    ?>
</body>
</html>