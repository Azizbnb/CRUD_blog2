<div class="bg-blue-100 min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 cursor-default border-blue-800 border-8">
    <div>
            {{ $logo }}
    </div>
    <div>
        {{ $bienvenue }}
    </div>
    <div>
        {{ $guestMode }}
    </div>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-mg shadow-gray-500 overflow-hidden sm:rounded-lg  border-4 border-r-blue-900 border-b-blue-900 border-t-red-900 border-l-red-900">
        {{ $slot }}
    </div>
</div>
