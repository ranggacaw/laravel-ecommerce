<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return View('contact.index');
    }
}
