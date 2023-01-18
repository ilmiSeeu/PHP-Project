<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{

    public function index(Request $request)
    {
        $applicants = Applicant::all();
        if ($request->has('Faculty')) {
            $applicants = $applicants->where('Faculty', $request->Faculty);
        }
        return view('applicant', compact('applicants'));
    }
}
