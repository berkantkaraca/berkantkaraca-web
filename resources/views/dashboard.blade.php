<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">{{ __("Welcome to Admin Dashboard!") }}</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- About Yönetimi -->
                        <div class="bg-blue-100 dark:bg-blue-900 rounded-lg p-6">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-blue-600 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">About Yönetimi</h4>
                                    <p class="text-gray-600 dark:text-gray-300">Hakkımda bölümünü yönetin</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('about.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                                    About'u Yönet
                                </a>
                            </div>
                        </div>

                        <!-- Portfolio Yönetimi (Gelecek) -->
                        <div class="bg-green-100 dark:bg-green-900 rounded-lg p-6 opacity-50">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-green-600 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Portfolio Yönetimi</h4>
                                    <p class="text-gray-600 dark:text-gray-300">Projelerinizi yönetin (Yakında)</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button disabled class="bg-gray-400 text-white font-bold py-2 px-4 rounded cursor-not-allowed">
                                    Yakında
                                </button>
                            </div>
                        </div>

                        <!-- Sertifika Yönetimi (Gelecek) -->
                        <div class="bg-yellow-100 dark:bg-yellow-900 rounded-lg p-6 opacity-50">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-yellow-600 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Sertifika Yönetimi</h4>
                                    <p class="text-gray-600 dark:text-gray-300">Sertifikalarınızı yönetin (Yakında)</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button disabled class="bg-gray-400 text-white font-bold py-2 px-4 rounded cursor-not-allowed">
                                    Yakında
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
