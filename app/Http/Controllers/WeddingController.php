<?php

namespace App\Http\Controllers;

use App\Models\Wedding;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
     function home()
    {
        $weddings =Wedding::all();
        return [
            view("welcome",compact("weddings"))
        ];
    }

}
