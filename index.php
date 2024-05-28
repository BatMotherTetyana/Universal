<?php
    require_once __DIR__ . '/vendor/autoload.php';
    
    use Limbo\Project\Bus\BigBus;
    use Limbo\Project\Bus\Marshrutka;
    use Limbo\Project\Bus\Tralik;
    use Limbo\Project\Busstop\Konechka;
    use Limbo\Project\Busstop\SimpleStop;
    use Limbo\Project\Passenger\Student;
    use Limbo\Project\Passenger\Babka;
    use Limbo\Project\Passenger\Programist;

    $bb = new BigBus(1);
    $marshrutka = new Marshrutka(2);
    $tralik = new Tralik(3);

    $st1 = new SimpleStop("А");
    $st2 = new SimpleStop("Б");
    $stK = new Konechka("Б");

    $bb->newStop($st1);
    $bb->newStop($st2);
    $bb->newStop($stK);

    $marshrutka->newStop($st1);
    $marshrutka->newStop($st2);

    $tralik->newStop($st2);
    $tralik->newStop($stK);

    $student = new Student("Lim",19);
    $babka = new Babka("Dvor", 70);
    $programist = new Programist("Lex", 18);

    $bb->stRoute();
    $marshrutka->stRoute();
    $tralik->stRoute();
    