<?php
include "./backend/functions/omdbapi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHPFilms - Info About Series, Films and More</title>
        <link rel="shortcut icon" href="./phpfilms.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./resources/bootstrap/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <div class="container-fluid text-center">
                <h2>PHPFilms <i class="fa-brands fa-evernote"></i></h2>
                <p>See information about your favorite series and movies<br>in one place! Simple, fast and intuitive.</p>
            </div>
            <div class="container-fluid">
                <form id="formSearchFilm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="d-flex flex-column w-25 gap-3 mx-auto">
                        <input class="form-control" type="text" name="filmTitle" placeholder="Title of Film" required>
                        <button class="btn btn-primary" name="searchFilm">Search</button>
                    </div>
                </form>
            </div>
            <div class="container-fluid mt-3">

            </div>
            <div class="container-fluid">
                <?php  include "./backend/render/renderTable.php"; ?>
            </div>

            <div class="container-fluid d-flex gap-3 justify-content-evenly flex-wrap">
                <?php include "./backend/render/renderPlot.php"; ?>
            </div>
        </div>
        
        <script src="./resources/jquery/jquery-3.6.3.js"></script>
        <script src="./resources/jquery/jquery.validate.js"></script>
        <script src="./public/js/validateSearch.js"></script>
    </body>
</html>