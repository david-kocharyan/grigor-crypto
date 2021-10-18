<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    const FOLDER = "admin";
    const TITLE = "Home Page";
    const ROUTE = "/admin";

    public function index()
    {
        $title = self::TITLE;
        return view(self::FOLDER.'.home', compact('title'));
    }
}
