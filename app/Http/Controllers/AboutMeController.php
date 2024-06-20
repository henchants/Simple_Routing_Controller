<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = ['name' => 'Henry Chantioco', 'description' => 'A college student majoring in Web Tech.'];
        return view('about_me', $data);
    }
}
