<?php

$mangas = [
    [
        "title" => "One Piece",
        "author" => "Eiichiro Oda",
        "editor" => "Shūeisha",
        "category" => "Shōnen",
        "volumes" => "92",
        "year" => "1997",
        "sales" => "450"
    ],
    [
        "title" => "Dragon Ball",
        "author" => "Akira Toriyama",
        "editor" => "Shūeisha",
        "category" => "Shōnen",
        "volumes" => "42",
        "year" => "1984",
        "sales" => "250"
    ],
    [
        "title" => "Naruto",
        "author" => "Masashi Kishimoto",
        "editor" => "Shūeisha",
        "category" => "Shōnen",
        "volumes" => "72",
        "year" => "1999",
        "sales" => "235"
    ],
    [
        "title" => "Détective Conan",
        "author" => "Gosho Aoyama",
        "editor" => "Shōgakukan",
        "category" => "Shōnen",
        "volumes" => "95",
        "year" => "1994",
        "sales" => "230"
    ],
    [
        "title" => "Golgo 13",
        "author" => "Takao Saito",
        "editor" => "Shōgakukan",
        "category" => "Seinen",
        "volumes" => "191",
        "year" => "1968",
        "sales" => "200"
    ],
    [
        "title" => "Kochira Katsushika-ku Kameari kōen-mae hashutsujo",
        "author" => "Osamu Akimoto",
        "editor" => "Shūeisha",
        "category" => "Shōnen",
        "volumes" => "200",
        "year" => "1976",
        "sales" => "200"
    ],
    [
        "title" => "Pocket Monsters Special",
        "author" => "Hidenori Kusaka",
        "editor" => "Shōgakukan",
        "category" => "Shōnen",
        "volumes" => "53",
        "year" => "1997",
        "sales" => "200"
    ],
    [
        "title" => "Black Jack",
        "author" => "Osamu Tezuka",
        "editor" => "Akita Shoten",
        "category" => "Shōnen",
        "volumes" => "17",
        "year" => "1973",
        "sales" => "177"
    ],
    [
        "title" => "Oishinbo",
        "author" => "Tetsu Kariya & Akira Hanasaki",
        "editor" => "Shōgakukan",
        "category" => "Seinen",
        "volumes" => "111",
        "year" => "1983",
        "sales" => "130"
    ],
    [
        "title" => "Slam Dunk",
        "author" => "Takehiko Inoue",
        "editor" => "Shūeisha",
        "category" => "Shōnen",
        "volumes" => "31",
        "year" => "1990",
        "sales" => "120"
    ],
    [
        "title" => "Bleach",
        "author" => "Tite Kubo",
        "editor" => "Shūeisha",
        "category" => "Shōnen",
        "volumes" => "74",
        "year" => "2001",
        "sales" => "120"
    ],
    [
        "title" => "JoJo's Bizarre Adventure",
        "author" => "Hirohiko Araki",
        "editor" => "Shūeisha",
        "category" => "Shōnen/Seinen",
        "volumes" => "120",
        "year" => "1986",
        "sales" => "100"
    ],
    [
        "title" => "Astro Boy",
        "author" => "Osamu Tezuka",
        "editor" => "Kōbunsha/Kōdansha",
        "category" => "Shōnen",
        "volumes" => "23",
        "year" => "1952",
        "sales" => "100"
    ],
    [
        "title" => "Doraemon",
        "author" => "Fujiko Fujio",
        "editor" => "Shōgakukan",
        "category" => "Kodomo",
        "volumes" => "45",
        "year" => "1969",
        "sales" => "100"
    ],
    [
        "title" => "Ken le Survivant",
        "author" => "Buronson & Tetsuo Hara",
        "editor" => "Shūeisha",
        "category" => "Shōnen",
        "volumes" => "27",
        "year" => "1983",
        "sales" => "100"
    ],
    [
        "title" => "Touch",
        "author" => "Mitsuru Adachi",
        "editor" => "Shōgakukan",
        "category" => "Shōnen",
        "volumes" => "26",
        "year" => "1981",
        "sales" => "100"
    ]
];

function displayMangas($array) {
    $output = 
    "<div>
        <h3>Title : {$array['title']}</h3>
        <ul>
            <li>Author(s) : {$array['author']}</li>
            <li>Edited by : {$array['editor']}</li>
            <li>Category : {$array['category']}</li>
            <li>Nb of volumes : {$array['volumes']}</li>
            <li>First published : {$array['year']}</li>
            <li>Sold (Millions) : {$array['sales']}</li>
        </ul>
    </div>";
    echo $output;
}