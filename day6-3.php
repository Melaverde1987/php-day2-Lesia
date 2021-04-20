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
            function gradesFunction($Math, $Physics, $English) {
                $sum = $Math + $Physics + $English;
                $average = $sum / 3;
                echo  "Sum is: $sum<br>";
                echo  "Average is: $average";
            }

            gradesFunction(5, 2, 1);
        ?>
    </div>
</body>
</html>