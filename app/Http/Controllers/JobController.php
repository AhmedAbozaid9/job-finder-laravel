<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Job::query();

        // Search by title or description or company
        if ($search = request('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('company_name', 'like', "%{$search}%");
            });
        }

        // Filter by location
        if ($location = request('location')) {
            $query->where('location', 'like', "%{$location}%");
        }

        // Filter by type
        if ($type = request('type')) {
            $query->where('type', $type);
        }

        // Filter by category
        if ($category = request('category')) {
            $query->where('category', $category);
        }

        // Filter by experience level
        if ($level = request('experience_level')) {
            $query->where('experience_level', $level);
        }

        // Filter by minimum salary
        if ($minSalary = request('min_salary')) {
            $query->where('salary', '>=', $minSalary);
        }

        $jobs = $query->latest()->paginate(12)->withQueryString();

        return view('job.index', [
            'jobs' => $jobs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        $validated = $request->validated();

        // Convert comma-separated requirements requirements to array if it's a string
        if (isset($validated['requirements']) && is_string($validated['requirements'])) {
            $validated['requirements'] = array_map('trim', explode("\n", $validated['requirements']));
        }

        $validated['user_id'] = auth()->id();

        Job::create($validated);

        return redirect()->route('jobs.index');
    }

    public function apply(Job $job)
    {
        $user = auth()->user();

        if ($user->isRecruiter()) {
            return back()->with('error', 'Recruiters cannot apply to jobs.');
        }

        if ($job->applicants()->where('user_id', $user->id)->exists()) {
            return back()->with('error', 'You have already applied for this job.');
        }

        $job->applicants()->attach($user->id);

        return back()->with('success', 'Application sent successfully!');
    }

    public function save(Job $job)
    {
        $user = auth()->user();

        if ($user->isRecruiter()) {
            return back()->with('error', 'Recruiters cannot save jobs.');
        }

        $job->savedBy()->toggle($user->id);

        return back()->with('success', 'Job saved status updated.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('job.show', [
            'job' => $job,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
