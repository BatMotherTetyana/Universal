<?php

    namespace Limbo\Project\Busstop;

    trait StopTrait {
        protected $name;

        public function getName() {
            return $this->name;
        }
    }