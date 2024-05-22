<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class IndexController extends Controller
{
    public function authorization(): \Inertia\Response
    {
        return Inertia::render('Authorization', [
            'title' => 'Authorization'
        ]);
    }

    public function home(): \Inertia\Response
    {
        return Inertia::render('Home', [
            'title' => 'Home'
        ]);
    }

    public function clients(): \Inertia\Response
    {
        return Inertia::render('Clients', [
            'title' => 'Clients'
        ]);
    }
}
