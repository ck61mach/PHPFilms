<?php include './src/_ConsumeApi.php'; ?>
<html>
    <head>
        <title>PHPFIlms</title>
    </head>
    <body>
        <div>
            <h1>PHPFilms</h1>
            <p>See information about your favorite series and movies<br>in one place! Simple, fast and intuitive.</p>
        </div>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <div>
                <input type="text" id="_film" name="film" minlength="1" maxlength="50" placeholder="Enter your film">
                <button type="submit" name="wasSearching" id="_movieSearch">Search</button>
            </div>
        </form>

        <div>
            <table border="1">
                <thead>
                    <tr>
                        <td>Title</td>
                        <td>Released</td>
                        <td>Genre</td>
                        <td>Director</td>
                        <td>BoxOffice</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $_movie->_get('Title'); ?></td>
                        <td><?= $_movie->_get('Released');  ?></td>
                        <td><?= $_movie->_get('Genre'); ?></td>
                        <td><?= $_movie->_get('Director') ?></td>
                        <td><?= $_movie->_get('BoxOffice') ?></td>
                    </tr>
                </tbody>
            </table>
       </div>

       <div>
            <p><?= $_movie->_get('Plot'); ?></p>
       </div>

       <span id="_showText"></span>

       <script src="./public/js/_Form.js"></script>
    </body>
</html>