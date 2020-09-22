<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('_head')

<body class="flex flex-col flex-grow min-h-screen">
<div id="app" class="w-full flex-grow">
    @include('_nav')

    <main class="pr-4 sm:pr-6 lg:pr-8 pl-4 sm:pl-6 lg:pl-8 py-4 max-w-7xl">

        @if (session('status-success'))
            <div class="mb-4 bg-green-100 border-l-4 border border-green-400 text-green-700 p-4" role="alert">
                {{ session('status-success') }}
            </div>
        @endif

        @if (session('status-failure'))
            <div class="mb-4 bg-orange-100 border-l-4 border border-orange-500 text-orange-700 p-4" role="alert">
                {{ session('status-failure') }}
            </div>
        @endif

        @yield('content')

    </main>

</div>

@include('_footer')
</body>
</html>
