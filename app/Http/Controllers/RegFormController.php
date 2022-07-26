<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
// use App\Http\Resources\;
use App\Http\Resources\RegisterResource;

class RegFormController extends Controller
{
    public function index($locale = 'ru')
    {
        if ($locale != 'ru') {
            App::setLocale($locale);
        }
        return new RegisterResource('') ;
    }
}
