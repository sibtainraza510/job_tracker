@extends('layouts.simple')

@section('content')

<div class="card">
    <div class="card-title">✏️ Edit Job</div>

    <form action="{{ route('jobs.update', $job) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label>Job Title *</label>
            <input type="text" name="title" value="{{ old('title', $job->title) }}" required>
            @error('title')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Company Name *</label>
            <input type="text" name="company_name" value="{{ old('company_name', $job->company->name ?? '') }}" required>
            @error('company_name')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" value="{{ old('location', $job->location) }}">
            @error('location')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Salary (USD)</label>
            <input type="number" name="salary" value="{{ old('salary', $job->salary) }}" step="0.01" min="0">
            @error('salary')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Status *</label>
            <select name="status" required>
                <option value="">-- Select Status --</option>
                <option value="pending" {{ old('status', $job->status->name) === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="applied" {{ old('status', $job->status->name) === 'applied' ? 'selected' : '' }}>Applied</option>
                <option value="interview" {{ old('status', $job->status->name) === 'interview' ? 'selected' : '' }}>Interview</option>
                <option value="rejected" {{ old('status', $job->status->name) === 'rejected' ? 'selected' : '' }}>Rejected</option>
                <option value="offer" {{ old('status', $job->status->name) === 'offer' ? 'selected' : '' }}>Offer</option>
            </select>
            @error('status')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div style="margin-top: 30px;">
            <button type="submit" class="btn">✓ Update Job</button>
            <a href="{{ route('jobs.show', $job) }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

@endsection
