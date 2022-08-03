@extends('backend.layouts.app')
@section('css')
@endsection
@section('content')

<x-card title="Candidate">

    @slot('breadcrumbs')
    <ol class="breadcrumb float-left mt-2">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('manage.candidate.index') }}">Candidate</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    @endslot

    
    <form action="{{ route('manage.candidate.update', $candidate) }}" method="post" class="row" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $candidate->name }}" placeholder="" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') ?? $candidate->email }}" placeholder="" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') ?? $candidate->phone }}" placeholder="" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="education">Education</label>
                <input type="text" name="education" id="education" class="form-control" value="{{ old('education') ?? $candidate->education }}" placeholder="ex : UGM Yogyakarta" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="date" name="birthday" id="birthday" class="form-control" value="{{ old('birthday') ?? $candidate->birthday }}" placeholder="" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="experience">Experience</label>
                <input type="text" name="experience" id="experience" class="form-control" value="{{ old('experience') ?? $candidate->experience }}" placeholder="ex: 5 Years" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="last_position">Last Position</label>
                <input type="text" name="last_position" id="last_position" class="form-control" value="{{ old('last_position') ?? $candidate->last_position }}" placeholder="ex: CEO" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="applied">Applied Position</label>
                <input type="text" name="applied" id="applied" class="form-control" value="{{ old('applied') ?? $candidate->applied }}" placeholder="ex: Senior PHP Developer" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="top_skill">Top Skill</label>
                <input type="text" name="top_skill" id="top_skill" class="form-control tagify" value="{{ old('top_skill') ?? $candidate->top_skill }}" placeholder="ex : Laravel, Mysql, PostgreSQL, Codeigniter, Java" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="resume">Resume</label>
                @if ($candidate->resume != null)
                    <a href="{{ asset('storage/'.$candidate->resume) }}" target="_blank">See Resume</a>
                @endif
                <input type="file" class="form-control" name="resume" id="resume" aria-describedby="helpId" accept=".pdf" placeholder="resume" required>
            </div>
        </div>


        <div class="col-12 text-right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>

</x-card>

@endsection

@section('css-top')
<link href="{{ asset('dashboard/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard/assets/libs/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" />
        
@endsection

@section('js')
<script src="{{ asset('dashboard/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

<script>
    $(".tagify").tagsinput('items');
    var form = $('form');

    form.on('submit', function(e){
        e.preventDefault();
        e.currentTarget.submit()
    });

</script>
@endsection
