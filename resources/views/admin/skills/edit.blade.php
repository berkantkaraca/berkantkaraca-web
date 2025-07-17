<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Skill Düzenle') }}: {{ $skill->name }}
            </h2>
            <a href="{{ route('admin.skills.index') }}" class="btn btn-outline-dark">
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

                    <form action="{{ route('admin.skills.update', $skill) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Skill Adı:</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $skill->name) }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>

                            <div>
                                <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Kategori:</label>
                                <select name="category" id="category" 
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                    <option value="">Kategori Seçin</option>
                                    @foreach($categories as $key => $value)
                                        <option value="{{ $key }}" {{ old('category', $skill->category) == $key ? 'selected' : '' }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="icon_url" class="block text-gray-700 text-sm font-bold mb-2">İkon URL:</label>
                            <input type="url" name="icon_url" id="icon_url" value="{{ old('icon_url', $skill->icon_url) }}" 
                                placeholder="https://skillicons.dev/icons?theme=dark&i=php"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            <p class="text-xs text-gray-500 mt-1">Örnek: https://skillicons.dev/icons?theme=dark&i=php</p>
                            @if($skill->icon_url)
                                <div class="mt-2">
                                    <p class="text-sm text-gray-600">Mevcut İkon:</p>
                                    <img src="{{ $skill->icon_url }}" alt="{{ $skill->name }}" class="w-8 h-8 mt-1">
                                </div>
                            @endif
                        </div>

                        <div class="mb-4">
                            <label for="sort_order" class="block text-gray-700 text-sm font-bold mb-2">Sıra (isteğe bağlı):</label>
                            <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', $skill->sort_order) }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Açıklama (isteğe bağlı):</label>
                            <textarea name="description" id="description" rows="3"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description', $skill->description) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label class="flex items-center">
                                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $skill->is_active) ? 'checked' : '' }}
                                    class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Aktif</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="btn btn-outline-dark">
                                Güncelle
                            </button>
                            <div class="space-x-2">
                                <a href="{{ route('admin.skills.show', $skill) }}" class="btn btn-outline-secondary">
                                    Görüntüle
                                </a>
                                <a href="{{ route('admin.skills.index') }}" class="btn btn-outline-secondary">
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
