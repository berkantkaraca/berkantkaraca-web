<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Yeni About Ekle') }}
            </h2>
            <a href="{{ route('admin.about.index') }}" class="bg-gray-500 hover:bg-gray-700 font-bold py-2 px-4 rounded">
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

                    <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Başlık:</label>
                            <input type="text" name="title" id="title" value="{{ old('title', 'Berkant Karaca Kimdir?') }}" 
                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <div class="mb-4">
                            <label for="description_tr" class="block text-gray-700 text-sm font-bold mb-2">Açıklama (Türkçe):</label>
                            <textarea name="description_tr" id="description_tr" rows="10" 
                                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ old('description_tr') }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="description_en" class="block text-gray-700 text-sm font-bold mb-2">Açıklama (İngilizce):</label>
                            <textarea name="description_en" id="description_en" rows="10" 
                                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description_en') }}</textarea>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="cv_tr" class="block text-gray-700 text-sm font-bold mb-2">CV (Türkçe):</label>
                                <input type="file" name="cv_tr" id="cv_tr" accept=".pdf" 
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <p class="text-xs text-gray-500 mt-1">PDF formatında, maksimum 2MB</p>
                            </div>

                            <div>
                                <label for="cv_en" class="block text-gray-700 text-sm font-bold mb-2">CV (İngilizce):</label>
                                <input type="file" name="cv_en" id="cv_en" accept=".pdf" 
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <p class="text-xs text-gray-500 mt-1">PDF formatında, maksimum 2MB</p>
                            </div>

                            <div>
                                <label for="cover_letter_tr" class="block text-gray-700 text-sm font-bold mb-2">Niyet Mektubu (Türkçe):</label>
                                <input type="file" name="cover_letter_tr" id="cover_letter_tr" accept=".pdf" 
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <p class="text-xs text-gray-500 mt-1">PDF formatında, maksimum 2MB</p>
                            </div>

                            <div>
                                <label for="cover_letter_en" class="block text-gray-700 text-sm font-bold mb-2">Cover Letter (İngilizce):</label>
                                <input type="file" name="cover_letter_en" id="cover_letter_en" accept=".pdf" 
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <p class="text-xs text-gray-500 mt-1">PDF formatında, maksimum 2MB</p>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="flex items-center">
                                <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} 
                                       class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Aktif</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Kaydet
                            </button>
                            <a href="{{ route('admin.about.index') }}" class="bg-gray-500 hover:bg-gray-700 font-bold py-2 px-4 rounded">
                                İptal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
