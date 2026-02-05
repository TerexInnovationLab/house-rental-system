@extends('layouts.app')

@section('body_class', 'dashboard')

@section('content')
<div class="flex min-h-screen">
    <div class="dashboard-overlay hidden md:hidden fixed inset-0 bg-black/40 z-40"></div>
    @hasSection('sidebar')
        @yield('sidebar')
    @else
        @include('app.partials.role-sidebar')
    @endif

    <main class="flex-1 p-8 md:ml-64">
        @yield('dashboard')
    </main>
</div>
@endsection
