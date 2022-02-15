<?php
// creo un array di post (copiato dal link)
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'adfiahdipfhasifhadsifhaispudfhadsiufuhsdaiuphfasijdbvchjadshbcibsadicbasduivbudsaifaghsufhasif'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'lorem dsjfhsadifhaisudhfiasdhfiudshfiuashfiuadshfiuasdfhaudsihfiaushf'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'pWIODOIWEQHJRIOQWGEWFDJWQOIEFJQEW9UFR9IUQWEHRFIOQWHEFUQGEWFYYV98YRYW8EG'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'dsoifhjaifhiasudhfuiahfuiadshfiuadshfaidsfhaisudofhiadsufhaisudfhaisu'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
    <?php
    // siccome ho come key un valore stringa
    // mi viene facile usare un foreach
    // assegno nome $date a ogni chiave di posts che a sua volta essendo array di array
    // avrà come valore post
    // stampo il nome delle key
    foreach ($posts as $date => $post) {
        echo '<h1>' . $date . '</h1>';
        // siccome post contiente un altri array uso un'altro for each
        // dove stampo titolo autore e testo
        foreach($post as $value){
            echo '<h2>' . $value['title'] . '</h2>';
            echo '<div>' . $value['author'] . '</div>';
            echo '<p>' . $value['text'] . '</p>';
        }
    }
    ?>
</body>

</html>