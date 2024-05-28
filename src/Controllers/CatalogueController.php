<?php

namespace Limbo\ex7\Controllers;

use Limbo\ex7\Viewer;
class CatalogueController
{
    public function index(): void
    {
        $page = 'catalogue';
        $title = 'Catalogue';
        $content = 'Каталог';
        $info = "У комп'ютерній термінології каталог, директорія (англ. directory) або тека, папка (англ. folder) — це частина файлової системи, яка дозволяє створювати ієрархічну структуру, об'єднуючи файли та інші каталоги для впорядкування на обчислювальному пристрої.";

        $view = new Viewer(
            [
                'page' => $page,
                'title' => $title,
                'content' => $content,
                'info' => $info,
            ]
        );

        $view->render();
    }
}