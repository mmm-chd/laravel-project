<!DOCTYPE html>
<html lang="en">

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <x-admin.navbar></x-admin.navbar>
        <x-admin.sidebar></x-admin.sidebar>
        <main class="p-6 md:ml-64 min-h-screen pt-20 bg-gray-900 text-white overflow-y-auto">
              {{ $slot }}
        </main>
    </div>
</body>

</html>