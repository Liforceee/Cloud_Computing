<?php

namespace App\Controllers;

class masukController extends BaseController
{
    public function index(): string
    {
        return view('content/barangMasuk');
    }
}
