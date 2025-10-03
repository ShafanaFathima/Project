<?php

namespace App\Controllers;

class ManageUsers extends BaseController
{
    public function index()
    {
        return view('ManageUsers/ActiveUsers');
    }
    public function allusers()
    {
        return view('ManageUsers/AllUsers');
    }
    public function bannedusers()
    {
        return view('ManageUsers/BannedUsers');
    }
    public function email()
    {
        return view('ManageUsers/EmailUnverified');
    }
    public function mobile()
    {
        return view('ManageUsers/MobileUnverified');
    }
    public function send()
    {
        return view('ManageUsers/SendNotifications');
    }
}
