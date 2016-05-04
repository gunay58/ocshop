<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class newsController extends Controller
{
    public function showStartPage() {

        //Get the News
        $news = DB::select('select * from news LIMIT 10');

        return view('news')->with(compact('news'));
    }
}
