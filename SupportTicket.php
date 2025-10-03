<?php

namespace App\Controllers;

class SupportTicket extends BaseController
{
    public function index()
    {
        return view('SupportTicket/AllTickets');
    }
    public function answered()
    {
        return view('SupportTicket/AnsweredTickets');
    }
    public function closed()
    {
        return view('SupportTicket/ClosedTickets');
    }
    public function pendingticket()
    {
        return view('SupportTicket/PendingTickets');
    }
}