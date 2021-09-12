<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index ()
    {
        $languages = ['HTML', 'CSS', 'JavaScript'];
        return view('language.index', ['languages' => $languages]);
    }
}
