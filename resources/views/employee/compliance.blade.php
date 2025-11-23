<x-layouts.emp>
    <div class="p-4 lg:p-6 space-y-6">

        <!-- Header -->
        <div>
            <h1 class="text-2xl font-semibold text-gray-800">Compliance</h1>
            <p class="text-gray-500 text-sm">Monitor your mandatory trainings and requirements</p>
        </div>

        <!-- Summary Cards -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="bg-white p-5 shadow rounded-xl">
                <p class="text-gray-500 text-sm">Completed</p>
                <h1 class="text-2xl font-bold text-green-600 mt-1">12</h1>
            </div>

            <div class="bg-white p-5 shadow rounded-xl">
                <p class="text-gray-500 text-sm">Pending</p>
                <h1 class="text-2xl font-bold text-orange-500 mt-1">4</h1>
            </div>

            <div class="bg-white p-5 shadow rounded-xl">
                <p class="text-gray-500 text-sm">Overdue</p>
                <h1 class="text-2xl font-bold text-red-500 mt-1">1</h1>
            </div>

            <div class="bg-white p-5 shadow rounded-xl">
                <p class="text-gray-500 text-sm">Upcoming</p>
                <h1 class="text-2xl font-bold text-amber-500 mt-1">3</h1>
            </div>
        </div>

        <!-- Table Container -->
        <div class="bg-white rounded-xl shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                        <tr>
                            <th class="px-6 py-3 text-left">Compliance Item</th>
                            <th class="px-6 py-3 text-left">Category</th>
                            <th class="px-6 py-3 text-left">Due Date</th>
                            <th class="px-6 py-3 text-left">Status</th>
                            <th class="px-6 py-3 text-left">Progress</th>
                            <th class="px-6 py-3 text-left">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y">


                        <!-- Example Row - Completed -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 whitespace-nowrap">Cybersecurity Training</td>
                            <td class="px-6 py-4 whitespace-nowrap">Training</td>
                            <td class="px-6 py-4 whitespace-nowrap">2025-10-10</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-xs bg-green-100 text-green-600 rounded-full font-medium">
                                    Completed
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-40 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-blue-600 font-semibold hover:underline">View</button>
                            </td>
                        </tr>


                        <!-- Example Row - Pending -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 whitespace-nowrap">Fire Safety Orientation</td>
                            <td class="px-6 py-4 whitespace-nowrap">Orientation</td>
                            <td class="px-6 py-4 whitespace-nowrap">2025-11-25</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-xs bg-orange-100 text-orange-600 rounded-full font-medium">
                                    Pending
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-40 bg-gray-200 rounded-full h-2">
                                    <div class="bg-orange-400 h-2 rounded-full" style="width: 40%"></div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-blue-600 font-semibold hover:underline">Start</button>
                            </td>
                        </tr>

                        <!-- Example Row - Overdue -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 whitespace-nowrap">Data Privacy Awareness</td>
                            <td class="px-6 py-4 whitespace-nowrap">Training</td>
                            <td class="px-6 py-4 whitespace-nowrap text-red-500">2025-11-05</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-xs bg-red-100 text-red-600 rounded-full font-medium">
                                    Overdue
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-40 bg-gray-200 rounded-full h-2">
                                    <div class="bg-red-500 h-2 rounded-full" style="width: 20%"></div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-blue-600 font-semibold hover:underline">Complete Now</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

</x-layouts.emp>