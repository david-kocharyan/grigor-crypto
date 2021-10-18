<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    const FOLDER = "admin.contact";
    const TITLE = "Contact Page";
    const ROUTE = "/admin/contact";
    const LIMIT = 15;

    public function index()
    {
        $title = self::TITLE;
        $route = self::ROUTE;
        $data = Contact::orderBy('id', 'ASC')->paginate(self::LIMIT);
        return view(self::FOLDER.'.index', compact('title', 'route', 'data'));
    }

    public function delete($id){
        Contact::destroy($id);
        return redirect(self::ROUTE);
    }
}
