<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Yeni Eğitim Ekle') }}
            </h2>
            <a href="{{ route('admin.education.index') }}" class="btn btn-outline-dark">
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

                    <form action="{{ route('admin.education.store') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="institution_name" class="block text-gray-700 text-sm font-bold mb-2">Kurum Adı:</label>
                                <input type="text" name="institution_name" id="institution_name" value="{{ old('institution_name') }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>

                            <div>
                                <label for="degree" class="block text-gray-700 text-sm font-bold mb-2">Derece:</label>
                                <input type="text" name="degree" id="degree" value="{{ old('degree') }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="field_of_study" class="block text-gray-700 text-sm font-bold mb-2">Çalışma Alanı:</label>
                                <input type="text" name="field_of_study" id="field_of_study" value="{{ old('field_of_study') }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>

                            <div>
                                <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Konum:</label>
                                <input type="text" name="location" id="location" value="{{ old('location') }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Başlangıç Tarihi:</label>
                                <input type="text" name="start_date" id="start_date" value="{{ old('start_date') }}" placeholder="2021"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>

                            <div>
                                <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">Bitiş Tarihi:</label>
                                <input type="text" name="end_date" id="end_date" value="{{ old('end_date') }}" placeholder="2025"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="gpa" class="block text-gray-700 text-sm font-bold mb-2">Not Ortalaması (isteğe bağlı):</label>
                                <input type="text" name="gpa" id="gpa" value="{{ old('gpa') }}" placeholder="3.79"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div>
                                <label for="sort_order" class="block text-gray-700 text-sm font-bold mb-2">Sıra (isteğe bağlı):</label>
                                <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', 0) }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="icon" class="block text-gray-700 text-sm font-bold mb-2">İkon (isteğe bağlı):</label>
                            <input type="text" name="icon" id="icon" value="{{ old('icon') }}" placeholder="images/services/ui-ux.svg"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Açıklama (isteğe bağlı):</label>
                            <textarea name="description" id="description" rows="5"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label class="flex items-center">
                                <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                                    class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Aktif</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="btn btn-outline-dark">
                                Kaydet
                            </button>
                            <a href="{{ route('admin.education.index') }}" class="btn btn-outline-secondary">
                                İptal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
