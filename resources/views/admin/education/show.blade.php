<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Eğitim Detayları') }}
            </h2>
            <div class="flex space-x-2">
                <a href="{{ route('admin.education.edit', $education) }}" class="btn btn-outline-warning">
                    Düzenle
                </a>
                <a href="{{ route('admin.education.index') }}" class="btn btn-outline-dark">
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
                            <h3 class="text-lg font-semibold mb-4">Temel Bilgiler</h3>
                            <div class="space-y-3">
                                <div>
                                    <strong>Kurum:</strong>
                                    <p class="text-gray-700">{{ $education->institution_name }}</p>
                                </div>
                                <div>
                                    <strong>Derece:</strong>
                                    <p class="text-gray-700">{{ $education->degree }}</p>
                                </div>
                                <div>
                                    <strong>Çalışma Alanı:</strong>
                                    <p class="text-gray-700">{{ $education->field_of_study }}</p>
                                </div>
                                <div>
                                    <strong>Konum:</strong>
                                    <p class="text-gray-700">{{ $education->location }}</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold mb-4">Diğer Bilgiler</h3>
                            <div class="space-y-3">
                                <div>
                                    <strong>Başlangıç Tarihi:</strong>
                                    <p class="text-gray-700">{{ $education->start_date }}</p>
                                </div>
                                <div>
                                    <strong>Bitiş Tarihi:</strong>
                                    <p class="text-gray-700">{{ $education->end_date }}</p>
                                </div>
                                @if($education->gpa)
                                <div>
                                    <strong>Not Ortalaması:</strong>
                                    <p class="text-gray-700">{{ $education->gpa }}</p>
                                </div>
                                @endif
                                <div>
                                    <strong>Sıra:</strong>
                                    <p class="text-gray-700">{{ $education->sort_order }}</p>
                                </div>
                                <div>
                                    <strong>Durum:</strong>
                                    <span class="px-2 py-1 text-xs rounded-full {{ $education->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ $education->is_active ? 'Aktif' : 'Pasif' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($education->description)
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold mb-4">Açıklama</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-700 whitespace-pre-line">{{ $education->description }}</p>
                        </div>
                    </div>
                    @endif

                    @if($education->icon)
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold mb-4">İkon</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-700">{{ $education->icon }}</p>
                        </div>
                    </div>
                    @endif

                    <div class="mt-6 text-sm text-gray-500">
                        <p>Oluşturulma: {{ $education->created_at->format('d.m.Y H:i') }}</p>
                        <p>Son Güncelleme: {{ $education->updated_at->format('d.m.Y H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
