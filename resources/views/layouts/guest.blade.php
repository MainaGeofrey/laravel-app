<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Scripts -->



    </head>

    <!--login script-->
    <script>
        function showPassword() {
            var passwordType = document.getElementById("password");
            var show = document.getElementById("show");
            var hide = document.getElementById("hide");
            if (passwordType.type === "password") {
                passwordType.type = "text";
                hide.classList.remove("hidden");
                show.classList.add("hidden");
            } else {
                passwordType.type = "password";
                hide.classList.add("hidden");
                show.classList.remove("hidden");
            }
        }
    </script>

    <body>
        <div class="font-sans text-gray-900 antialiased">
            @yield('content')
        </div>
    </body>
</html>
