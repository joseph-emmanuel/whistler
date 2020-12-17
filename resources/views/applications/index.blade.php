@extends('applications.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Whistler</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('profile.show') }}"> <i class="fa fa-user-circle-o fa-fw"></i></a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif











    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Whistler</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="dist/css/app.css" rel="stylesheet">
</head>
<body class="d-flex flex-column align-content-stretch app-main">
  <header>
    <a href="#" class="header-logo">
      <img src="./dist/img/logo.jpg" alt="Whistler" class="img-fluid">
    </a>
  </header>
  <nav class="menu-bar">
    <div class="d-flex justify-content-between">

      <div class="d-flex align-content-center">

      </div>

      <div class="d-flex align-content-center">
        <a href="{{ route('dashboard') }}" class="menu-item">
          <i class="fa fa-home fa-fw mr-1"></i>
          <span>Dash Board</span>
        </a>
        <a href="{{ route('contacts.index') }}" class="menu-item">
          <i class="fa fa-phone fa-fw mr-1"></i>
          <span>Contacts</span>
        </a>
        <a href="{{ route('jobs.index') }}" class="menu-item">
          <i class="fa fa-suitcase fa-fw mr-1"></i>
          <span>Jobs</span>
        </a>
        <a href="#" class="menu-item">
          <i class="fa fa-backward fa-fw mr-1"></i>
          <span>Back</span>
        </a>

      </div>

      <div class="d-flex align-content-center">
        <a href="#" class="menu-item">
          <i class="fa fa-star fa-fw mr-1 color-gold"></i>
          <span>Upgrade</span>
        </a>
      </div>

    </div>
  </nav>
  <div class="board d-flex align-content-stretch flex-wrap">


    <div class="stages col">
    <div class="stage purple-cards">
        <div class="stage-header">
          <div class="title">
            <h3><i class="fa fa-archive fa-fw mr-1"></i> Wishlist</h3>
            <span class="sort"><i class="fa fa-tasks fa-fw"></i></span>
          </div>
          <a href="{{ route('applications.create') }}" class="plus">
          <i class="fa fa-plus fa-fw mr-1"></i>
        </a>
        </div>
        @foreach ($applications as $application)
        @if($application->status=="1")

        <div class="stage-card">
          <h3>{{ $application->job_title }}</h3>
          <p>{{ $application->company_name }}</p>
          <form action="{{ route('applications.destroy',$application->id) }}" method="POST">

<a class="btn btn-info" href="{{ route('applications.show',$application->id) }}">Show</a>

<a class="btn btn-primary" href="{{ route('applications.edit',$application->id) }}">Edit</a>

@csrf
@method('DELETE')

<button type="submit" class="btn btn-danger">Delete</button>
</form>
        </div>

        @endif
        @endforeach





      </div>

      <div class="stage green-cards">
        <div class="stage-header">
          <div class="title">
            <h3><i class="fa fa-folder fa-fw mr-1"></i> Applied</h3>
            <span class="sort"><i class="fa fa-tasks fa-fw"></i></span>
          </div>
          <a href="{{ route('applications.create') }}" class="plus">
          <i class="fa fa-plus fa-fw mr-1"></i>
        </a>
        </div>


        @foreach ($applications as $application)
        @if($application->status=="2")

        <div class="stage-card">
          <h3>{{ $application->job_title }}</h3>
          <p>{{ $application->company_name }}</p>
          <form action="{{ route('applications.destroy',$application->id) }}" method="POST">

<a class="btn btn-info" href="{{ route('applications.show',$application->id) }}">Show</a>

<a class="btn btn-primary" href="{{ route('applications.edit',$application->id) }}">Edit</a>

@csrf
@method('DELETE')

<button type="submit" class="btn btn-danger">Delete</button>
</form>
        </div>

        @endif
        @endforeach



      </div>

      <div class="stage orange-cards">
        <div class="stage-header">
          <div class="title">
            <h3><i class="fa fa-lock fa-fw mr-1"></i> Interview</h3>
            <span class="sort"><i class="fa fa-tasks fa-fw"></i></span>
          </div>
          <a href="{{ route('applications.create') }}" class="plus">
          <i class="fa fa-plus fa-fw mr-1"></i>
        </a>
        </div>

        @foreach ($applications as $application)
        @if($application->status=="3")

        <div class="stage-card">
          <h3>{{ $application->job_title }}</h3>
          <p>{{ $application->company_name }}</p>
          <form action="{{ route('applications.destroy',$application->id) }}" method="POST">

<a class="btn btn-info" href="{{ route('applications.show',$application->id) }}">Show</a>

<a class="btn btn-primary" href="{{ route('applications.edit',$application->id) }}">Edit</a>

@csrf
@method('DELETE')

<button type="submit" class="btn btn-danger">Delete</button>
</form>
        </div>

        @endif
        @endforeach



      </div>

    </div>

  </div>
</body>
</html>

















    {!! $applications->links() !!}

@endsection
