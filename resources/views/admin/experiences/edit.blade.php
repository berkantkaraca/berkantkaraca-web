<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Deneyim Düzenle') }}: {{ $experience->position }} - {{ $experience->company_name }}
            </h2>
            <a href="{{ route('admin.experiences.index') }}" class="btn btn-outline-dark">
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

                    <form action="{{ route('admin.experiences.update', $experience) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="company_name" class="block text-gray-700 text-sm font-bold mb-2">Şirket Adı:</label>
                                <input type="text" name="company_name" id="company_name" value="{{ old('company_name', $experience->company_name) }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>

                            <div>
                                <label for="position" class="block text-gray-700 text-sm font-bold mb-2">Pozisyon:</label>
                                <input type="text" name="position" id="position" value="{{ old('position', $experience->position) }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Açıklama:</label>
                            <textarea name="description" id="description" rows="4"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description', $experience->description) }}</textarea>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Başlangıç Tarihi:</label>
                                <input type="date" name="start_date" id="start_date" value="{{ old('start_date', $experience->start_date->format('Y-m-d')) }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>

                            <div>
                                <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">Bitiş Tarihi:</label>
                                <input type="date" name="end_date" id="end_date" value="{{ old('end_date', $experience->end_date?->format('Y-m-d')) }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <p class="text-xs text-gray-500 mt-1">Hala çalışıyorsanız boş bırakın ve "Devam Ediyor" işaretleyin</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Lokasyon (isteğe bağlı):</label>
                                <input type="text" name="location" id="location" value="{{ old('location', $experience->location) }}" 
                                    placeholder="İstanbul, Türkiye"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div>
                                <label for="sort_order" class="block text-gray-700 text-sm font-bold mb-2">Sıra (isteğe bağlı):</label>
                                <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', $experience->sort_order) }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="company_logo" class="block text-gray-700 text-sm font-bold mb-2">Şirket Logo URL (isteğe bağlı):</label>
                            <input type="url" name="company_logo" id="company_logo" value="{{ old('company_logo', $experience->company_logo) }}" 
                                placeholder="https://example.com/logo.png"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @if($experience->company_logo)
                                <div class="mt-2">
                                    <p class="text-sm text-gray-600">Mevcut Logo:</p>
                                    <img src="{{ $experience->company_logo }}" alt="{{ $experience->company_name }}" class="w-16 h-16 object-contain mt-1">
                                </div>
                            @endif
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="flex items-center">
                                    <input type="checkbox" name="is_current" value="1" {{ old('is_current', $experience->is_current) ? 'checked' : '' }}
                                        class="form-checkbox h-5 w-5 text-blue-600">
                                    <span class="ml-2 text-gray-700">Hala bu pozisyonda çalışıyorum</span>
                                </label>
                            </div>

                            <div>
                                <label class="flex items-center">
                                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $experience->is_active) ? 'checked' : '' }}
                                        class="form-checkbox h-5 w-5 text-blue-600">
                                    <span class="ml-2 text-gray-700">Aktif</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="btn btn-outline-dark">
                                Güncelle
                            </button>
                            <div class="space-x-2">
                                <a href="{{ route('admin.experiences.show', $experience) }}" class="btn btn-outline-secondary">
                                    Görüntüle
                                </a>
                                <a href="{{ route('admin.experiences.index') }}" class="btn btn-outline-secondary">
                                    İptal
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
