@extends('applications.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Application</h2>
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

<form action="{{ route('applications.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>status:</strong>
                <select name="status" class="form-control" placeholder="status">
                 <option value="1">WISHLIST</option>
                 <option value="2">APPLIED</option>
                 <option value="3">INTERVIEW</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>application date:</strong>
                <input type="date" name="application_date" class="form-control" placeholder="application date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>company name:</strong>
                <input type="text" name="company_name" class="form-control" placeholder="Company Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>contact name:</strong>
                <input type="text" name="contact_name" class="form-control" placeholder="Contact Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone:</strong>
                <input type="text" name="phone" class="form-control" placeholder="phone number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email:</strong>
                <input type="text" name="email" class="form-control" placeholder="phone number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LinkedIn name:</strong>
                <input type="text" name="linkedin_name" class="form-control" placeholder="LinkedIn name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="Address" class="form-control" placeholder="Address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>job title:</strong>
                <input type="text" name="job_title" class="form-control" placeholder="job title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>job description:</strong>
                <input type="text" name="job_description" class="form-control" placeholder="job description">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>technologies:</strong>
                <input type="text" name="technologies" class="form-control" placeholder="technologies">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>reference_number:</strong>
                <input type="text" name="reference_number" class="form-control" placeholder="reference number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>salary:</strong>
                <input type="text" name="salary" class="form-control" placeholder="salary">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ending_date:</strong>
                <input type="date" name="ending_date" class="form-control" placeholder="ending date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>source:</strong>
                <input type="text" name="source" class="form-control" placeholder="source">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>fit value (between 1 and 5):</strong>
                <select name="fit_value" class="form-control" placeholder="between 1 and 5">
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>resume submitted:</strong>
                <select name="resume" class="form-control" placeholder="between 1 and 5">
                 <option value="1">Yes</option>
                 <option value="0">No</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>cover letter submitted:</strong>
                <select name="cover_letter" class="form-control" placeholder="between 1 and 5">
                 <option value="1">Yes</option>
                 <option value="0">No</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>transcript submitted:</strong>
                <select name="transcript" class="form-control" placeholder="between 1 and 5">
                 <option value="1">Yes</option>
                 <option value="0">No</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>reference document submitted:</strong>
                <select name="reference_document" class="form-control" placeholder="between 1 and 5">
                 <option value="1">Yes</option>
                 <option value="0">No</option>
                </select>
            </div>
        </div>




        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>notes:</strong>
                <textarea class="form-control" style="height:150px" name="notes" placeholder="notes"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
