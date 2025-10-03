<?php

namespace App\Controllers;

class Report extends BaseController
{
    public function index()
    {
        return view('Report/LoginHistory');
    }
    public function history()
    {
        return view('Report/NotificationHistory');
    }
    public function transaction()
    {
        return view('Report/Transaction');
    }
   
}