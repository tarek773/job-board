<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job; // Assuming Job model is in App\Models namespace
class jobController extends Controller
{
    //
    function index()
    {
        $jobs = Job::all();
        return view('job.index' , ['jobs' => $jobs]);
    }
}
