<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Deneyim Detayı') }}: {{ $experience->position }} - {{ $experience->company_name }}
            </h2>
            <div class="space-x-2">
                <a href="{{ route('admin.experiences.edit', $experience) }}" class="btn btn-outline-dark">
                    Düzenle
                </a>
                <a href="{{ route('admin.experiences.index') }}" class="btn btn-outline-secondary">
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
                        <!-- Sol Taraf - Bilgiler -->
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Deneyim Bilgileri</h3>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Şirket Adı:</label>
                                    <p class="text-gray-900">{{ $experience->company_name }}</p>
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Pozisyon:</label>
                                    <p class="text-gray-900">{{ $experience->position }}</p>
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Çalışma Dönemi:</label>
                                    <p class="text-gray-900">{{ $experience->formatted_duration }}</p>
                                </div>

                                @if($experience->location)
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Lokasyon:</label>
                                    <p class="text-gray-900">{{ $experience->location }}</p>
                                </div>
                                @endif

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Sıra:</label>
                                    <p class="text-gray-900">{{ $experience->sort_order ?? 'Belirtilmemiş' }}</p>
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Durumlar:</label>
                                    <div class="space-x-2">
                                        @if($experience->is_current)
                                            <span class="badge bg-success">Devam Ediyor</span>
                                        @endif
                                        @if($experience->is_active)
                                            <span class="badge bg-primary">Aktif</span>
                                        @else
                                            <span class="badge bg-danger">Pasif</span>
                                        @endif
                                    </div>
                                </div>

                                @if($experience->description)
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Açıklama:</label>
                                    <p class="text-gray-900">{{ $experience->description }}</p>
                                </div>
                                @endif

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Oluşturulma Tarihi:</label>
                                    <p class="text-gray-900">{{ $experience->created_at->format('d.m.Y H:i') }}</p>
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Son Güncelleme:</label>
                                    <p class="text-gray-900">{{ $experience->updated_at->format('d.m.Y H:i') }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Sağ Taraf - Logo -->
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Şirket Logosu</h3>
                            
                            @if($experience->company_logo)
                                <div class="text-center">
                                    <img src="{{ $experience->company_logo }}" alt="{{ $experience->company_name }}" class="mx-auto max-w-full h-32 object-contain">
                                    <div class="mt-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2">Logo URL:</label>
                                        <p class="text-sm text-gray-600 break-all">{{ $experience->company_logo }}</p>
                                    </div>
                                </div>
                            @else
                                <div class="text-center text-gray-500">
                                    <i class="fas fa-building fa-3x mb-2"></i>
                                    <p>Logo bulunamadı</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Aksiyon Butonları -->
                    <div class="mt-8 pt-4 border-t border-gray-200">
                        <div class="flex justify-between items-center">
                            <div class="space-x-2">
                                <a href="{{ route('admin.experiences.edit', $experience) }}" class="btn btn-outline-dark">
                                    <i class="fas fa-edit me-1"></i> Düzenle
                                </a>
                                <form action="{{ route('admin.experiences.destroy', $experience) }}" method="POST" class="inline" 
                                    onsubmit="return confirm('Bu deneyimi silmek istediğinizden emin misiniz?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">
                                        <i class="fas fa-trash me-1"></i> Sil
                                    </button>
                                </form>
                            </div>
                            
                            <a href="{{ route('admin.experiences.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left me-1"></i> Listeye Dön
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
