<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $faculty = Faculty::with('department')->get();
        return view('faculty.index', compact('faculty'));
    }
}
