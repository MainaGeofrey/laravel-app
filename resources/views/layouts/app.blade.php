<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Voyages') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Scripts -->

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->

            <!-- Page Content -->
            <main>
                @yield('content')

            </main>
            @include('layouts.footer')
        </div>
              <!--  navigation layout script-->
              <script>
                let popup = document.getElementById("popup");
                const showDiv = (flag) => {
                    if (flag === false) {
                        popup.classList.add("hidden");
                    }
                    if (flag.value.length >= 1) {
                        popup.classList.remove("hidden");
                    } else if (flag.value.length >= 0) {
                        popup.classList.add("hidden");
                    }
                };

                let popup2 = document.getElementById("popup2");
                const showDiv2 = (flag) => {
                    if (flag.value.length >= 1) {
                        popup2.classList.remove("hidden");
                    } else if (flag.value.length >= 0) {
                        popup2.classList.add("hidden");
                    }
                };

                function showDropdown() {
                    var dropdown = document.getElementById("dropdown");
                    dropdown.classList.toggle("hidden");
                }

                const show = (id) => {
                    document.getElementById(id).classList.toggle("-translate-x-full");
                    document.getElementById(id + "Open").classList.toggle("hidden");
                    document.getElementById(id + "Close").classList.toggle("hidden");
                    document.getElementById(id + "SearchandAvatar").classList.toggle("hidden");
                };

                const show2 = (id) => {
                    document.getElementById(id).classList.toggle("hidden");
                    document.getElementById(id + "Second").classList.toggle("hidden");
                };
            </script>
    </body>
</html>
