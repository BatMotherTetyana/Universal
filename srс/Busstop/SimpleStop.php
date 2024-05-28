<?php

    namespace Limbo\Project\Busstop;

    final class SimpleStop extends Busstop {
        public function announce() {
            echo "SimpleStop: {$this->name}";
        }
    }