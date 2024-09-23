<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        $data = ['name' => 'Yaroslav', 'role' => 'Student'];
        return view('welcome', $data);
    }

    public function about()
    {
        $data = ['name' => 'Yaroslav', 'role' => 'Student', 'description' => 'About description here.'];
        return view('about', $data);
    }

    public function contact()
    {
        $data = ['email' => 'kogutyaroslav3947@gmail.com', 'phone' => '+123456789'];
        return view('contact', $data);
    }
}
