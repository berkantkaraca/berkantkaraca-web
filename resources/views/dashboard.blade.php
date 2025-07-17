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
                                    <i class="fas fa-user-circle text-gray-600 text-2xl mr-3"></i>
                                    <h4 class="text-lg font-semibold text-gray-900">About Yönetimi</h4>
                                </div>
                                <p class="text-gray-600 mb-4">Hakkımda sayfası içeriklerini yönetin</p>
                                <a href="{{ route('admin.about.index') }}" class="btn btn-outline-dark">
                                    {{ __('Yönet') }}
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Education Management -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-graduation-cap text-gray-600 text-2xl mr-3"></i>
                                    <h4 class="text-lg font-semibold text-gray-900">Eğitim Yönetimi</h4>
                                </div>
                                <p class="text-gray-600 mb-4">Eğitim bilgilerinizi yönetin</p>
                                <a href="{{ route('admin.education.index') }}" class="btn btn-outline-dark">
                                    {{ __('Yönet') }}
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Skills Management -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-code text-gray-600 text-2xl mr-3"></i>
                                    <h4 class="text-lg font-semibold text-gray-900">Yetenekler Yönetimi</h4>
                                </div>
                                <p class="text-gray-600 mb-4">Teknik yeteneklerinizi yönetin</p>
                                <a href="{{ route('admin.skills.index') }}" class="btn btn-outline-dark">
                                    {{ __('Yönet') }}
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Experience Management -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-briefcase text-gray-600 text-2xl mr-3"></i>
                                    <h4 class="text-lg font-semibold text-gray-900">Deneyim Yönetimi</h4>
                                </div>
                                <p class="text-gray-600 mb-4">İş deneyimlerinizi yönetin</p>
                                <a href="{{ route('admin.experiences.index') }}" class="btn btn-outline-dark">
                                    {{ __('Yönet') }}
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Portfolio Management -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-folder text-gray-600 text-2xl mr-3"></i>
                                    <h4 class="text-lg font-semibold text-gray-900">Portfolio Yönetimi</h4>
                                </div>
                                <p class="text-gray-600 mb-4">Projelerinizi yönetin</p>
                                <a href="{{ route('admin.portfolios.index') }}" class="btn btn-outline-dark">
                                    {{ __('Yönet') }}
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
