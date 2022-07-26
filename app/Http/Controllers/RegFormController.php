<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

// use App\Http\Resources\RegResource;

class RegFormController extends Controller
{
    public function index($locale = 'ru')
    {
        if ($locale != 'ru') {
            App::setLocale($locale);
        }
    
        $data = [
        'title' => __('register.title'),
        'placeholders' => [
            'name' => __('register.name'),
            'email' => __('register.email'),
            'password' => __('register.password'),
            'password_confirm' => __('register.password_confirm'),
        ],
        'reg_button' => __('register.reg_button'),
    ];
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}
