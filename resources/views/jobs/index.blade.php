@extends('jobs.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Whistler</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jobs.create') }}"> Create New Job</a>
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
            <th>Title</th>
            <th>Reference No</th>
            <th>Posted</th>
            <th>Till</th>
            <th>Technologies</th>
            <th>Salary</th>
            <th>Platform</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($jobs as $job)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $job->job_title }}</td>
            <td>{{ $job->job_reference_no }}</td>
            <td>{{ $job->job_created_at }}</td>
            <td>{{ $job->job_end_at }}</td>
            <td>{{ $job->job_technologies }}</td>
            <td>{{ $job->job_salary }}</td>
            <td>{{ $job->job_listed_platform }}</td>
            <td>{{ $job->job_description }}</td>
            <td>
                <form action="{{ route('jobs.destroy',$job->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('jobs.show',$job->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('jobs.edit',$job->id) }}">Edit</a>

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
