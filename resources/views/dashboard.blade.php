@extends('layouts.simple')

@section('content')

<div class="card">
    <div class="card-title">&#128202; Dashboard</div>

    <div class="grid" style="margin-bottom: 30px;">
        <div class="stat-box">
            <div class="stat-number">{{ \App\Models\JobApplication::where('user_id', auth()->id())->count() }}</div>
            <div class="stat-label">Total Applications</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">{{ \App\Models\JobApplication::where('user_id', auth()->id())->where('job_status_id', 1)->count() }}</div>
            <div class="stat-label">Applied</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">{{ \App\Models\JobApplication::where('user_id', auth()->id())->where('job_status_id', 2)->count() }}</div>
            <div class="stat-label">In Interview</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">{{ \App\Models\JobApplication::where('user_id', auth()->id())->where('job_status_id', 4)->count() }}</div>
            <div class="stat-label">Offers</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">{{ \App\Models\JobApplication::where('user_id', auth()->id())->where('job_status_id', 3)->count() }}</div>
            <div class="stat-label">Rejected</div>
        </div>
    </div>

    <div>
        <h3 style="margin-bottom: 15px; font-weight: bold;">Quick Actions</h3>
        <a href="{{ route('jobs.create') }}" class="btn">➕ Add Application</a>
        <a href="{{ route('jobs.index') }}" class="btn btn-secondary">📋 My Applications</a>
        <a href="{{ route('profile.edit') }}" class="btn btn-secondary">&#128100; My Profile</a>
    </div>
</div>

@endsection
