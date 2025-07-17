<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Portfolio Detayı') }}
            </h2>
            <div class="flex space-x-2">
                <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="btn btn-outline-dark">
                    Düzenle
                </a>
                <a href="{{ route('admin.portfolios.index') }}" class="btn btn-outline-dark">
                    Geri Dön
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Temel Bilgiler -->
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Temel Bilgiler</h3>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <div class="mb-3">
                                        <label class="font-semibold text-gray-700">Başlık:</label>
                                        <p class="text-gray-600">{{ $portfolio->title }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="font-semibold text-gray-700">Teknoloji:</label>
                                        <p class="text-gray-600">{{ $portfolio->technology }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="font-semibold text-gray-700">Sıra:</label>
                                        <p class="text-gray-600">{{ $portfolio->sort_order }}</p>
                                    </div>
                                    <div>
                                        <label class="font-semibold text-gray-700">Durum:</label>
                                        <span class="px-2 py-1 text-xs rounded-full {{ $portfolio->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                            {{ $portfolio->is_active ? 'Aktif' : 'Pasif' }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Linkler -->
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Linkler</h3>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    @if($portfolio->github_url)
                                    <div class="mb-3">
                                        <label class="font-semibold text-gray-700">GitHub:</label>
                                        <a href="{{ $portfolio->github_url }}" target="_blank" class="text-blue-600 hover:text-blue-800 break-all">
                                            {{ $portfolio->github_url }}
                                        </a>
                                    </div>
                                    @endif
                                    
                                    @if($portfolio->demo_url)
                                    <div class="mb-3">
                                        <label class="font-semibold text-gray-700">Demo:</label>
                                        <a href="{{ $portfolio->demo_url }}" target="_blank" class="text-blue-600 hover:text-blue-800 break-all">
                                            {{ $portfolio->demo_url }}
                                        </a>
                                    </div>
                                    @endif
                                    
                                    @if($portfolio->image_url)
                                    <div>
                                        <label class="font-semibold text-gray-700">Resim:</label>
                                        <a href="{{ $portfolio->image_url }}" target="_blank" class="text-blue-600 hover:text-blue-800 break-all">
                                            {{ $portfolio->image_url }}
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Resim -->
                        <div>
                            @if($portfolio->image_url)
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Proje Resmi</h3>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <img src="{{ $portfolio->image_url }}" alt="{{ $portfolio->title }}" class="w-full h-auto rounded-lg shadow-md">
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Açıklama -->
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Açıklama</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-600 whitespace-pre-line">{{ $portfolio->description }}</p>
                        </div>
                    </div>

                    <!-- Özellikler -->
                    @if($portfolio->features)
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Temel Özellikler</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-600 whitespace-pre-line">{{ $portfolio->features }}</p>
                        </div>
                    </div>
                    @endif

                    <!-- Güvenlik Özellikleri -->
                    @if($portfolio->security_features)
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Güvenlik Özellikleri</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-600 whitespace-pre-line">{{ $portfolio->security_features }}</p>
                        </div>
                    </div>
                    @endif

                    <!-- Mikroservis Yapısı -->
                    @if($portfolio->microservices)
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Mikroservis Yapısı</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-600 whitespace-pre-line">{{ $portfolio->microservices }}</p>
                        </div>
                    </div>
                    @endif

                    <!-- Kullanılan Teknolojiler -->
                    @if($portfolio->technologies_used)
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Kullanılan Teknolojiler</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-600 whitespace-pre-line">{{ $portfolio->technologies_used }}</p>
                        </div>
                    </div>
                    @endif

                    <!-- Tarihler -->
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Tarihler</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="font-semibold text-gray-700">Oluşturulma:</label>
                                    <p class="text-gray-600">{{ $portfolio->created_at->format('d.m.Y H:i') }}</p>
                                </div>
                                <div>
                                    <label class="font-semibold text-gray-700">Güncellenme:</label>
                                    <p class="text-gray-600">{{ $portfolio->updated_at->format('d.m.Y H:i') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
