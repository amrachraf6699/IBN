
<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>IBN</title>
  <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/rt-plugins.css">
  <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
  <link rel="stylesheet" href="assets/css/app.css">
  <!-- END : Theme Config js-->
</head>

<body class=" font-inter skin-default">
  <div class="loginwrapper">
    <div class="lg-inner-column">
      <div class="left-column relative z-[1]">
        <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
          <a href="#">
            <img src="{{ asset('imgs/logo.jpg') }}" alt="" class="mb-10 dark_logo">
            <img src="{{ asset('imgs/logo.jpg') }}" alt="" class="mb-10 white_logo">
          </a>
        </div>
      </div>
      <div class="right-column  relative">
        <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
          <div class="auth-box h-full flex flex-col justify-center">
            <div class="mobile-logo text-center mb-6 lg:hidden block">
              <a href="#">
                <img src="{{ asset('imgs/logo.jpg') }}" alt="" class="mb-10 dark_logo">
                <img src="{{ asset('imgs/logo.jpg') }}" alt="" class="mb-10 white_logo">
              </a>
            </div>
            <div class="text-center 2xl:mb-10 mb-4">
              <h4 class="font-medium">Sign in</h4>
            </div>
            <!-- BEGIN: Login Form -->
            <form class="space-y-4" method="POST" action="{{ route('login') }}">
                @csrf
              <div class="fromGroup">
                <label class="block capitalize form-label">email</label>
                <div class="relative ">
                  <input type="email" name="email" class="  form-control py-2 @error('email') is-invalid @enderror"  value="{{ old('email') }}">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="fromGroup       ">
                <label class="block capitalize form-label  ">passwrod</label>
                <div class="relative "><input type="password" name="password" class="  form-control py-2">
                </div>
              </div>
              <div class="flex justify-between">
                <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium" href="#">Forgot
                  Password
                </a>
                <label class="flex items-center cursor-pointer">
                  <input type="checkbox" class="hiddens">
                  <span class="text-slate-500 dark:text-slate-400 text-sm leading-6 capitalize">Keep me signed in</span>
                </label>
              </div>
              <button class="btn btn-dark block w-full text-center">Sign in</button>
            </form>
          </div>
          <div class="auth-footer text-center">
            Copyright 2025, IBN All Rights Reserved.
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/rt-plugins.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>