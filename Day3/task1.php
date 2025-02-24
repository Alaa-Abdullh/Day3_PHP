<?php
class Author { 
    private $name;
    private $email;
    private $gender;

    function getname() {
        return $this->name;
    }

    function setemail($email) {
        $this->email = $email;
    }

    function getemail() {
        return $this->email;
    }

    function getgender() {
        return $this->gender;
    }

    function toString($name="alaa", $email="alaa@gmail.com", $gender="f") : string {
        $finalName = !empty($this->name) ? $this->name : $name;
        $finalEmail = !empty($this->email) ? $this->email : $email;
        $finalGender = !empty($this->gender) ? $this->gender : $gender;

        return "Name: " . $finalName . 
               ", Email: " . $finalEmail . 
               ", Gender: " . $finalGender;
    }
}

$a1 = new Author();
$a1->setemail("alaa@gmail.com"); 

echo $a1->toString();


?>
