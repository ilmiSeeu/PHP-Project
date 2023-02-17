<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{

    public function index(Request $request)
    {
        //get all applicants
        $applicants = Applicant::all();

        //if we are requesting a faculty we get only those
        if ($request->has('Faculty')) {
            $applicants = $applicants->where('Faculty', $request->Faculty);
        }
        //return the view
        return view('applicant', compact('applicants'));
    }

    
}
