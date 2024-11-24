<?php 

    $Books = [
        [
            "author"=>"Robert Kiosaki",
            "name"=>"Rich dad, Poor dad",
            "purchaseURL"=>"https://a.co/d/a2WQfR5"
         ],     
         [
            "author"=>"James Clear",
            "name"=>"Atomic Habits",
            "purchaseURL"=>"https://a.co/d/arWBEZt"
         ],
        ];

    function Filter($Items,$fn){
        $FilteredItems = [];
        foreach($Items as $Item){
            if($fn($Item)){
                $FilteredItems[] = $Item;
            }
        }
        return $FilteredItems;
    }

    $FilteredBooks = Filter($Books, function($Book) {
        return $Book['author'] === "James Clear" || $Book['name'] === "Rich dad, Poor dad";
    });

    require "index.view.php";