<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('About Yönetimi') }}
            </h2>
            <a href="{{ route('about.create') }}" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
                Yeni About Ekle
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
                                    <th class="py-2 px-4 border-b text-left">Başlık</th>
                                    <th class="py-2 px-4 border-b text-left">Açıklama (TR)</th>
                                    <th class="py-2 px-4 border-b text-left">Durum</th>
                                    <th class="py-2 px-4 border-b text-left">Oluşturulma</th>
                                    <th class="py-2 px-4 border-b text-left">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($abouts as $about)
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-2 px-4 border-b">{{ $about->id }}</td>
                                        <td class="py-2 px-4 border-b">{{ $about->title }}</td>
                                        <td class="py-2 px-4 border-b">
                                            {{ Str::limit($about->description_tr, 100) }}
                                        </td>
                                        <td class="py-2 px-4 border-b">
                                            <span class="px-2 py-1 text-xs rounded-full {{ $about->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                {{ $about->is_active ? 'Aktif' : 'Pasif' }}
                                            </span>
                                        </td>
                                        <td class="py-2 px-4 border-b">{{ $about->created_at->format('d.m.Y H:i') }}</td>
                                        <td class="py-2 px-4 border-b">
                                            <div class="flex items-center space-x-2">
                                                <a href="{{ route('about.show', $about) }}" class="text-blue-600 hover:text-blue-800">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('about.edit', $about) }}" class="text-yellow-600 hover:text-yellow-800">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('about.destroy', $about) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Silmek istediğinizden emin misiniz?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="py-4 px-4 text-center text-gray-500">
                                            Henüz about bilgisi eklenmemiş.
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
