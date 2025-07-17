<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kullanıcı Detayı') }}
            </h2>
            <div class="flex space-x-2">
                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-outline-dark">
                    Düzenle
                </a>
                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                    Geri Dön
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <!-- Kullanıcı Bilgileri -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-4 border-b pb-2">Kullanıcı Bilgileri</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">ID:</label>
                                    <p class="mb-0">{{ $user->id }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">İsim:</label>
                                    <p class="mb-0">{{ $user->name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">E-posta:</label>
                                    <p class="mb-0">{{ $user->email }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Rol:</label>
                                    <p class="mb-0">
                                        <span class="badge {{ $user->role === 'ADMIN' ? 'bg-danger' : 'bg-primary' }}">
                                            {{ $user->role === 'ADMIN' ? 'Yönetici' : 'Kullanıcı' }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tarih Bilgileri -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-4 border-b pb-2">Tarih Bilgileri</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Kayıt Tarihi:</label>
                                    <p class="mb-0">{{ $user->created_at ? $user->created_at->format('d.m.Y H:i') : '-' }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Son Güncellenme:</label>
                                    <p class="mb-0">{{ $user->updated_at ? $user->updated_at->format('d.m.Y H:i') : '-' }}</p>
                                </div>
                            </div>
                        </div>
                        @if($user->email_verified_at)
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">E-posta Doğrulama:</label>
                                        <p class="mb-0">
                                            <span class="badge bg-success">Doğrulanmış</span>
                                            <small class="text-muted d-block">{{ $user->email_verified_at->format('d.m.Y H:i') }}</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">E-posta Doğrulama:</label>
                                        <p class="mb-0">
                                            <span class="badge bg-warning">Doğrulanmamış</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- İşlemler -->
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-outline-dark me-2">
                            <i class="fas fa-edit me-1"></i> Düzenle
                        </a>
                        @if($user->id !== auth()->user()->id)
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bu kullanıcıyı silmek istediğinizden emin misiniz?')">
                                    <i class="fas fa-trash me-1"></i> Sil
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
