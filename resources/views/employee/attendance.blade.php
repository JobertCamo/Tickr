<x-layouts.emp head="Attendance">

    <div class="p-4 lg:p-6 space-y-6">

         <!-- Header -->
        <div>
            <h1 class="text-2xl font-semibold text-gray-800">Attendance</h1>
            <p class="text-gray-500 text-sm">View your daily time records</p>
        </div>

        <!-- Filters -->
        <div class="bg-white shadow rounded-xl p-4 flex flex-col lg:flex-row gap-4 lg:items-end lg:justify-between">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 w-full lg:w-auto">
                <div>
                    <label class="text-sm text-gray-600">From</label>
                    <input type="date" class="mt-1 w-full rounded-lg border-gray-300 focus:ring-amber-400 focus:border-amber-400">
                </div>
                <div>
                    <label class="text-sm text-gray-600">To</label>
                    <input type="date" class="mt-1 w-full rounded-lg border-gray-300 focus:ring-amber-400 focus:border-amber-400">
                </div>
            </div>

            <button class="bg-amber-500 text-white px-6 py-2.5 rounded-lg font-medium hover:bg-amber-600 transition">
                Filter
            </button>
        </div>

        <!-- Summary Cards -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="bg-white p-5 rounded-xl shadow">
                <p class="text-gray-500 text-sm">Total Hours</p>
                <h1 class="text-2xl font-semibold mt-1">126 hrs</h1>
            </div>
            <div class="bg-white p-5 rounded-xl shadow">
                <p class="text-gray-500 text-sm">Late</p>
                <h1 class="text-xl font-semibold text-orange-500 mt-1">5</h1>
            </div>
            <div class="bg-white p-5 rounded-xl shadow">
                <p class="text-gray-500 text-sm">Absences</p>
                <h1 class="text-xl font-semibold text-red-500 mt-1">3</h1>
            </div>
            <div class="bg-white p-5 rounded-xl shadow">
                <p class="text-gray-500 text-sm">Overtime</p>
                <h1 class="text-xl font-semibold text-green-600 mt-1">12 hrs</h1>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-white shadow rounded-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                        <tr>
                            <th class="px-6 py-3 text-left">Date</th>
                            <th class="px-6 py-3 text-left">Time In</th>
                            <th class="px-6 py-3 text-left">Time Out</th>
                            <th class="px-6 py-3 text-left">Hours</th>
                            <th class="px-6 py-3 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">

                        <!-- Row -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">2025-11-15</td>
                            <td class="px-6 py-4">08:02 AM</td>
                            <td class="px-6 py-4">05:01 PM</td>
                            <td class="px-6 py-4">8 hrs</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-600 font-medium">
                                    Present
                                </span>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">2025-11-14</td>
                            <td class="px-6 py-4">08:21 AM</td>
                            <td class="px-6 py-4">05:00 PM</td>
                            <td class="px-6 py-4">7.8 hrs</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-xs rounded-full bg-orange-100 text-orange-600 font-medium">
                                    Late
                                </span>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">2025-11-13</td>
                            <td class="px-6 py-4">—</td>
                            <td class="px-6 py-4">—</td>
                            <td class="px-6 py-4">—</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-xs rounded-full bg-red-100 text-red-600 font-medium">
                                    Absent
                                </span>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

</x-layouts.emp>