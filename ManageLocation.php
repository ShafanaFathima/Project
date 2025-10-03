<?php

namespace App\Controllers;

class ManageLocation extends BaseController
{
    public function index()
    {
        return view('ManageLocation/City');
    }
    public function location()
    {
        return view('ManageLocation/Location');
    }
    
    
}
