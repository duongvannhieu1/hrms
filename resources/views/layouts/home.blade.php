@extends('layouts.master')

<body class="theme-blue">
    
    @include('layouts.header');

    @include('layouts_left.infor_user');

    @include('layouts_left.menu');

    @yield('content');
</body>


