<?php

namespace App\Controllers;

class ManageBasic extends BaseController
{
    public function index()
    {
        return view('ManageBasic/Experience');
    }
    public function nofemployees()
    {
        return view('ManageBasic/NoOfEmployees');
    }
    public function salary()
    {
        return view('ManageBasic/SalaryPeriod');
    }
    public function shift()
    {
        return view('ManageBasic/Shift');
    }
    public function skill()
    {
        return view('ManageBasic/Skill');
    }
    public function type()
    {
        return view('ManageBasic/Type');
    }
   

}
