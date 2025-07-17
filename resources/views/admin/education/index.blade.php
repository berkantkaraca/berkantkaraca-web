<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Eğitim Yönetimi') }}
            </h2>
            <a href="{{ route('admin.education.create') }}" class="btn btn-outline-dark">
                Yeni Eğitim Ekle
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

                    @if($educations->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="py-2 px-4 border-b text-left">Kurum</th>
                                        <th class="py-2 px-4 border-b text-left">Derece</th>
                                        <th class="py-2 px-4 border-b text-left">Bölüm</th>
                                        <th class="py-2 px-4 border-b text-left">Tarih</th>
                                        <th class="py-2 px-4 border-b text-left">Konum</th>
                                        <th class="py-2 px-4 border-b text-left">Durum</th>
                                        <th class="py-2 px-4 border-b text-left">Sıra</th>
                                        <th class="py-2 px-4 border-b text-left">İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($educations as $education)
                                        <tr class="hover:bg-gray-50">
                                            <td class="py-2 px-4 border-b">{{ $education->institution_name }}</td>
                                            <td class="py-2 px-4 border-b">{{ $education->degree }}</td>
                                            <td class="py-2 px-4 border-b">{{ $education->field_of_study }}</td>
                                            <td class="py-2 px-4 border-b">{{ $education->start_date }} - {{ $education->end_date }}</td>
                                            <td class="py-2 px-4 border-b">{{ $education->location }}</td>
                                            <td class="py-2 px-4 border-b">
                                                <span class="px-2 py-1 text-xs rounded-full {{ $education->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                    {{ $education->is_active ? 'Aktif' : 'Pasif' }}
                                                </span>
                                            </td>
                                            <td class="py-2 px-4 border-b">{{ $education->sort_order }}</td>
                                            <td class="py-2 px-4 border-b">
                                                <div class="flex items-center space-x-2">
                                                    <a href="{{ route('admin.education.show', $education) }}" class="text-blue-600 hover:text-blue-800">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.education.edit', $education) }}" class="text-yellow-600 hover:text-yellow-800">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.education.destroy', $education) }}" method="POST" class="inline">
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
                            <p class="text-gray-500 text-lg">Henüz eğitim bilgisi eklenmemiş.</p>
                            <a href="{{ route('admin.education.create') }}" class="mt-4 inline-block btn btn-outline-dark">
                                İlk Eğitim Bilgisini Ekle
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
