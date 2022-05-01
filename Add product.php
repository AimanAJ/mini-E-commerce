<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Add new product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="main-title">
        <h1>Add new product</h1>
    </div>




    <div class="form-container">
        <form method="post">
            <label>Title</label>
            <br>
            <input type="text" name="title" required>
            <br>
            <label>description</label>
            <br>
            <input type="text" name="description" required>
            <br>
            <label>price</label>
            <br>
            <input type="text" name="price" required>
            <br> <br>
            <button type="submit" class="btn btn-success">Add</button>
            <a class="btn btn-secondary" href="index.php" role="button">Home page</a>
        </form>
    </div>

    <br><br><br>

    <?php

    $co = 1;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $_SESSION['product'][] = array("title" => $_POST["title"], "price" => $_POST["price"], "description" => $_POST["description"]);
        if (count($_SESSION['product']) != 0) {


            echo '<table class="table">';
            echo '<thead>';
            echo ' <tr>';
            echo '<th scope="col">#</th>';
            echo ' <th scope="col">title</th>';
            echo   '<th scope="col">description</th>';
            echo '   <th scope="col">price</th>';
            echo ' </tr>';
            echo ' </thead>';
            echo '<tbody>';

            for ($i = 0; $i < count($_SESSION['product']); $i++) {

                echo '   <tr>';
                echo '<th scope="row">' . $co . '</th>';
                echo '<td>' . $_SESSION['product'][$i]['title'] . '</td>';
                echo '<td>' . $_SESSION['product'][$i]['description'] . '</td>';
                echo '<td>' . $_SESSION['product'][$i]['price'] . '</td>';
                echo '</tr>';

                $co++;
            }

            echo '  </tbody>';
            echo '</table>';
        }
        // echo "<pre>";
        // print_r($_SESSION["product"]);
        // echo "</pre>";
         session_destroy();
    }

    ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>