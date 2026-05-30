<?php

namespace App\Http\Controllers;
use App\Services\JobService;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
class JobController extends Controller
{
    public function __construct(
    protected JobService $jobService
) {}
    /**
     * Display all jobs
     */
  public function index(Request $request)
{
    $jobs = JobApplication::where('user_id', Auth::id())
        ->search($request->search)
        ->latest()
        ->paginate(10);

    return view('jobs.index', compact('jobs'));
}

    /**
     * Show create form
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store new job
     */
   public function store(StoreJobRequest $request)
{
    $data = $request->validated();
    $data['user_id'] = Auth::id();
    
    // Map status name to job_status_id
    $statusMap = [
        'pending' => 1,    // Applied (default/pending)
        'applied' => 1,    // Applied
        'interview' => 2,  // Interview
        'rejected' => 3,   // Rejected
        'offer' => 4,      // Offer
        'ghosted' => 5,    // Ghosted
    ];
     
    if (isset($data['status']) && isset($statusMap[$data['status']])) {
        $data['job_status_id'] = $statusMap[$data['status']];
        unset($data['status']);
    } else {
        $data['job_status_id'] = 1;
        unset($data['status']);
    }
    
    $this->jobService->create($data);

    return redirect()
        ->route('jobs.index')
        ->with('success', 'Job created successfully');
}

    /**
     * Show single job
     *
     * @param \App\Models\JobApplication $job
     */
    public function show(JobApplication $job)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show edit form
     *
     * @param \App\Models\JobApplication $job
     */
    public function edit(JobApplication $job)
    {
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update job
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\JobApplication $job
     */
   public function update(UpdateJobRequest $request, JobApplication $job)
{
    $data = $request->validated();
    
    $statusMap = [
        'pending'   => 1,    // Applied (default/pending)
        'applied'   => 1,    // Applied
        'interview' => 2,    // Interview
        'rejected'  => 3,    // Rejected
        'offer'     => 4,    // Offer
        'ghosted'   => 5,    // Ghosted
    ];
    
    if (isset($data['status']) && isset($statusMap[$data['status']])) {
        $data['job_status_id'] = $statusMap[$data['status']];
        unset($data['status']);
    } else {
        unset($data['status']);
    }
    
    $this->jobService->update($job, $data);

    return redirect()
        ->route('jobs.index')
        ->with('success', 'Job updated successfully');
}

    /**
     * Delete job
     *
     * @param \App\Models\JobApplication $job
     */
    public function destroy(JobApplication $job)
    {
        $job->delete();

        return redirect()
            ->route('jobs.index')
            ->with('success', 'Job deleted successfully');
    }
}




