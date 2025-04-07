<?php

namespace App\Http\Controllers;

use App\Models\JobCandidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function my_applications() {
        $user = Auth::user();
        $my_applications = JobCandidate::where('candidate_id', $user->id)->orderByDesc('id')->paginate(10);
        return view('dashboard.my_applications', compact('my_applications'));
    }

    public function my_applications_details(JobCandidate $jobCandidate) {
        $user = Auth::user();
        if($jobCandidate->candidate_id != $user->id) {
            abort(403);
        }
        return view('dashboard.my_application_details', compact('jobCandidate'));
    }
}
