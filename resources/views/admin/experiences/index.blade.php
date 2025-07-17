<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Deneyim Yönetimi') }}
            </h2>
            <a href="{{ route('admin.experiences.create') }}" class="btn btn-outline-dark">
                Yeni Deneyim Ekle
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

                    @if($experiences->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="py-2 px-4 border-b text-left">Şirket</th>
                                    <th class="py-2 px-4 border-b text-left">Pozisyon</th>
                                    <th class="py-2 px-4 border-b text-left">Lokasyon</th>
                                    <th class="py-2 px-4 border-b text-left">Durum</th>
                                    <th class="py-2 px-4 border-b text-left">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($experiences as $experience)
                                <tr class="hover:bg-gray-50">
                                    <td class="py-2 px-4 border-b">
                                        <div class="flex items-center">
                                            @if($experience->company_logo)
                                                <img class="h-8 w-8 rounded-full mr-3" src="{{ $experience->company_logo }}" alt="{{ $experience->company_name }}">
                                            @else
                                                <div class="h-8 w-8 bg-gray-300 rounded-full mr-3 flex items-center justify-center">
                                                    <i class="fas fa-building text-gray-600 text-xs"></i>
                                                </div>
                                            @endif
                                            <div class="text-sm font-medium text-gray-900">{{ $experience->company_name }}</div>
                                        </div>
                                    </td>
                                    <td class="py-2 px-4 border-b">{{ $experience->position }}</td>

                                    <td class="py-2 px-4 border-b">{{ $experience->location ?: '-' }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <span class="px-2 py-1 text-xs rounded-full {{ $experience->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                            {{ $experience->is_active ? 'Aktif' : 'Pasif' }}
                                        </span>
                                    </td>
                                    <td class="py-2 px-4 border-b">
                                        <div class="flex items-center space-x-2">
                                            <a href="{{ route('admin.experiences.show', $experience) }}" class="text-blue-600 hover:text-blue-800">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.experiences.edit', $experience) }}" class="text-yellow-600 hover:text-yellow-800">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.experiences.destroy', $experience) }}" method="POST" class="inline" onsubmit="return confirm('Bu deneyimi silmek istediğinizden emin misiniz?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="text-center py-4">
                        <p class="text-gray-500">Henüz deneyim eklenmemiş.</p>
                        <a href="{{ route('admin.experiences.create') }}" class="btn btn-outline-dark mt-2">
                            Yeni Deneyim Ekle
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
