@extends('contacts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Whistler</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contacts.create') }}"> Create New Contact</a>
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
            <th>Name</th>
            <th>Designation</th>
            <th>Company_name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $contact->contact_name }}</td>
            <td>{{ $contact->contact_designation }}</td>
            <td>{{ $contact->contact_company_name }}</td>
            <td>{{ $contact->contact_email }}</td>
            <td>{{ $contact->contact_phone_number }}</td>
            <td>{{ $contact->contact_address }}</td>
            <td>
                <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('contacts.show',$contact->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $contacts->links() !!}

@endsection
