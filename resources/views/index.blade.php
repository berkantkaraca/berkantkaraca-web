<!DOCTYPE html>
<html lang="tr-TR">

@include('partials.head')

<body id="top">

  @include('partials.header')

  <!-- @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                @if(Auth::user()->role === 'ADMIN')
                    <a href="{{ route('admin.dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Admin Dashboard</a>
                @else
                    <a href="{{ url('/') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Ana Sayfa</a>
                @endif
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif -->
  <div class="page-content">
    <div id="content">

      @include('partials.banner')
  
      @include('partials.about')

      @include('partials.education')
  
      @include('partials.skills')
  
      @include('partials.experience')
  
      @include('partials.portfolio')

      @include('partials.certificate')
  
      @include('partials.contact')

    </div>
  </div>
  
  @include('partials.footer')
  
  @include('partials.scripts')
  
</body>
</html>
