<?php

declare(strict_types=1);

namespace Clover\App\Controllers;

class HomeController
{
    public function index()
    {
        return view('home');
    }
}
