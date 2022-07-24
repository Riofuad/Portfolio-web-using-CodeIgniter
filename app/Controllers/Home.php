<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function profile()
    {
        return view('profile');
    }
    public function project()
    {
        return view('project');
    }
    public function contact()
    {
        $data['name'] = "Iman Mustika";
        return view('contact', $data);
    }
}
