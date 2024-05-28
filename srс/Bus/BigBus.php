<?php

    namespace Limbo\Project\Bus;

    final class BigBus extends Bus {
        public function stRoute() {
            echo "BigBus №" . $this->num . " starts.\n";
            foreach ($this->sts as $st) {
                $st->announce();
            }
        }
    }