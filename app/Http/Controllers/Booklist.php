<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Root;
class Booklist extends Controller
{

    public function index()
    {
        $data = Root::all();
        return $data;
    }
}