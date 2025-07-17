<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('About Detayları') }}
            </h2>
            <div class="flex space-x-2">
                <a href="{{ route('admin.about.edit', $about) }}" class="btn btn-outline-warning">
                    Düzenle
                </a>
                <a href="{{ route('admin.about.index') }}" class="btn btn-outline-dark">
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
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Genel Bilgiler</h3>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Başlık:</label>
                                <p class="bg-gray-100 p-3 rounded">{{ $about->title }}</p>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Durum:</label>
                                <span class="px-3 py-1 text-sm rounded-full {{ $about->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $about->is_active ? 'Aktif' : 'Pasif' }}
                                </span>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Oluşturulma Tarihi:</label>
                                <p class="bg-gray-100 p-3 rounded">{{ $about->created_at->format('d.m.Y H:i') }}</p>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Güncellenme Tarihi:</label>
                                <p class="bg-gray-100 p-3 rounded">{{ $about->updated_at->format('d.m.Y H:i') }}</p>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold mb-4">Dosyalar</h3>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">CV (Türkçe):</label>
                                    @if($about->cv_tr_url)
                                        <a href="{{ Storage::url($about->cv_tr_url) }}" target="_blank" class="text-blue-600 hover:text-blue-800 underline">
                                            CV Türkçe - İndir
                                        </a>
                                    @else
                                        <p class="text-gray-500">Yüklenmemiş</p>
                                    @endif
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">CV (İngilizce):</label>
                                    @if($about->cv_en_url)
                                        <a href="{{ Storage::url($about->cv_en_url) }}" target="_blank" class="text-blue-600 hover:text-blue-800 underline">
                                            CV English - Download
                                        </a>
                                    @else
                                        <p class="text-gray-500">Yüklenmemiş</p>
                                    @endif
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Niyet Mektubu (Türkçe):</label>
                                    @if($about->cover_letter_tr_url)
                                        <a href="{{ Storage::url($about->cover_letter_tr_url) }}" target="_blank" class="text-blue-600 hover:text-blue-800 underline">
                                            Niyet Mektubu - İndir
                                        </a>
                                    @else
                                        <p class="text-gray-500">Yüklenmemiş</p>
                                    @endif
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Cover Letter (İngilizce):</label>
                                    @if($about->cover_letter_en_url)
                                        <a href="{{ Storage::url($about->cover_letter_en_url) }}" target="_blank" class="text-blue-600 hover:text-blue-800 underline">
                                            Cover Letter - Download
                                        </a>
                                    @else
                                        <p class="text-gray-500">Yüklenmemiş</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-lg font-semibold mb-4">Açıklamalar</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Açıklama (Türkçe):</label>
                                <div class="bg-gray-100 p-4 rounded h-64 overflow-y-auto">
                                    <p class="whitespace-pre-wrap">{{ $about->description_tr }}</p>
                                </div>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Açıklama (İngilizce):</label>
                                <div class="bg-gray-100 p-4 rounded h-64 overflow-y-auto">
                                    @if($about->description_en)
                                        <p class="whitespace-pre-wrap">{{ $about->description_en }}</p>
                                    @else
                                        <p class="text-gray-500 italic">İngilizce açıklama eklenmemiş</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
