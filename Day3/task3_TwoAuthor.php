<?php
class Author { 
    private $name;
    private $email;
    private $gender;

    public function __construct($name, $email, $gender) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getGender() {
        return $this->gender;
    }

    public function __toString() : string {
        return "Name: " . $this->name . 
               ", Email: " . $this->email . 
               ", Gender: " . $this->gender;
    }
}

class Book {
    private $Bname;
    private $authors = []; 
    private $price;
    private $qty;

    public function __construct($Bname, array $authors, $price, $qty = 0) {
        $this->Bname = $Bname;
        $this->authors = $authors; 
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getBname() {
        return $this->Bname;
    }

    public function getAuthors() {
        return $this->authors;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setQty($qty) {
        $this->qty = $qty;
    }

    public function getQty() {
        return $this->qty;
    }

    public function addAuthor(Author $author) {
        $this->authors[] = $author;
    }

    public function __toString() : string {
  
        $authorsStr = implode(", ", array_map(function($author) {
            return (string) $author; 
        }, $this->authors));

        return "Book[name=" . $this->Bname . 
               ", authors=[" . $authorsStr . "]" .  
               ", price=" . $this->price . 
               ", qty=" . $this->qty . "]";
    }

    
}


$Author1 = new Author("Ali", "aaa@aaa.com", "m");
$Author2 = new Author("mona", "mmm@aaa.com", "f");


$allAuthor = new Book("JavaScript Guide", [$Author1,$Author2], 600, 100);

echo $allAuthor;
?>
