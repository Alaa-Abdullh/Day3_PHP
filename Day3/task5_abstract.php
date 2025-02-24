<?php
abstract class  Person {
    private $name;
    private $address;


 public function __construct($name="defult", $address=",ll,"){
    $this->name = $name;
    $this->address = $address;

 }
       

    public function setaddress($address) {
        $this->address = $address;
    }

    public function getaddress() {
        return $this->address;
    }


    public function __toString() {
        return "Person[name=" . $this->name . ",address=" . $this->getaddress() . "]";
    }
}

 class  Student extends Person {
    private $program;
    private $year;
    private $fee;



 public function __construct($name="defult student", $address="defult student",$program="defult student" ,$year="defult student",$fee="defult student"){
  parent::__construct($name,$address);
    $this->year = $year;
    $this->program = $program;
    $this->fee = $fee;

 }
       

    public function setprogram($program) {
        $this->program = $program;
    }

    public function getprogram() {
        return $this->program;
    }

    public function setyear($year) {
        $this->year = $year;
    }

    public function getyear() {
        return $this->year;
    }
    public function setfee($fee) {
        $this->fee = $fee;
    }

    public function getfee() {
        return $this->fee;
    }



    public function __toString() {
        return "Student[" . parent::__toString() .
               ", program=" . $this->program .
               ", year=" . $this->year .
               ", fee=" . $this->fee . "]";
    }
    
}
$p1 = new Student("Omar" , "22 str");
$p1->setaddress("24str"); 

echo $p1->__toString();



?>