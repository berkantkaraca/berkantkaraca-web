<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('İletişim Bilgisi Detayı') }}
            </h2>
            <div class="flex space-x-2">
                <a href="{{ route('admin.contacts.edit', $contact) }}" class="btn btn-outline-dark">
                    Düzenle
                </a>
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
                    Geri Dön
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <!-- Temel Bilgiler -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-4 border-b pb-2">Temel Bilgiler</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Telefon:</label>
                                    <p class="mb-0">{{ $contact->phone ?: 'Belirtilmemiş' }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">E-posta:</label>
                                    <p class="mb-0">{{ $contact->email ?: 'Belirtilmemiş' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Adres:</label>
                            <p class="mb-0">{{ $contact->address ?: 'Belirtilmemiş' }}</p>
                        </div>
                    </div>

                    <!-- Sosyal Medya Hesapları -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-4 border-b pb-2">Sosyal Medya Hesapları</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">LinkedIn:</label>
                                    @if($contact->linkedin_url)
                                        <p class="mb-0">
                                            <a href="{{ $contact->linkedin_url }}" target="_blank" class="text-blue-600 hover:text-blue-800">
                                                <i class="fab fa-linkedin me-1"></i> {{ $contact->linkedin_url }}
                                            </a>
                                        </p>
                                    @else
                                        <p class="mb-0 text-muted">Belirtilmemiş</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">GitHub:</label>
                                    @if($contact->github_url)
                                        <p class="mb-0">
                                            <a href="{{ $contact->github_url }}" target="_blank" class="text-gray-800 hover:text-gray-600">
                                                <i class="fab fa-github me-1"></i> {{ $contact->github_url }}
                                            </a>
                                        </p>
                                    @else
                                        <p class="mb-0 text-muted">Belirtilmemiş</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Twitter:</label>
                                    @if($contact->twitter_url)
                                        <p class="mb-0">
                                            <a href="{{ $contact->twitter_url }}" target="_blank" class="text-blue-400 hover:text-blue-600">
                                                <i class="fab fa-twitter me-1"></i> {{ $contact->twitter_url }}
                                            </a>
                                        </p>
                                    @else
                                        <p class="mb-0 text-muted">Belirtilmemiş</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Facebook:</label>
                                    @if($contact->facebook_url)
                                        <p class="mb-0">
                                            <a href="{{ $contact->facebook_url }}" target="_blank" class="text-blue-600 hover:text-blue-800">
                                                <i class="fab fa-facebook me-1"></i> {{ $contact->facebook_url }}
                                            </a>
                                        </p>
                                    @else
                                        <p class="mb-0 text-muted">Belirtilmemiş</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Instagram:</label>
                            @if($contact->instagram_url)
                                <p class="mb-0">
                                    <a href="{{ $contact->instagram_url }}" target="_blank" class="text-pink-600 hover:text-pink-800">
                                        <i class="fab fa-instagram me-1"></i> {{ $contact->instagram_url }}
                                    </a>
                                </p>
                            @else
                                <p class="mb-0 text-muted">Belirtilmemiş</p>
                            @endif
                        </div>
                    </div>

                    <!-- Ayarlar -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-4 border-b pb-2">Ayarlar</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Sıra:</label>
                                    <p class="mb-0">{{ $contact->sort_order }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Durum:</label>
                                    <p class="mb-0">
                                        <span class="badge {{ $contact->is_active ? 'bg-success' : 'bg-danger' }}">
                                            {{ $contact->is_active ? 'Aktif' : 'Pasif' }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Oluşturulma Tarihi:</label>
                                    <p class="mb-0">{{ $contact->created_at ? $contact->created_at->format('d.m.Y H:i') : '-' }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Güncellenme Tarihi:</label>
                                    <p class="mb-0">{{ $contact->updated_at ? $contact->updated_at->format('d.m.Y H:i') : '-' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- İşlemler -->
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.contacts.edit', $contact) }}" class="btn btn-outline-dark me-2">
                            <i class="fas fa-edit me-1"></i> Düzenle
                        </a>
                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bu iletişim bilgisini silmek istediğinizden emin misiniz?')">
                                <i class="fas fa-trash me-1"></i> Sil
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
