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

    public function estate(): \Inertia\Response
    {
        return Inertia::render('Estate', [
            'title' => 'Estate'
        ]);
    }

    public function deals(): \Inertia\Response
    {
        return Inertia::render('Deals', [
            'title' => 'Deals'
        ]);
    }

    public function applications(): \Inertia\Response
    {
        return Inertia::render('Applications', [
            'title' => 'Applications'
        ]);
    }
}
