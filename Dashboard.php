<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->has('logged_in')) {
            return redirect()->to('dashboard');
        }

        return view('dashboard');
    }
}
