<?php
    // class ClassName{
    //     // function __destruct(){
    //     //     echo "I am a destructor";
    //     // }
    //     function __construct(){
    //         $this->testfunction();
    //     }
    //     function testfunction(){
    //         echo " I am a test funciton";
    //     }
    //     function test(){
    //         $this->test();
    //     }
    // }
    // $obj = new ClassName();
    // $obj->testfunction();


    //class variables 
    // class Student{
    //     public $name = 'Banmala';
    //     protected $college = 'khwopa';
    //     private $address = 'Liwali';

    //     function getCollege(){
    //         return $this->college;
    //     }
    //     function getAddress(){
    //         return $this->address;
    //     }
    //     function setCollege($college){
    //         $this->college = $college;
    //     }
    //     function setAddress($address){
    //         $this->address = $address;
    //     }
    // }
    // $s1 = new Student();
    // echo ($s1->name);
    // echo $s1->getCollege();
    // echo $s1->getAddress();
    // $s1->name = "Sunil Banmala";
    // $s1->setCollege("Khwopa College of Engineering");
    // $s1->setAddress("Bhaktapur, Nepal");
    // echo "<br>";
    // echo ($s1->name);
    // echo $s1->getCollege();
    // echo $s1->getAddress();

    class Car{
        const WHEEL = 4;
        public $d = 3 ;

        function getWheel(){
            return self::WHEEL;
        }
    }
    echo Car::WHEEL;
    $nano = new Car();
    echo $nano->getWheel();
?>