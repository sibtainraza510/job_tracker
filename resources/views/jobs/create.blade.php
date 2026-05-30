@extends('layouts.simple')

@section('content')

<div class="breadcrumb">
    <a href="{{ route('jobs.index') }}">My Applications</a> &rsaquo; Add New Application
</div>

<div class="card">
    <div class="card-title">&#43; Add New Application</div>

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Job Title <span style="color: #e74c3c;">*</span></label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                required
                placeholder="e.g. Software Engineer"
            >
            @error('title')
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="company_name">Company Name <span style="color: #e74c3c;">*</span></label>
            <input
                type="text"
                id="company_name"
                name="company_name"
                value="{{ old('company_name') }}"
                required
                placeholder="e.g. Google"
            >
            @error('company_name')
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input
                type="text"
                id="location"
                name="location"
                value="{{ old('location') }}"
                placeholder="e.g. New York, NY or Remote"
            >
            @error('location')
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="salary">Salary (USD)</label>
            <input
                type="number"
                id="salary"
                name="salary"
                value="{{ old('salary') }}"
                step="0.01"
                min="0"
                placeholder="e.g. 75000"
            >
            @error('salary')
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="status">Status <span style="color: #e74c3c;">*</span></label>
            <select id="status" name="status" required>
                <option value="">-- Select Status --</option>
                <option value="pending"   {{ old('status') === 'pending'   ? 'selected' : '' }}>Pending</option>
                <option value="applied"   {{ old('status') === 'applied'   ? 'selected' : '' }}>Applied</option>
                <option value="interview" {{ old('status') === 'interview' ? 'selected' : '' }}>Interview</option>
                <option value="offer"     {{ old('status') === 'offer'     ? 'selected' : '' }}>Offer</option>
                <option value="rejected"  {{ old('status') === 'rejected'  ? 'selected' : '' }}>Rejected</option>
                <option value="ghosted"   {{ old('status') === 'ghosted'   ? 'selected' : '' }}>Ghosted</option>
            </select>
            @error('status')
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="application_url">Application URL</label>
            <input
                type="url"
                id="application_url"
                name="application_url"
                value="{{ old('application_url') }}"
                placeholder="https://..."
            >
            @error('application_url')
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="applied_at">Date Applied</label>
            <input
                type="date"
                id="applied_at"
                name="applied_at"
                value="{{ old('applied_at') }}"
            >
            @error('applied_at')
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea id="notes" name="notes" placeholder="Any notes about this application...">{{ old('notes') }}</textarea>
            @error('notes')
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-top: 10px;">
            <button type="submit" class="btn">&#10003; Add Application</button>
            <a href="{{ route('jobs.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

@endsection