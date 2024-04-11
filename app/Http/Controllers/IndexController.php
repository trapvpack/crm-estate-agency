<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;




class IndexController extends Controller
{
    public function authorization()
    {
        return Inertia::render('Authorization', [
           'title' => 'Authorization'
        ]);
    }
    public function home()
    {
        return Inertia::render('Home', [
            'title' => 'Home'
        ]);
    }
}
