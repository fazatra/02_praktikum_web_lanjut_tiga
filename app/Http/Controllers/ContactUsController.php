<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{

public function index()
{
    return redirect()->to('https://www.educastudio.com/contact-us');
}
}
