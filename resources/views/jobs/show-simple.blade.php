@extends('layouts.simple')

@section('content')

<div class="card">
    <div class="card-title">{{ $job->title }}</div>

    <table>
        <tr>
            <td style="width: 200px;"><strong>Company:</strong></td>
            <td>{{ $job->company->name ?? 'N/A' }}</td>
        </tr>
        <tr>
            <td><strong>Status:</strong></td>
            <td>
                <span style="padding: 4px 8px; border-radius: 3px;
                    @if($job->status->name === 'offer') background: #d4edda; color: #155724;
                    @elseif($job->status->name === 'rejected') background: #f8d7da; color: #721c24;
                    @elseif($job->status->name === 'interview') background: #cfe2ff; color: #084298;
                    @else background: #e2e3e5; color: #383d41;
                    @endif">
                    {{ ucfirst($job->status->name) }}
                </span>
            </td>
        </tr>
        <tr>
            <td><strong>Location:</strong></td>
            <td>{{ $job->location ?? 'Not specified' }}</td>
        </tr>
        <tr>
            <td><strong>Salary:</strong></td>
            <td>{{ $job->salary ? '$' . number_format($job->salary, 2) : 'Not specified' }}</td>
        </tr>
        <tr>
            <td><strong>Remote:</strong></td>
            <td>{{ $job->is_remote ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td><strong>Applied Date:</strong></td>
            <td>{{ $job->applied_at?->format('M d, Y') ?? 'Not specified' }}</td>
        </tr>
    </table>

    @if($job->notes)
        <div style="margin-top: 20px; padding: 15px; background: #f9f9f9; border: 1px solid #ddd; border-radius: 4px;">
            <strong>Notes:</strong>
            <p style="margin-top: 10px; white-space: pre-wrap;">{{ $job->notes }}</p>
        </div>
    @endif

    <div style="margin-top: 30px;">
        <a href="{{ route('jobs.edit', $job) }}" class="btn">✏️ Edit</a>
        <a href="{{ route('jobs.index') }}" class="btn btn-secondary">← Back</a>
        <form action="{{ route('jobs.destroy', $job) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete this job?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">🗑️ Delete</button>
        </form>
    </div>
</div>

@endsection
