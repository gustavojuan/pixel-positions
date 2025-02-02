<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('APP_NAME') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@300,400,500&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">

    <div class="px-10">
        <nav class="flex justify-between items-center  py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" width="120">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="">jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>

            <div>
                @auth
                    <div class="space-x-6 font-bold flex">
                        <a href="/jobs/create">Post a job</a>

                        <form method="POST" action="/logout" class="inline">
                            @csrf
                            @method('DELETE')

                            <button>Log Out</button>
                        </form>

                    </div>


                @endauth

                @guest
                    <div class="space-x-6 font-bold">
                        <a href="/login"> Login</a>
                        <a href="/register"> Register</a>
                    </div>
                @endguest
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>

    </div>

</body>

</html>
