<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PostPhoto;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
        $postPhoto =PostPhoto::all();
        return view("test");
    }
}
