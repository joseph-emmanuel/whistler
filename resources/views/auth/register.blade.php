

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Whistler</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="css/login.css" rel="stylesheet">
</head>
<body class="d-flex flex-column align-content-stretch">
  <div class="signup-page d-flex flex-wrap align-content-stretch">
    <div class="col-lg-6 logo-col d-flex flex-column justify-content-center align-items-center">
      <div class="d-flex flex-column justify-content-center align-items-center p-5">
        <a href="#" class="mb-5 logo">
          <img src="img/logo.jpg" alt="Whistler" class="img-fluid">
        </a>
        <h1 class="orange mb-4">Ground Control for your job hunt</h1>
        <p class="orange-medium mb-5 font-ink lead mb-4">Organize your job search and discover view opportunities, all in one place</p>
      </div>
    </div>


    @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-lg-6 form-col align-content-stretch p-5">
        <div class="d-flex flex-column h-100 justify-content-center align-items-center p-4">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div  class="input-group form-group mb-4">
            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')"/>
            </div>

            <div class="input-group form-group mb-4">
            <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></i></span>
                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="input-group form-group mb-4">
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="input-group form-group mb-4">
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
        </div>
</div>
  </div>
</body>
</html>
