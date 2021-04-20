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
            <form action="day6-3.php"  method ="POST">
                <div class="row my-2">
                    <label class="col-12 mb-2 p-0" for="farenheit">Insert temperature in Farenheit</label>
                    <input class="col-2" type ="text"  name="farenheit" placeholder="°F">
                </div>

                <div class="row my-2">
                    <button class="col-2 mt-2" type="submit"  name="submit">Convert</button>
                </div>
            </form>
            <div class="row">
        <?php
            if( isset($_POST['submit']) ) {
                if( $_POST["farenheit"] ) {
                    $farenheit = $_POST[ 'farenheit'];

                    function calculateToCelsius($farenheit) {
                        $celsius = ($farenheit - 32) /1.8000;
                        echo '<div class="col-12 py-2">' . $celsius . '°C</div>';

                        switch (true) {

                        case $celsius <= 5:
                            echo '<div class="col-2 py-2 text-primary fw-bold border border-primary">Very cold. Stay home</div>';
                            break;

                        case $celsius > 5 and $celsius <= 10:
                            echo '<div class="col-2 py-2 text-info fw-bold border border-info">Cold. The winter is coming</div>';
                            break;

                        case $celsius > 10 and $celsius <= 15:
                            echo '<div class="col-2 py-2 text-success fw-bold border border-success">Pleasant weather, go for a walk</div>';
                            break;

                        case $celsius > 15 and $celsius <= 20:
                            echo '<div class="col-2 py-2 text-secondary fw-bold border border-secondary">Warm enough. Summer is back</div>';
                            break;

                        case $celsius > 20 and $celsius <= 25:
                            echo '<div class="col-2 py-2 text-warning fw-bold border border-warning">Very warm. It is beach time</div>';
                            break;
                        
                        case $celsius > 25:
                            echo '<div class="col-2 py-2 text-danger fw-bold border border-danger">The weather is hot like red chili pepper. Stay home</div>';
                            break;

                        default:
                            echo 'The weather is unknown';
                            break;
                        }
                    }

                    calculateToCelsius($farenheit);
                } else {
                    echo "Insert a value";
                }
            }
        ?>
            </div>
    </div>
</body>
</html>