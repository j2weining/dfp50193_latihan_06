<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Baju</title>
</head>
<body>
    <h1>Beli Baju</h1>

        <?php
        $helai = 0;
        $baju = 17;
        $bawa = 100;
        $baki = $bawa - $baju;
        for ($baju; $bawa >$baju; $bawa -=$baju) {
            $helai++;
        }
        echo "$helai helai baju, baki duit sama dengan $bawa";
        ?>
</body>
</html>