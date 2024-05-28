<?php

    namespace Limbo\Project\Bus;

    use Limbo\Project\Bus\Bus;

    interface PassengerInterface {
        public function inBus(Bus $bus);
        public function outBus(Bus $bus);
    }