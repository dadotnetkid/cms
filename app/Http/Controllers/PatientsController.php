<?php

namespace App\Http\Controllers;

use App\patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Get()
    {
        $patients = patients::all();
        return $patients;
    }
}
