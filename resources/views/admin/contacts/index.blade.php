<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('İletişim Yönetimi') }}
            </h2>
            <a href="{{ route('admin.contacts.create') }}" class="btn btn-outline-dark">
                Yeni İletişim Bilgisi Ekle
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="py-2 px-4 border-b text-left">ID</th>
                                    <th class="py-2 px-4 border-b text-left">Telefon</th>
                                    <th class="py-2 px-4 border-b text-left">E-posta</th>
                                    <th class="py-2 px-4 border-b text-left">Adres</th>
                                    <th class="py-2 px-4 border-b text-left">Sıra</th>
                                    <th class="py-2 px-4 border-b text-left">Durum</th>
                                    <th class="py-2 px-4 border-b text-left">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($contacts as $contact)
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-2 px-4 border-b">{{ $contact->id }}</td>
                                        <td class="py-2 px-4 border-b">{{ $contact->phone ?: '-' }}</td>
                                        <td class="py-2 px-4 border-b">{{ $contact->email ?: '-' }}</td>
                                        <td class="py-2 px-4 border-b">{{ Str::limit($contact->address ?: '-', 30) }}</td>
                                        <td class="py-2 px-4 border-b">{{ $contact->sort_order }}</td>
                                        <td class="py-2 px-4 border-b">
                                            <span class="px-2 py-1 text-xs rounded-full {{ $contact->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                {{ $contact->is_active ? 'Aktif' : 'Pasif' }}
                                            </span>
                                        </td>
                                        <td class="py-2 px-4 border-b">
                                            <div class="flex items-center space-x-2">
                                                <a href="{{ route('admin.contacts.show', $contact) }}" class="text-blue-600 hover:text-blue-800">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.contacts.edit', $contact) }}" class="text-yellow-600 hover:text-yellow-800">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Silmek istediğinizden emin misiniz?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="py-4 px-4 text-center text-gray-500 bg-gray-50">
                                            Henüz iletişim bilgisi eklenmemiş.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
