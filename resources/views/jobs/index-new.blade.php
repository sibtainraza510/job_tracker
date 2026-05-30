@extends('layouts.app')

@section('content')

<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <div class="card-title" style="margin: 0;">💼 My Jobs</div>
        <a href="{{ route('jobs.create') }}" class="btn">➕ New Job</a>
    </div>

    @if($jobs->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Company</th>
                    <th>Status</th>
                    <th>Applied</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td><strong>{{ $job->title }}</strong></td>
                        <td>{{ $job->company->name ?? 'N/A' }}</td>
                        <td>
                            <span style="padding: 4px 8px; border-radius: 3px; font-size: 12px;
                                @if($job->status->name === 'offer') background: #d4edda; color: #155724;
                                @elseif($job->status->name === 'rejected') background: #f8d7da; color: #721c24;
                                @elseif($job->status->name === 'interview') background: #cfe2ff; color: #084298;
                                @else background: #e2e3e5; color: #383d41;
                                @endif">
                                {{ ucfirst($job->status->name) }}
                            </span>
                        </td>
                        <td>{{ $job->applied_at?->format('M d, Y') ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('jobs.show', $job) }}" class="btn" style="padding: 5px 10px; font-size: 12px; margin-right: 5px; margin-bottom: 0;">View</a>
                            <a href="{{ route('jobs.edit', $job) }}" class="btn" style="padding: 5px 10px; font-size: 12px; margin-right: 5px; margin-bottom: 0;">Edit</a>
                            <form action="{{ route('jobs.destroy', $job) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete this job?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="padding: 5px 10px; font-size: 12px; margin-bottom: 0;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="margin-top: 20px; text-align: center;">
            {{ $jobs->links() }}
        </div>
    @else
        <p style="text-align: center; color: #7f8c8d; padding: 40px 0;">No jobs yet. <a href="{{ route('jobs.create') }}" style="color: #3498db;">Create one now!</a></p>
    @endif
</div>

@endsection
