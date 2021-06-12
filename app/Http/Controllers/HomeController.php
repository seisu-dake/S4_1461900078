<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Home::all();

        return view('home0078', ['data' => $data]);
    }
}
