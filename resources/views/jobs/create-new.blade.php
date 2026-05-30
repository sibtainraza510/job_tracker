@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-title">➕ Create New Job</div>

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Job Title *</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
            @error('title')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Company Name *</label>
            <input type="text" name="company_name" value="{{ old('company_name') }}" required>
            @error('company_name')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" value="{{ old('location') }}" placeholder="e.g., New York, NY">
            @error('location')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Salary (USD)</label>
            <input type="number" name="salary" value="{{ old('salary') }}" step="0.01" min="0">
            @error('salary')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Status *</label>
            <select name="status" required>
                <option value="">-- Select Status --</option>
                <option value="pending" {{ old('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="applied" {{ old('status') === 'applied' ? 'selected' : '' }}>Applied</option>
                <option value="interview" {{ old('status') === 'interview' ? 'selected' : '' }}>Interview</option>
                <option value="rejected" {{ old('status') === 'rejected' ? 'selected' : '' }}>Rejected</option>
                <option value="offer" {{ old('status') === 'offer' ? 'selected' : '' }}>Offer</option>
            </select>
            @error('status')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div style="margin-top: 30px;">
            <button type="submit" class="btn">✓ Create Job</button>
            <a href="{{ route('jobs.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

@endsection
