@extends('applications.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit application</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('applications.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('applications.update',$application->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>status:</strong>
                <input type="text" name="status"  value="{{ $application->status }}" class="form-control" placeholder="status">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>application date:</strong>
                <input type="date" name="application_date" value="{{ $application->application_date }}" class="form-control" placeholder="application date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>company name:</strong>
                <input type="text" name="company_name" value="{{ $application->company_name }}" class="form-control" placeholder="Company Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>contact name:</strong>
                <input type="text" name="contact_name"  value="{{ $application->contact_name }}"class="form-control" placeholder="Contact Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone:</strong>
                <input type="text" name="phone" value="{{ $application->phone }}"class="form-control" placeholder="phone number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email:</strong>
                <input type="text" name="email" value="{{ $application->email }}"class="form-control" placeholder="phone number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LinkedIn name:</strong>
                <input type="text" name="linkedin_name" value="{{ $application->linkedin_name }}"	class="form-control" placeholder="LinkedIn name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="Address"value="{{ $application->Address }}" class="form-control" placeholder="Address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>job title:</strong>
                <input type="text" name="job_title" value="{{ $application->job_title }}"class="form-control" placeholder="job title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>job description:</strong>
                <input type="text" name="job_description" value="{{ $application->job_description }}"class="form-control" placeholder="job description">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>technologies:</strong>
                <input type="text" name="technologies" value="{{ $application->technologies }}" class="form-control" placeholder="technologies">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>reference_number:</strong>
                <input type="text" name="reference_number" value="{{ $application->reference_number }}"class="form-control" placeholder="reference number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>salary:</strong>
                <input type="text" name="salary" value="{{ $application->salary }}" class="form-control" placeholder="salary">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ending_date:</strong>
                <input type="date" name="ending_date"value="{{ $application->ending_date }}"	  class="form-control" placeholder="ending date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>source:</strong>
                <input type="text" name="source" value="{{ $application->source }}"	class="form-control" placeholder="source">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>fit value (between 1 and 5):</strong>
                <input type="number" name="fit_value" value="{{ $application->fit_value }}" min="1" max="5" class="form-control" placeholder="fit_value">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>resume (between 0 and 1):</strong>
                <input type="number" name="resume"value="{{ $application->resume }}" min="0" max="1" class="form-control" placeholder="resume">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>cover_letter (between 0 and 1):</strong>
                <input type="number" name="cover_letter" value="{{ $application->cover_letter }}"  min="0" max="1" class="form-control" placeholder="cover letter">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>transcript (between 0 and 1):</strong>
                <input type="number" name="transcript" value="{{ $application->transcript }}"  min="0" max="1" class="form-control" placeholder="transcript">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>reference_document (between 0 and 1):</strong>
                <input type="number" name="reference_document"value="{{ $application->reference_document }}"	  min="0" max="1" class="form-control" placeholder="reference_document">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>notes:</strong>
                <textarea class="form-control"value="{{ $application->notes }}"	 style="height:150px" name="notes" placeholder="notes">{{ $application->notes }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection