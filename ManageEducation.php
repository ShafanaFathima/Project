<?php

namespace App\Controllers;

class ManageEducation extends BaseController
{
    public function index()
    {
        return view('ManageEducation/Degree');
    }
    public function group()
    {
        return view('ManageEducation/Group');
    }
    public function level()
    {
        return view('ManageEducation/Level');
    }
   

}
