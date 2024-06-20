<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data = ['hobbies' => ['Reading', 'Traveling', 'Photography', 'Playing', 'Coffee', 'Arts', 'Horror Movies']];
        return view('hobbies', $data);
    }
}
