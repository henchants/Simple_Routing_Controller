<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data = ['skills' => ['Critical Thinking', 'Study Skills', 'Active Listening', 'Time Management', 'Self-Discipline', 'Digital Literacy', 'Typing Proficiency', 'Teamwork', 'Conflict Resolution']];
        return view('skills', $data);
    }
}
