<?php

    namespace Limbo\Project\Bus;

    final class Marshrutka extends Bus {
        public function stRoute() {
            echo "Marshrutka" . $this->num . " starts.\n";
            foreach ($this->sts as $st) {
                $st->announce();
            }
        }
    }