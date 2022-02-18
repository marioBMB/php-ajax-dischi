<?php

$data = [
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => 1992,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'year' => 1993,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => 2018,
        'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
        'genre' => 'Jazz'
    ],
    [
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => 2000,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
        'genre' => 'Metal'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'genre' => 'Rock'
    ],
    [
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
        "title" => "Made in Japan",
        "author" => "Deep Purple",
        "genre" => "Rock",
        "year" => "1972"
    ],
    [
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
        "title" => "And Justice for All",
        "author" => "Metallica",
        "genre" => "Metal",
        "year" => "1988"
    ],
    [
        "poster" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
        "title" => "Hard Wired",
        "author" => "Dave Weckl",
        "genre" => "Jazz",
        "year" => "1994"
    ],
    [
        "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
        "title" => "Bad",
        "author" => "Michael Jackson",
        "genre" => "Pop",
        "year" => "1987"
    ]
];

if ($_GET['genre'] != ""){

    $data = array_filter( $data, function($item, $index) use (&$data){ 

        return $data[$index]['genre'] == $_GET['genre'];
    }, ARRAY_FILTER_USE_BOTH);
}


header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
echo json_encode($data);
    


