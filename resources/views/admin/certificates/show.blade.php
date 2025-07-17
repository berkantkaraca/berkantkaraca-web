<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Sertifika Detayı') }}
            </h2>
            <div class="flex space-x-2">
                <a href="{{ route('admin.certificates.edit', $certificate) }}" class="btn btn-outline-dark">
                    Düzenle
                </a>
                <a href="{{ route('admin.certificates.index') }}" class="btn btn-outline-dark">
                    Geri Dön
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div>
                            <strong class="text-gray-700">Sertifika Başlığı:</strong>
                            <p class="mt-1">{{ $certificate->title }}</p>
                        </div>
                        <div>
                            <strong class="text-gray-700">Veren Kurum:</strong>
                            <p class="mt-1">{{ $certificate->issuer }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div>
                            <strong class="text-gray-700">Veriliş Tarihi:</strong>
                            <p class="mt-1">{{ $certificate->issue_date->format('d.m.Y') }}</p>
                        </div>
                        @if($certificate->certificate_url)
                        <div>
                            <strong class="text-gray-700">Sertifika URL:</strong>
                            <p class="mt-1">
                                <a href="{{ $certificate->certificate_url }}" target="_blank" class="text-blue-600 hover:text-blue-800">
                                    {{ $certificate->certificate_url }}
                                </a>
                            </p>
                        </div>
                        @endif
                    </div>

                    <div class="mb-6">
                        <strong class="text-gray-700">Sertifika Resmi:</strong>
                        <div class="mt-2">
                            @if($certificate->image_path)
                                <img src="{{ $certificate->image_url }}" alt="{{ $certificate->title }}" class="max-w-sm rounded-lg shadow-md">
                            @else
                                <p class="text-gray-500">Resim bulunmuyor</p>
                            @endif
                        </div>
                    </div>

                    @if($certificate->description)
                    <div class="mb-6">
                        <strong class="text-gray-700">Açıklama:</strong>
                        <p class="mt-1">{{ $certificate->description }}</p>
                    </div>
                    @endif

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div>
                            <strong class="text-gray-700">Sıra:</strong>
                            <p class="mt-1">{{ $certificate->sort_order }}</p>
                        </div>
                        <div>
                            <strong class="text-gray-700">Durum:</strong>
                            <p class="mt-1">
                                <span class="px-2 py-1 text-xs rounded-full {{ $certificate->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $certificate->is_active ? 'Aktif' : 'Pasif' }}
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600">
                        <div>
                            <strong>Oluşturulma Tarihi:</strong> {{ $certificate->created_at->format('d.m.Y H:i') }}
                        </div>
                        <div>
                            <strong>Son Güncelleme:</strong> {{ $certificate->updated_at->format('d.m.Y H:i') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
