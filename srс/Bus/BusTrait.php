<?php

    namespace Limbo\Project\Bus;

    trait BusTrait {
        protected $num;

        public function getNum($num) {
            return $this->num;
        }
    }