<?php

    namespace Limbo\Project\Bus;

    final class Tralik extends Bus {
        public function stRoute() {
            echo "Tralik " . $this->num . " starts.\n";
            foreach ($this->sts as $st) {
                $st->announce();
            }
        }
    }
