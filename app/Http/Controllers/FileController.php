<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index() {
$page = "backend.files";
        return view('backend.dashboard',['page'=>$page]);
        
    }
}
