<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Skill Detayı') }}: {{ $skill->name }}
            </h2>
            <div class="space-x-2">
                <a href="{{ route('admin.skills.edit', $skill) }}" class="btn btn-outline-dark">
                    Düzenle
                </a>
                <a href="{{ route('admin.skills.index') }}" class="btn btn-outline-secondary">
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
                            <h3 class="text-lg font-semibold mb-4">Skill Bilgileri</h3>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Skill Adı:</label>
                                    <p class="text-gray-900">{{ $skill->name }}</p>
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Kategori:</label>
                                    <p class="text-gray-900">
                                        <span class="badge bg-primary">{{ $skill->getCategoryName() }}</span>
                                    </p>
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Sıra:</label>
                                    <p class="text-gray-900">{{ $skill->sort_order ?? 'Belirtilmemiş' }}</p>
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Durum:</label>
                                    <p class="text-gray-900">
                                        @if($skill->is_active)
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-danger">Pasif</span>
                                        @endif
                                    </p>
                                </div>

                                @if($skill->description)
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Açıklama:</label>
                                    <p class="text-gray-900">{{ $skill->description }}</p>
                                </div>
                                @endif

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Oluşturulma Tarihi:</label>
                                    <p class="text-gray-900">{{ $skill->created_at->format('d.m.Y H:i') }}</p>
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Son Güncelleme:</label>
                                    <p class="text-gray-900">{{ $skill->updated_at->format('d.m.Y H:i') }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Sağ Taraf - İkon -->
                        <div>
                            <h3 class="text-lg font-semibold mb-4">İkon</h3>
                            
                            @if($skill->icon_url)
                                <div class="text-center">
                                    <img src="{{ $skill->icon_url }}" alt="{{ $skill->name }}" class="mx-auto" style="width: 100px; height: 100px;">
                                    <div class="mt-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2">İkon URL:</label>
                                        <p class="text-sm text-gray-600 break-all">{{ $skill->icon_url }}</p>
                                    </div>
                                </div>
                            @else
                                <div class="text-center text-gray-500">
                                    <i class="fas fa-image fa-3x mb-2"></i>
                                    <p>İkon bulunamadı</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Aksiyon Butonları -->
                    <div class="mt-8 pt-4 border-t border-gray-200">
                        <div class="flex justify-between items-center">
                            <div class="space-x-2">
                                <a href="{{ route('admin.skills.edit', $skill) }}" class="btn btn-outline-dark">
                                    <i class="fas fa-edit me-1"></i> Düzenle
                                </a>
                                <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" class="inline" 
                                    onsubmit="return confirm('Bu skill\'i silmek istediğinizden emin misiniz?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">
                                        <i class="fas fa-trash me-1"></i> Sil
                                    </button>
                                </form>
                            </div>
                            
                            <a href="{{ route('admin.skills.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left me-1"></i> Listeye Dön
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
