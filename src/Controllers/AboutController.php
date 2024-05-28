<?php

namespace Limbo\ex7\Controllers;

use Limbo\ex7\Viewer;

class AboutController
{
    public function index(): void
    {
        $page = 'about';
        $title = 'About';
        $content = 'Інфо';
        $info = "Інформація - це знання або дані, що передаються чи отримуються для застосування в різних контекстах. Вона може бути представлена у вигляді тексту, зображень, звуків, відео тощо. Інформація використовується для сповіщення, навчання, розваг, прийняття рішень та інших цілей. Вона є важливою складовою сучасного світу і знаходить застосування у всіх сферах життя - від особистого до професійного.";

        $view = new Viewer(
            [
                'page' => $page,
                'title' => $title,
                'content' => $content,
                'info' => $info
            ]
        );

        $view->render();
    }
}