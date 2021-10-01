<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    include "./header.html"
    ?>

    <?php

    // class Book
    // {
    //     var $title;
    //     var $author;
    //     var $pagecount;


    //     function __construct($aTitle, $aAuthor, $aPagecount)
    //     {
    //         $this->title = $aTitle;
    //         $this->author = $aAuthor;
    //         $this->pagecount = $aPagecount;
    //     }

    //     function info()
    //     {
    //         echo "<p> $this->title <br> $this->author <br> $this->pagecount </p>";
    //         // echo $this->author;
    //         // echo $this->pagecount;
    //     }
    // }

    // $book1 = new Book("Kafka on the Shore", "Haruki Murakami", 600);
    // $book1->info();
    // $book2 = new Book("Atomic Habits", "James Clear", 200);
    // $book2->info();
    // 
    ?>


    <?php

    class Game
    {
        public $name;
        private $rating;


        function __construct($aName, $aRating)
        {
            $this->name = $aName;
            $this->setRating($aRating);
        }

        function setRating($rating)
        {
            if ($rating == "1" || $rating == "2" || $rating == "3" || $rating == "4" || $rating == "5") {
                $this->rating = $rating;
            } else {
                $this->rating = "No Rating";
            }
        }

        function getRating()
        {
            return $this->rating;
        }
        function gameInfo()
        {
            echo "<h3>Name of the Game: $this->name</h3><h4> Rating: $this->rating</h4>";
        }
    }

    $game1 = new Game("Call of duty 4", "5");
    $game1->gameInfo();
    ?>

    <?php
    include "./footer.html"
    ?>

</body>

</html>