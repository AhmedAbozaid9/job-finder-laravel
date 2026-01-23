<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit', [
            'user' => auth()->user(),
        ]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->id()],
        ]);

        $request->user()->update($validated);

        return back()->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password'         => ['required', 'confirmed', Password::defaults()],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('success', 'Password updated successfully.');
    }

    public function applications()
    {
        return view('profile.applications', [
            'applications' => auth()->user()->applications()->withPivot('status')->latest()->paginate(10),
        ]);
    }

    public function saved()
    {
        return view('profile.saved', [
            'savedJobs' => auth()->user()->savedJobs()->latest()->paginate(10),
        ]);
    }

    public function myJobs()
    {
        return view('profile.my-jobs', [
            'jobs' => auth()->user()->postedJobs()->latest()->withCount('applicants')->paginate(10),
        ]);
    }

    public function candidates(\App\Models\Job $job)
    {
        // Ensure the user owns the job
        if ($job->user_id !== auth()->id()) {
            abort(403);
        }

        return view('profile.candidates', [
            'job'        => $job,
            'candidates' => $job->applicants()->withPivot('status', 'created_at')->latest('applications.created_at')->paginate(10),
        ]);
    }

    public function updateApplicationStatus(Request $request, \App\Models\Job $job, \App\Models\User $applicant)
    {
        // Ensure the user owns the job
        if ($job->user_id !== auth()->id()) {
            abort(403);
        }

        $validated = $request->validate([
            'status' => ['required', 'in:pending,accepted,rejected'],
        ]);

        $job->applicants()->updateExistingPivot($applicant->id, ['status' => $validated['status']]);

        return back()->with('success', 'Candidate status updated.');
    }
}
