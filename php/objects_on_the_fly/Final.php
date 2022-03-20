<?php

declare(strict_types=1);

$object_oriented_php = new class(){
    public $description;
    public $kata_list;
    public $kata_count;
    public $author;

    public function __construct() {
        $this->description = 'An amazing PHP Kata Series, complete with 10 top-quality Kata containing a large number of both fixed and random tests, that teaches both the fundamentals of object-oriented programming in PHP (in the first 7 Kata of this Series) and more advanced OOP topics in PHP (in the last 3 Kata of this Series) such as interfaces, abstract classes and even anonymous classes in a way that stimulates critical thinking and encourages independent research';
        $this->kata_list = [
            'Object-Oriented PHP #1 - Classes, Public Properties and Methods',
            'Object-Oriented PHP #2 - Class Constructors and $this',
            'Object-Oriented PHP #3 - Class Constants and Static Methods',
            'Object-Oriented PHP #4 - People, people, people (Practice)',
            'Object-Oriented PHP #5 - Classical Inheritance',
            'Object-Oriented PHP #6 - Visibility',
            'Object-Oriented PHP #7 - The "Final" Keyword',
            'Object-Oriented PHP #8 - Interfaces [Advanced]',
            'Object-Oriented PHP #9 - Abstract Classes [Advanced]',
            'Object-Oriented PHP #10 - Objects on the Fly [Advanced]'
        ];
        $this->kata_count = count($this->kata_list);

        $this->author = new class("Donald", 17, "Male", "Computer Programmer") {
            public $name;
            public $age;
            public $gender;
            public $occupation;

            public function __construct($name, $age, $gender, $occupation)
            {
                $this->name = $name;
                $this->age = $age;
                $this->gender = $gender;
                $this->occupation = $occupation;
            }
            public function __toString()
            {
                return "{$this->name}, aged {$this->age}, who is a computer programmer proficient in Javascript and PHP and is a PHP enthusiast";
            }
        };
    }
    
    public function advertise(string $name)
    {
        return "Hey {$name}, don't forget to check out this great PHP Kata Series authored by Donald called \"Object-Oriented PHP\"";
    }

    public function get_kata_by_number($kataIndex)
    {
        if(!is_int($kataIndex) || $kataIndex < 1 || $kataIndex > 10) {
            throw new InvalidArgumentException();
        }
        return $this->kata_list[$kataIndex - 1];
    }

    function complete(): string
    {
        return "Hooray, I've finally completed the entire \"Object-Oriented PHP\" Kata Series!!!";
    }

    public function __toString()
    {
        return $this->description;
    }
};
