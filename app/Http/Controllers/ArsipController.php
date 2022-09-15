<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index()
    {
        return view('arsip.index');
    }

    public function add()
    {
        return view('arsip.add');
    }
}
