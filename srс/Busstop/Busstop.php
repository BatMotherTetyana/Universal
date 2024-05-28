<?php

    namespace Limbo\Project\Busstop;

    abstract class Busstop {
        use StopTrait;

        public function __construct($name) {
            $this->name = $name;
        }

        public function __destruct() {
            echo "StopTrait {$this->name} is exist.";
        }        

        abstract public function announce();

        protected static $t_sts = 0;

        public static function getTSts() {
            return self::$t_sts;
        }
    }