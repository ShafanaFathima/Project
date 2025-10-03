<?php

namespace App\Controllers;

class ManageEmployers extends BaseController
{
    public function index()
    {
        return view('ManageEmployers/ActiveEmployers');
    }
    public function allemployers()
    {
        return view('ManageEmployers/AllEmployers');
    }
    public function banned()
    {
        return view('ManageEmployers/BannedEmployers');
    }
    public function emailunverified()
    {
        return view('ManageEmployers/EmailUnverified');
    }
    public function mobileunverified()
    {
        return view('ManageEmployers/MobileUnverified');
    }
    public function sendnotification()
    {
        return view('ManageEmployers/SendNotification');
    }
    public function balance()
    {
        return view('ManageEmployers/WithBalance');
    }
}
