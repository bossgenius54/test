<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteBasicViewController extends Controller
{
    public function welcome () {
        return view('landing',['title' => 'hello']);
    }
}
