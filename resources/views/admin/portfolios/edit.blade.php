<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Portfolio Düzenle') }}
            </h2>
            <a href="{{ route('admin.portfolios.index') }}" class="btn btn-outline-dark">
                Geri Dön
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('admin.portfolios.update', $portfolio) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Proje Başlığı:</label>
                                <input type="text" name="title" id="title" value="{{ old('title', $portfolio->title) }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>

                            <div>
                                <label for="technology" class="block text-gray-700 text-sm font-bold mb-2">Teknoloji:</label>
                                <input type="text" name="technology" id="technology" value="{{ old('technology', $portfolio->technology) }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Açıklama:</label>
                            <textarea name="description" id="description" rows="4"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ old('description', $portfolio->description) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="features" class="block text-gray-700 text-sm font-bold mb-2">Temel Özellikler:</label>
                            <textarea name="features" id="features" rows="4"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('features', $portfolio->features) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="security_features" class="block text-gray-700 text-sm font-bold mb-2">Güvenlik Özellikleri:</label>
                            <textarea name="security_features" id="security_features" rows="4"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('security_features', $portfolio->security_features) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="microservices" class="block text-gray-700 text-sm font-bold mb-2">Mikroservis Yapısı:</label>
                            <textarea name="microservices" id="microservices" rows="4"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('microservices', $portfolio->microservices) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="technologies_used" class="block text-gray-700 text-sm font-bold mb-2">Kullanılan Teknolojiler:</label>
                            <textarea name="technologies_used" id="technologies_used" rows="4"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('technologies_used', $portfolio->technologies_used) }}</textarea>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="github_url" class="block text-gray-700 text-sm font-bold mb-2">GitHub URL:</label>
                                <input type="url" name="github_url" id="github_url" value="{{ old('github_url', $portfolio->github_url) }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div>
                                <label for="demo_url" class="block text-gray-700 text-sm font-bold mb-2">Demo URL:</label>
                                <input type="url" name="demo_url" id="demo_url" value="{{ old('demo_url', $portfolio->demo_url) }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                            <div>
                                <label for="image_url" class="block text-gray-700 text-sm font-bold mb-2">Resim URL:</label>
                                <input type="url" name="image_url" id="image_url" value="{{ old('image_url', $portfolio->image_url) }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div>
                                <label for="sort_order" class="block text-gray-700 text-sm font-bold mb-2">Sıra:</label>
                                <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', $portfolio->sort_order) }}" min="0"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>

                            <div>
                                <label for="is_active" class="block text-gray-700 text-sm font-bold mb-2">Durum:</label>
                                <select name="is_active" id="is_active" 
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="1" {{ old('is_active', $portfolio->is_active) == '1' ? 'selected' : '' }}>Aktif</option>
                                    <option value="0" {{ old('is_active', $portfolio->is_active) == '0' ? 'selected' : '' }}>Pasif</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="btn btn-outline-dark">
                                Portfolio Güncelle
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
