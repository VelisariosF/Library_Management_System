<?php
class Book {
    private String $name;
    private String $author;
    private String $branch;
    private Float $price;


    function __construct(String $name, String $author, String $branch, Float $price) {
        $this->name = $name;
        $this->author = $author;
        $this->branch = $branch;
        $this->price = $price;
    }

    public function getName(){
        return $this->name;
    }

    
    public function getAuthor(){
        return $this->author;
    }

    
    public function getBranch(){
        return $this->branch;
    }

    
    public function getPrice(){
        return $this->price;
    }
}




$book = new Book('the lord of the rings', 'peter jakson', 'kkk', 45);


echo $book->getName() .'<br>';
echo $book->getAuthor() .'<br>';
echo $book->getBranch() .'<br>';
echo $book->getPrice();

?>