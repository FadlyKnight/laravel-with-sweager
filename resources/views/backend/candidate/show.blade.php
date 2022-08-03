@extends('backend.layouts.app')
@section('css')
@endsection
@section('content')

<x-card title="Candidate">

    @slot('breadcrumbs')
    <ol class="breadcrumb float-left mt-2">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('manage.candidate.index') }}">Candidate</a></li>
        <li class="breadcrumb-item active">Show</li>
    </ol>
    @endslot

        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Name</label> <br>
                <span>{{ $candidate->name }}</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email</label> <br>
                <span>{{ $candidate->email }}</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">Phone</label> <br>
                <span>{{ $candidate->phone }}</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="education">Education</label> <br>
                <span>{{ $candidate->education }}</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="birthday">Birthday</label> <br>
                <span>{{ $candidate->birthday }}</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="experience">Experience</label> <br>
                <span>{{ $candidate->experience }}</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="last_position">Last Position</label> <br>
                <span>{{ $candidate->last_position }}</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="applied">Applied Position</label> <br>
                <span>{{ $candidate->applied }}</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="top_skill">Top Skill</label> <br>
                <span>{{ $candidate->top_skill }}</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="resume">Resume</label>
                <br>
                @if ($candidate->resume != null)
                    <a href="{{ asset('storage/'.$candidate->resume) }}" target="_blank">See Resume</a>
                @endif
            </div>
        </div>


</x-card>

@endsection