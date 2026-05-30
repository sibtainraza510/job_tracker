@extends('layouts.simple')

@section('content')

<div class="card">
    <div class="card-title">📊 Dashboard</div>
    
    <div class="grid" style="margin-bottom: 30px;">
        <div class="stat-box">
            <div class="stat-number">{{ $total_jobs ?? 0 }}</div>
            <div class="stat-label">Total Jobs</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">{{ $applied_jobs ?? 0 }}</div>
            <div class="stat-label">Applied</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">{{ $interview_jobs ?? 0 }}</div>
            <div class="stat-label">In Interview</div>
        </div>
    </div>

    <div style="margin-top: 30px;">
        <h3 style="margin-bottom: 15px;">Quick Actions</h3>
        <a href="{{ route('jobs.create') }}" class="btn">➕ Add New Job</a>
        <a href="{{ route('jobs.index') }}" class="btn btn-secondary">💼 View All Jobs</a>
    </div>
</div>

@endsection
