<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - MyStudents</title>

    {{-- Style --}}
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</head>
<body>
    
    <main>
        @include('includes.navbar')
        @yield('content')
    </main>

    {{-- Script --}}
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

</body>
</html>