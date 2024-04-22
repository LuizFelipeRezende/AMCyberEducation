<?php

namespace AMCyber\Controllers;

class NotFoundController
{

    public function index()
    {
        \AMCyber\Views\MainView::render('404');
    }
}
