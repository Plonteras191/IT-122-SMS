<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function index()
    {
        $departments = Department::with('faculty', 'subjects')->get();
        return view('departments.index', compact('departments'));
    }
}
