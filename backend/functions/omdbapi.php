<?php

#____________________________________________________________________________________________
$keyApi = "key-api";

if (isset($_POST['searchFilm'])) {
    $title = filter_var(strtolower($_POST['filmTitle']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $titleValid = ucwords($title);

    $formatSpace = str_replace(" ", "+", $titleValid);
    $film = $formatSpace;
    
    $url = "http://www.omdbapi.com/?apikey=$keyApi&t=$film&plot=full";
    $omdbapi = json_decode(file_get_contents($url));

    if ($omdbapi->Response == "False" || $omdbapi->Title !== $titleValid) {
        echo "<script>alert('Movie not found!'); </script>";
        header("refresh: 0; url=/index.php");
    }else {
        $infoFilm = [
            "Title" => $omdbapi->Title,
            "Released" => $omdbapi->Released,
            "Runtime" => $omdbapi->Runtime,
            "Genre" => $omdbapi->Genre,
            "Director" => $omdbapi->Director,
            "Writer" => $omdbapi->Writer,
            "Actors" => $omdbapi->Actors,
            "Plot" => $omdbapi->Plot,
            "Language" => $omdbapi->Language,
            "Awards" => $omdbapi->Awards,
            "BoxOffice" => $omdbapi->BoxOffice
        ];
    }

}
#____________________________________________________________________________________________
?>