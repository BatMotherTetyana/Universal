<?php

    namespace Limbo\Project\Passenger;

    use Limbo\Project\Bus\Bus;
    use Limbo\Project\Bus\Passenger;

    final class Student extends Passenger {
        public function inBus(Bus $bus)
        {
            echo "{$this->name} got into the transport.";
        }
        public function outBus(Bus $bus)
        {
            echo "{$this->name} got out of the transport.";
        }
    }