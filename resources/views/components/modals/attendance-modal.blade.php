<div x-show="open" x-cloak  class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 px-3">
    <div @click.away="open = false" class="bg-white w-full max-w-md rounded-2xl shadow-lg p-6 space-y-5">
        <h2 class="text-xl font-bold text-gray-800 text-center" x-text="modalAction"></h2>

        <p class="text-gray-600 text-center">
            Are you sure you want to <span class="font-semibold" x-text="modalAction"></span> now?
        </p>

        <div class="bg-gray-100 text-center p-3 rounded-xl">
            <p class="text-gray-500 text-sm">Current Time</p>
            <p class="text-2xl font-bold text-gray-800" id="modalClock">--:--:--</p>
        </div>

        <div class="flex gap-3">
            <button @click="open = false" class="flex-1 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold rounded-xl transition">
                Cancel
            </button>
            <button :class="modalAction === 'Time In' ? 'bg-green-500' : 'bg-red-500' " class="flex-1 py-3 text-white font-semibold rounded-xl transition" x-text="modalAction"></button>
        </div>
    </div>
</div>

<script>
    function updateClock() {
        const now = new Date();
        document.getElementById('modalClock').textContent =
            now.toLocaleTimeString('en-US', { hour12: false });
    }
    setInterval(updateClock, 1000);
    updateClock();
</script>
