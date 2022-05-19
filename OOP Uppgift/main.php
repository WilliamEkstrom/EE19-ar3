<?php
        // Public
        // Private
        // Protected


    class Employee extends Person {

        public static $payNumber = 100;

        const COMPANY_NAME = 'ACME';

        /**
         * Title of job
         * @var string Job Title
         */
        public $jobTitle;
        private $jobNumber;

        public static function generatePayslip() {
            return self::$payNumber;
        }

        public function __construct($jobTitle, $firstName, $lastName, $gender = 'f') {
            $this->$jobTitle = $jobTitle;

            echo self::generatePayslip();
        
            parent::__construct($firstName, $lastName, $jobTitle);
        }

        public function __set($name, $value){
            $this->$name = ucfirst($value);
        }

        public function __get($name) {
            return $this->$name;
        }
        
        public function sayHello() {
            $message = "Hello my name is " . $this->firstName . " " . $this->lastName. " \n";
            $message.=" My job title is ". $this->jobTitle;
            return $message;
        }

    }
    class Person {
        const EYE_COLOR = 'brown';
        protected $firstName;
        public $lastName;
        public $gender;

        public function __construct($firstName, $lastName, $gender = 'f') {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->gender = $gender;
            self::EYE_COLOR;
        }
            public function getGender(){
                return $this->gender;
            }
    }

    echo Employee::generatePayslip();
    echo "\n";
