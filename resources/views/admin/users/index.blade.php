<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kullanıcı Yönetimi') }}
            </h2>
            <a href="{{ route('admin.users.create') }}" class="btn btn-outline-dark">
                Yeni Kullanıcı Ekle
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

                    @if(session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="py-2 px-4 border-b text-left">ID</th>
                                    <th class="py-2 px-4 border-b text-left">İsim</th>
                                    <th class="py-2 px-4 border-b text-left">E-posta</th>
                                    <th class="py-2 px-4 border-b text-left">Rol</th>
                                    <th class="py-2 px-4 border-b text-left">Kayıt Tarihi</th>
                                    <th class="py-2 px-4 border-b text-left">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-2 px-4 border-b">{{ $user->id }}</td>
                                        <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                                        <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                                        <td class="py-2 px-4 border-b">
                                            <span class="px-2 py-1 text-xs rounded-full {{ $user->role === 'ADMIN' ? 'bg-red-100 text-red-800' : 'bg-blue-100 text-blue-800' }}">
                                                {{ $user->role === 'ADMIN' ? 'Yönetici' : 'Kullanıcı' }}
                                            </span>
                                        </td>
                                        <td class="py-2 px-4 border-b">{{ $user->created_at->format('d.m.Y H:i') }}</td>
                                        <td class="py-2 px-4 border-b">
                                            <div class="flex items-center space-x-2">
                                                <a href="{{ route('admin.users.show', $user) }}" class="text-blue-600 hover:text-blue-800">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.users.edit', $user) }}" class="text-yellow-600 hover:text-yellow-800">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                @if($user->id !== auth()->user()->id)
                                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Bu kullanıcıyı silmek istediğinizden emin misiniz?')">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="py-4 px-4 text-center text-gray-500 bg-gray-50">
                                            Henüz kullanıcı eklenmemiş.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    @if($users->hasPages())
                        <div class="mt-4">
                            {{ $users->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
