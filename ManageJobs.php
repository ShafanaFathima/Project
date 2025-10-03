<?php

namespace App\Controllers;

class ManageJobs extends BaseController
{
    public function index()
    {
        return view('ManageJobs/AllJobs');
    }
    public function approvedjobs()
    {
        return view('ManageJobs/ApprovedJobs');
    }
    public function expiredjobs()
    {
        return view('ManageJobs/ExpiredJobs');
    }
    public function pendingjobs()
    {
        return view('ManageJobs/PendingJobs');
    }
    public function rejectedjobs()
    {
        return view('ManageJobs/RejectedJobs');
    }
}
