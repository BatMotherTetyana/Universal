<?php

    namespace Limbo\Project\Busstop;

    final class Konechka extends Busstop {
        public function announce() {
            echo "Konechka: {$this->name}";
        }
    }