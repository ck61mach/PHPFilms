<?php

#____________________________________________________________________________________________
if (isset($_POST['searchFilm'])) {
    echo "
        <div>
            <table class='table border w-75 mx-auto'>
                <thead class='bg-dark text-light'>
                    <tr>
                        <th scope='col'>Title</th>
                        <th scope='col'>Released</th>
                        <th scope='col'>Genre</th>
                        <th scope='col'>Director</th>
                        <th scope='col'>Writer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{$infoFilm['Title']}</td>
                        <td>{$infoFilm['Released']}</td>
                        <td>{$infoFilm['Genre']}</td>
                        <td>{$infoFilm['Director']}</td>
                        <td>{$infoFilm['Writer']}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    ";
}
#_____________________________________________________________________________