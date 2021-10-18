<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    const FOLDER = "site";
    const TITLE = "Home Page";
    const ROUTE = "/";

    public function index(){
        $title = self::TITLE;
        return view(self::FOLDER.".home", compact('title'));
    }
}
