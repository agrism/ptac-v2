<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Portal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="min-h-screen bg-white ">
    <div class="flex flex-col min-h-screen">
        @include('layouts.nav')
        <!-- Main Content -->
        <main class="flex-grow container mx-auto py-10 px-4 max-w-[1110px]">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>
