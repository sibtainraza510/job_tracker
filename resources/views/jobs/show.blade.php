@extends('layouts.simple')

@section('content')

<div class="breadcrumb">
    <a href="{{ route('jobs.index') }}">My Applications</a> &rsaquo; Application Details
</div>

<div class="card">
    <!-- Header -->
    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
        <div>
            <h1 style="font-size: 24px; font-weight: bold; color: #2c3e50; margin-bottom: 5px;">{{ $job->title }}</h1>
            <p style="color: #7f8c8d; font-size: 16px;">{{ $job->company_name ?? 'Unknown Company' }}</p>
        </div>
        <div>
            @php
                $statusName = $job->status->name ?? 'unknown';
                $colors = [
                    'applied'   => '#3498db',
                    'interview' => '#f39c12',
                    'offer'     => '#27ae60',
                    'rejected'  => '#e74c3c',
                    'ghosted'   => '#95a5a6',
                    'pending'   => '#95a5a6',
                ];
                $color = $colors[$statusName] ?? '#95a5a6';
            @endphp
            <span style="background: {{ $color }}; color: white; padding: 6px 16px; border-radius: 16px; font-size: 14px; font-weight: bold;">
                {{ ucfirst($statusName) }}
            </span>
        </div>
    </div>

    <!-- Details Grid -->
    <div class="grid" style="margin-bottom: 20px;">
        <div>
            <div style="font-size: 12px; font-weight: bold; color: #7f8c8d; text-transform: uppercase; margin-bottom: 5px;">Location</div>
            <div>{{ $job->location ?? 'Not specified' }}</div>
        </div>
        <div>
            <div style="font-size: 12px; font-weight: bold; color: #7f8c8d; text-transform: uppercase; margin-bottom: 5px;">Salary</div>
            <div>{{ $job->salary ? '$' . number_format($job->salary, 2) : 'Not specified' }}</div>
        </div>
        <div>
            <div style="font-size: 12px; font-weight: bold; color: #7f8c8d; text-transform: uppercase; margin-bottom: 5px;">Remote</div>
            <div>{{ $job->is_remote ? 'Yes' : 'No' }}</div>
        </div>
        <div>
            <div style="font-size: 12px; font-weight: bold; color: #7f8c8d; text-transform: uppercase; margin-bottom: 5px;">Date Applied</div>
            <div>{{ $job->applied_at ? $job->applied_at->format('M d, Y') : 'Not specified' }}</div>
        </div>
    </div>

    @if($job->application_url)
        <div style="margin-bottom: 20px;">
            <div style="font-size: 12px; font-weight: bold; color: #7f8c8d; text-transform: uppercase; margin-bottom: 5px;">Application URL</div>
            <a href="{{ $job->application_url }}" target="_blank" style="color: #3498db; word-break: break-all;">
                {{ $job->application_url }}
            </a>
        </div>
    @endif

    @if($job->notes)
        <div style="margin-bottom: 20px; padding: 15px; background: #f8f9fa; border-radius: 4px; border-left: 3px solid #3498db;">
            <div style="font-size: 12px; font-weight: bold; color: #7f8c8d; text-transform: uppercase; margin-bottom: 8px;">Notes</div>
            <p style="white-space: pre-wrap; color: #333;">{{ $job->notes }}</p>
        </div>
    @endif

    @if($job->interviews->count() > 0)
        <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
            <h2 style="font-size: 18px; font-weight: bold; margin-bottom: 15px; color: #2c3e50;">
                Interviews ({{ $job->interviews->count() }})
            </h2>
            @foreach($job->interviews as $interview)
                <div style="background: #f8f9fa; padding: 12px; border-radius: 4px; margin-bottom: 10px;">
                    <p style="font-weight: bold;">Round {{ $interview->round ?? 'N/A' }}</p>
                    <p style="color: #7f8c8d; font-size: 13px;">{{ $interview->scheduled_at ? $interview->scheduled_at->format('M d, Y \a\t h:i A') : 'TBD' }}</p>
                    <p style="color: #7f8c8d; font-size: 13px; text-transform: capitalize;">Mode: {{ $interview->mode ?? 'N/A' }}</p>
                    @if($interview->feedback)
                        <p style="margin-top: 8px; font-size: 13px;">{{ $interview->feedback }}</p>
                    @endif
                </div>
            @endforeach
        </div>
    @endif

    @if($job->skills->count() > 0)
        <div style="margin-bottom: 20px;">
            <h2 style="font-size: 18px; font-weight: bold; margin-bottom: 12px; color: #2c3e50;">Skills Required</h2>
            <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                @foreach($job->skills as $skill)
                    <span style="background: #ecf0f1; color: #2c3e50; padding: 4px 12px; border-radius: 12px; font-size: 13px;">
                        {{ $skill->name }}
                    </span>
                @endforeach
            </div>
        </div>
    @endif

    <!-- Action Buttons -->
    <div style="padding-top: 20px; border-top: 1px solid #eee;">
        <a href="{{ route('jobs.edit', $job) }}" class="btn">&#9998; Edit Application</a>

        <form action="{{ route('jobs.destroy', $job) }}" method="POST" style="display: inline;"
              onsubmit="return confirm('Are you sure you want to delete this job application?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">&#128465; Delete Application</button>
        </form>

        <a href="{{ route('jobs.index') }}" class="btn btn-secondary">&#8592; Back to Applications</a>
    </div>
</div>

@endsection
