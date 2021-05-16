<?php

  // class students that contains studetn name, grade, subject
  // class for car that has a make, model ,year property,


  class Student {
    public $name;
    public $grade;
    public $major;

    function __construct($name, $grade, $major){
      $this->name = $name;
      $this->grade = $grade;
      $this->major = $major;
    }
  }

  $student1 = new Student('Nick', '100', 'PHP');
  echo $student1->name . "\n";
  echo $student1->grade . "\n";
  echo $student1->major . "\n";

  class Car {
    public $make;
    public $model;
    public $year;

    function __construct($make, $model, $year){
      $this->make =  $make;
      $this->model =  $model;
      $this->year =  $year;
    }

    function isOld(){
      if(intval($this->year) < 2000){
        return true;
      }else {
        return false;
      }
    }
  }

  $car1 = new Car('Mercedes', "Gullwing 300sl", "1957");
  $car2 = new Car('BMW', "M3", "2021");
  echo "car1 is old?: " . ($car1->isOld() ? "true\n" : "false\n");
  echo "car2 is old?: " . ($car2->isOld() ? "true\n" : "false\n");

  class Movie {
    public $title;
    private $rating;

    function __construct($title, $rating){
      $this->title = $title;
      $this->setRating($rating);
    }

    function getRating(){
      echo $this->rating . "\n";
    }

    function setRating($rating){
      $this->rating = $rating;
    }
  }

  $harryPotter = new Movie('Harry Potter', 'PG-13');
  $rated = $harryPotter->getRating();

  $harryPotter->setRating('R');
  $rated = $harryPotter->getRating();



?>
