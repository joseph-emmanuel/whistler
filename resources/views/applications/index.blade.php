@extends('applications.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Whistler</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('applications.create') }}"> Create New Application</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>status</th>
            <th>application_date</th>
            <th>company_name</th>
            <th>contact_name</th>
            <th>phone</th>
            <th>email</th>
            <th>linkedin_name</th>
            <th>Address</th>
            <th>job_title</th>
            <th>job_description</th>
            <th>technologies</th>
            <th>reference_number</th>
            <th>salary</th>
            <th>ending_date</th>
            <th>source</th>
            <th>fit_value</th>
            <th>resume</th>
            <th>cover_letter</th>
            <th>transcript</th>
            <th>reference_document</th>
            <th>notes</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($applications as $application)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $application->status }}</td>
            <td>{{ $application->application_date }}</td>
            <td>{{ $application->company_name }}</td>
            <td>{{ $application->contact_name }}</td>
            <td>{{ $application->phone }}</td>
            <td>{{ $application->email }}</td>
            <td>{{ $application->linkedin_name }}</td>
            <td>{{ $application->Address }}</td>
            <td>{{ $application->job_title }}</td>
            <td>{{ $application->job_description }}</td>
            <td>{{ $application->technologies }}</td>
            <td>{{ $application->reference_number }}</td>
            <td>{{ $application->salary }}</td>
            <td>{{ $application->ending_date }}</td>
            <td>{{ $application->source }}</td>
            <td>{{ $application->fit_value }}</td>
            <td>{{ $application->resume }}</td>
            <td>{{ $application->cover_letter }}</td>
            <td>{{ $application->transcript }}</td>
            <td>{{ $application->reference_document }}</td>
            <td>{{ $application->notes }}</td>
        <td>
                <form action="{{ route('applications.destroy',$application->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('applications.show',$application->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('applications.edit',$application->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $jobs->links() !!}

@endsection
