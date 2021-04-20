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
            $showFormular = true;
            if( isset($_POST['submit'])) {
                if( $_POST["name"] || $_POST["surname"] )
                {   
                    $showFormular = false;
                    echo "Welcome ". $_POST[ 'name'] . ' ';
                    echo (strlen($_POST['surname']) > 5 )? '<span class="text-primary fw-bold">' . $_POST['surname'] . '</span>' : $_POST['surname'];
                } else {
                    echo "Insert your data in both fields";
                }
            }

            if($showFormular) {
        ?>

            <form action="day6-1.php"  method ="POST">
                <div class="row my-2">
                    <label class="col-12 mb-2 p-0" for="name">Name</label>
                    <input class="col-2" type="text" name="name" placeholder="Your name">
                </div>

                <div class="row my-2">
                    <label class="col-12 mb-2 p-0" for="surname">Surname</label>
                    <input class="col-2" type ="text"  name="surname" placeholder="Your surname">
                </div>

                <div class="row my-2">
                    <input class="col-2 mt-2" type="submit"  name="submit">
                </div>
            </form>

        <?php
            } 
        ?>
    </div>
</body>