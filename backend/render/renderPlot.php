<?php

#____________________________________________________________________________________________
if (isset($_POST['searchFilm'])) {
    echo "
        <div class='border p-2 w-75 shadow-sm'>
            <h3>Plot of {$infoFilm['Title']}</h3>
            <hr>
            <div>
                <spa>{$infoFilm['Plot']}</span>
                <hr>
                <div>
                    <span><b>Language:</b> {$infoFilm['Language']}</span><br>
                    <span><b>Duration:</b> {$infoFilm['Runtime']}</span><br>
                    <span><b>Awards:</b> {$infoFilm['Awards']}</span><br>
                    <span><b>BoxOffice:</b> {$infoFilm['BoxOffice']}</span>
                </div>
            </div>
        </div>
    ";
}
#_____________________________________________________________________________