<?php

$quotes = [
    [   
        "author"=> "Dr. Seuss",
        "quote"=> "Don't cry because it's over, smile because it happened."
    ],
    [   
        "author"=> "Marilyn Monroe",
        "quote"=> "I'm selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can't handle me at my worst, then you sure as hell don't deserve me at my best."
    ],
 
    [   
        "author"=> "Oscar Wilde",
        "quote"=> "Be yourself; everyone else is already taken."
    ],
 
    [   
        "author"=> "Albert Einstein",
        "quote"=> "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe."
    ],
 
    [   
        "author"=> "Robert Frost",
        "quote"=> "You only live once, but if you do it right, once is enough.."
    ],
 
    [   
        "author"=> " Friedrich Nietzsche",
        "quote"=> "Don’t walk in front of me… I may not follow
        Don’t walk behind me… I may not lead
        Walk beside me… just be my friend."
    ]

] ;


$quote= $quotes[array_rand($quotes)];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random quote</title>
</head>
<body>
    <blockquote>
        <h2> "<?= $quote["quote"]; ?>  "</h2>
        <strong>- <?= $quote["author"]; ?>  </strong>
    </blockquote>
</body>
</html> 
