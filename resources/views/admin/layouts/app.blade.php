<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Monty Tutor</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 text-monty-black">

    <div class="flex min-h-screen">
        <aside class="hidden w-72 bg-monty-black p-6 text-white lg:block">
            <h1 class="text-2xl font-black">Monty Admin</h1>
            <p class="mt-2 text-sm text-slate-400">Tutor booking management</p>

            <nav class="mt-10 flex flex-col gap-3">
                <a href="{{ route('admin.dashboard') }}"
                    class="rounded-2xl bg-white/10 px-4 py-3 text-sm font-bold text-white">
                    Dashboard
                </a>
            </nav>
        </aside>

        <main class="flex-1">
            <div class="border-b border-slate-200 bg-white px-6 py-5">
                <h2 class="text-xl font-black">Admin Panel</h2>
            </div>

            <div class="p-6">
                @yield('content')
            </div>
        </main>
    </div>

</body>

</html>