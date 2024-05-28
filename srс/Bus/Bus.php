<?php

    namespace Limbo\Project\Bus;

    use Limbo\Project\busstop\Busstop;

    abstract class Bus {
        use BusTrait;
        protected $num;
        protected $pass = [];
        protected $sts = [];
        
        public function __construct($num) {
            $this->num = $num;
        }

        public function newStop(Busstop $st) {
            $this->sts[] = $st;
        }

        abstract public function stRoute();
    }