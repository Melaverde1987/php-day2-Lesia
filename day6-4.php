<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Day2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <?php
            function boxFunction($width, $height, $depth) {
                $area = $width * $height;
                $volume  = $width * $height * $depth;
                echo  "The area of the box is: $area cm2<br>";
                echo  "The volume of the box is: $volume cm3";
            }

            boxFunction(10, 15, 3);
        ?>
    </div>
</body>
</html>