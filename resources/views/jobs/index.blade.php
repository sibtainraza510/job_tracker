@extends('layouts.simple')

@section('content')

<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <div class="card-title" style="margin-bottom: 0;">&#128203; My Applications</div>
        <a href="{{ route('jobs.create') }}" class="btn">&#43; Add Application</a>
    </div>

    <!-- Search Form -->
    <form method="GET" style="margin-bottom: 20px;">
        <div style="display: flex; gap: 10px;">
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search by job title or company..."
                style="flex: 1; padding: 10px; border: 1px solid #bdc3c7; border-radius: 4px; font-size: 14px;"
            >
            <button type="submit" class="btn" style="margin: 0;">Search</button>
            @if(request('search'))
                <a href="{{ route('jobs.index') }}" class="btn btn-secondary" style="margin: 0;">Clear</a>
            @endif
        </div>
    </form>

    @if($jobs->count())
        <table>
            <thead>
                <tr>
                    <th>Job Title</th>
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
                        <td>{{ $job->company_name ?? 'N/A' }}</td>
                        <td>
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
                            <span style="background: {{ $color }}; color: white; padding: 3px 10px; border-radius: 12px; font-size: 12px; font-weight: bold;">
                                {{ ucfirst($statusName) }}
                            </span>
                        </td>
                        <td>{{ $job->applied_at ? $job->applied_at->format('M d, Y') : 'N/A' }}</td>
                        <td>
                            <a href="{{ route('jobs.show', $job) }}" class="btn" style="padding: 5px 10px; margin-bottom: 0;">View</a>
                            <a href="{{ route('jobs.edit', $job) }}" class="btn btn-secondary" style="padding: 5px 10px; margin-bottom: 0;">Edit</a>
                            <form action="{{ route('jobs.destroy', $job) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete this job application?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="padding: 5px 10px; margin-bottom: 0;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div style="margin-top: 10px;">
            {{ $jobs->appends(request()->query())->links() }}
        </div>

    @else
        <div style="text-align: center; padding: 40px; color: #7f8c8d;">
            <div style="font-size: 48px; margin-bottom: 15px;">&#128269;</div>
            <h2 style="margin-bottom: 10px;">No Jobs Found</h2>
            @if(request('search'))
                <p>No results for "{{ request('search') }}". <a href="{{ route('jobs.index') }}" style="color: #3498db;">Clear search</a></p>
            @else
                <p style="margin-bottom: 20px;">You haven't added any applications yet.</p>
                <a href="{{ route('jobs.create') }}" class="btn">&#43; Add Your First Application</a>
            @endif
        </div>
    @endif
</div>

@endsection