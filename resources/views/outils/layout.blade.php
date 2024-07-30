<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Smartylex | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style-saas.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
    <script>
        function onSubmit(token) {
            document.getElementById("   ").submit();
        }
    </script>
</head>

<body class="nk-body" data-navbar-collapse="xl">
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <div class="nk-app-root home-saas">
       @include('outils.header')
            @yield('content')
       @include('outils.footer')
        <a href="#" class="scroll-top shadow animate animate-infinite animate-pulse animate-duration-2">
            <em class="icon ni ni-chevrons-up"></em>
        </a>
        
    </div>
    <script src="{{ asset('assets/js/bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>