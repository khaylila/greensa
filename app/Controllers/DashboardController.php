<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index(): string
    {
        return view('dashboard/index');
    }
    public function a(): string
    {
        return view('dashboard/a');
    }
}
