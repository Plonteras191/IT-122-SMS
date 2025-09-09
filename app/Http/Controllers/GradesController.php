<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function index()
    {
        $grades = Grade::with('student', 'subject')->get();
        return view('grades.index', compact('grades'));
    }
}


