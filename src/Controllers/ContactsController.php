<?php

namespace Limbo\ex7\Controllers;

use Limbo\ex7\Viewer;

class ContactsController
{
    public function index(): void
    {
        $page = 'contacts';
        $title = 'Contacts';
        $content = 'Контакти';
        $info = "Контакти - це відомості про способи зв'язку з людиною чи організацією. Ця інформація може включати номер телефону, електронну пошту, адресу, посилання на соціальні мережі тощо. Контактна інформація дозволяє іншим зв'язатися з вами або вашою організацією для різних цілей, таких як узгодження зустрічі, отримання додаткової інформації або обговорення питань.";

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