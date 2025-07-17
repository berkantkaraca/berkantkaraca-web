<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-6">{{ __("Admin Dashboard") }}</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- About Management -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-user-circle text-blue-500 text-2xl mr-3"></i>
                                    <h4 class="text-lg font-semibold text-gray-900">About Yönetimi</h4>
                                </div>
                                <p class="text-gray-600 mb-4">Hakkımda sayfası içeriklerini yönetin</p>
                                <a href="{{ route('admin.about.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md transition-colors">
                                    Yönet
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Portfolio Management -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-briefcase text-green-500 text-2xl mr-3"></i>
                                    <h4 class="text-lg font-semibold text-gray-900">Portfolio Yönetimi</h4>
                                </div>
                                <p class="text-gray-600 mb-4">Projelerinizi ve çalışmalarınızı yönetin</p>
                                <div class="inline-flex items-center px-4 py-2 bg-gray-400 text-white text-sm font-medium rounded-md cursor-not-allowed">
                                    Yakında
                                    <i class="fas fa-clock ml-2"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Certificate Management -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-certificate text-yellow-500 text-2xl mr-3"></i>
                                    <h4 class="text-lg font-semibold text-gray-900">Sertifika Yönetimi</h4>
                                </div>
                                <p class="text-gray-600 mb-4">Sertifikalarınızı ve başarılarınızı yönetin</p>
                                <div class="inline-flex items-center px-4 py-2 bg-gray-400 text-white text-sm font-medium rounded-md cursor-not-allowed">
                                    Yakında
                                    <i class="fas fa-clock ml-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
