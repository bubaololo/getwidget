<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($locale = 'ru')
    {
        if ($locale != 'ru') {
            App::setLocale($locale);
        }

        return "dashboard" ;
    }
}
