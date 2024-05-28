<?php

    namespace Limbo\Project\Bus;

    use Limbo\Project\Bus\Bus;

    abstract class Passenger implements PassengerInterface {
        protected $name;
        protected $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function __destruct() {
            echo "Passenger {$this->name} came to the bus stops.";
        }

        abstract function inBus(Bus $bus);
        abstract function outBus(Bus $bus);

        protected static $t_pass = 0;

        public static function getTPass() {
            return self::$t_pass;
        }
    }