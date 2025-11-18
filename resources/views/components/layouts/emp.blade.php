<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div class="flex min-h-screen" x-data="{ sidebarOpen: false }">
        <nav class="hidden lg:block w-[250px] bg-white shadow-lg">
            <div class="p-4 text-center text-amber-600 text-2xl font-bold border-b border-black/10">TickR</div>            
            <div class="px-3 py-4">
                <ul class="flex flex-col gap-4">
                    <li><a class="flex items-center rounded-md hover:bg-yellow-200 px-2 py-2" href="">Dashboard</a></li>
                    <li><a class="flex items-center rounded-md hover:bg-yellow-200 px-2 py-2" href="">Attendance History</a></li>
                    <li><a class="flex items-center rounded-md hover:bg-yellow-200 px-2 py-2" href="">Compliance Task</a></li>
                    <li><a class="flex items-center rounded-md hover:bg-yellow-200 px-2 py-2" href="">Profile</a></li>
                    
                </ul>
            </div>
        </nav>
        {{-- Mobile Sidebar --}}
        <nav x-show="sidebarOpen" x-cloak transition>
            <div @click.away="sidebarOpen = false" class="bg-white fixed h-full w-[270px] shadow-lg">
                <div class="p-4 text-center text-amber-600 text-2xl font-bold border-b border-black/10">TickR</div>            
                <div class="px-3 py-4">
                    <ul class="flex flex-col gap-4">
                        <li><a class="flex items-center rounded-md hover:bg-yellow-200 px-2 py-2" href="">Dashboard</a></li>
                        <li><a class="flex items-center rounded-md hover:bg-yellow-200 px-2 py-2" href="">Attendance History</a></li>
                        <li><a class="flex items-center rounded-md hover:bg-yellow-200 px-2 py-2" href="">Compliance Task</a></li>
                        <li><a class="flex items-center rounded-md hover:bg-yellow-200 px-2 py-2" href="">Profile</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="flex-1 bg-slate-200">
            <div class="bg-white flex justify-between items-center px-10 py-5 shadow">
                <div class="text-xl ">{{ $head ?? 't' }}</div>
                <div class="flex items-center gap-4">
                    <h2>icon</h2>
                    <div class="hidden lg:block">Profile</div>
                    <button class="block lg:hidden" @click="sidebarOpen = !sidebarOpen">sb</button>
                </div>
            </div>
            {{ $slot }}
        </main>
    </div>
    @livewireScripts
</body>
</html>