@php
    $role = auth()->user()?->role?->name;
@endphp

@if ($role === 'admin')
    @include('app.partials.admin-sidebar')
@elseif ($role === 'landlord')
    @include('app.partials.landlord-sidebar')
@else
    @include('app.partials.customer-sidebar')
@endif
