<?php

namespace App\Controllers;

class Payment extends BaseController
{
    public function index()
    {
        return view('Payments/AllPayments');
    }
    public function approved()
    {
        return view('Payments/ApprovedPayments');
    }
    public function initiated()
    {
        return view('Payments/InitiatedPayments');
    }
    public function pending()
    {
        return view('Payments/PendingPayments');
    }
    public function rejected()
    {
        return view('Payments/RejectedPayments');
    }
    public function successful()
    {
        return view('Payments/SuccessfulPayments');
    }
}
