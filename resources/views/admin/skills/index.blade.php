<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Skills Yönetimi') }}
            </h2>
            <a href="{{ route('admin.skills.create') }}" class="btn btn-outline-dark">
                Yeni Skill Ekle
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

                    @if($skills->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="py-2 px-4 border-b text-left">İkon</th>
                                        <th class="py-2 px-4 border-b text-left">İsim</th>
                                        <th class="py-2 px-4 border-b text-left">Kategori</th>
                                        <th class="py-2 px-4 border-b text-left">Durum</th>
                                        <th class="py-2 px-4 border-b text-left">Sıra</th>
                                        <th class="py-2 px-4 border-b text-left">İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($skills as $skill)
                                        <tr class="hover:bg-gray-50">
                                            <td class="py-2 px-4 border-b">
                                                <img src="{{ $skill->icon_url }}" alt="{{ $skill->name }}" height="30" class="rounded">
                                            </td>
                                            <td class="py-2 px-4 border-b">{{ $skill->name }}</td>
                                            <td class="py-2 px-4 border-b">
                                                <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">
                                                    {{ $skill->category }}
                                                </span>
                                            </td>
                                            <td class="py-2 px-4 border-b">
                                                <span class="px-2 py-1 text-xs rounded-full {{ $skill->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                    {{ $skill->is_active ? 'Aktif' : 'Pasif' }}
                                                </span>
                                            </td>
                                            <td class="py-2 px-4 border-b">{{ $skill->sort_order }}</td>
                                            <td class="py-2 px-4 border-b">
                                                <div class="flex items-center space-x-2">
                                                    <a href="{{ route('admin.skills.show', $skill) }}" class="text-blue-600 hover:text-blue-800">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.skills.edit', $skill) }}" class="text-yellow-600 hover:text-yellow-800">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Silmek istediğinizden emin misiniz?')">
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
                        <div class="text-center py-8">
                            <p class="text-gray-500 text-lg">Henüz skill eklenmemiş.</p>
                            <a href="{{ route('admin.skills.create') }}" class="mt-4 inline-block btn btn-outline-dark">
                                İlk Skill'i Ekle
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
