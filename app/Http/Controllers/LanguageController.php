<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index ()
    {
        $languages = ['HTML', 'CSS', 'JavaScript','PHP','Ruby','Python'];
        return view('language.index', ['languages' => $languages]);
    }
}
