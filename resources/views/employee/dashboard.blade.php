<x-layouts.emp head="Employee Dashboard">
    {{-- <x-slot:head>Employee Dashboard</x-slot:head> --}}
    <div class="p-4 lg:p-2 space-y-5" x-data="{open: false, modalAction: ''}">
        <div class="bg-white shadow grid lg:flex gap-5 lg:gap-10 p-5 rounded-xl">
            <div class="flex justify-center items-center">
                <img class="w-32 h-32 rounded-full" src="https://static.stocktitan.net/company-logo/img-lg.png" alt="">
            </div>
            <div class="space-y-4 px-1">
                <div>
                    <h1 class="text-xl font-semibold">John Doe</h1>
                    <span class="text-sm text-gray-500">Employee * IT Department</span>
                </div>
                <div class="grid lg:grid-cols-2 gap-x-52 gap-y-4">
                    <div>
                        <h1>Email:</h1>
                        <span class="text-sm text-gray-500">Employee * IT Department</span>
                    </div>
                    <div>
                        <h1>Position:</h1>
                        <span class="text-sm text-gray-500">Employee * IT Department</span>
                    </div>
                    <div>
                        <h1>Contact</h1>
                        <span class="text-sm text-gray-500">Employee * IT Department</span>
                    </div>
                    <div>
                        <h1>Status</h1>
                        <span class="text-sm text-gray-500">Employee * IT Department</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl p-5 shadow space-y-5">
            <h1 class="font-semibold">Today's Attendance</h1>
            <div class="flex flex-col gap-5 justify-center lg:flex-row lg:justify-between lg:items-center">
                <div class="space-x-2 mx-auto lg:mx-0">
                    <button @click="open = true; modalAction = 'Time In'" class="bg-green-500 px-5 py-3 rounded-xl text-white font-semibold">Time In</button>
                    <button @click="open = true; modalAction = 'Time Out'" class="bg-red-500 px-5 py-3 rounded-xl text-white font-semibold">Time Out</button>
                </div>
                <div class="mx-auto lg:mx-0">
                    <p class="text-gray-600 text-sm">Current Time</p>
                    <p class="text-xl font-bold text-gray-800" id="clock">--:--:--</p>
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 gap-5">
            <div class="bg-white rounded-xl p-5 shadow">
                <h1 class="text-gray-500">Total Hours This Month</h1>
                <span class="text-2xl font-semibold">126 hrs</span>
            </div>
            <div class="bg-white rounded-xl p-5 shadow">
                <h1 class="text-gray-500">Lates</h1>
                <span class="text-lg font-semibold text-orange-500">5</span>
            </div>
            <div class="bg-white rounded-xl p-5 shadow">
                <h1 class="text-gray-500">Absences</h1>
                <span class="text-lg font-semibold text-red-500">3</span>
            </div>
        </div>


        <x-modals.attendance-modal/>

        
    </div>
</x-layouts.emp>

<script>
    function updateClock() {
        const now = new Date();
        document.getElementById('clock').textContent =
            now.toLocaleTimeString('en-US', { hour12: false });
    }
    setInterval(updateClock, 1000);
    updateClock();
</script>