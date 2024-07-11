<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('APP_NAME') }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-black text-white">

    <div class="px-10">
        <nav class="flex justify-between items-center  py-4 border-b border-white/10" >
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
                <a href="">Post a job</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px]">
            {{ $slot }}
        </main>


    </div>

</body>

</html>
