<aside class="dashboard-sidebar w-64 bg-white shadow-lg fixed top-16 h-[calc(100vh-4rem)] transition-transform duration-300 z-50 overflow-y-auto">
    <div class="p-6 border-b border-gray-200">
        <p class="text-sm text-gray-600 font-medium">Tenant Portal</p>
    </div>

    <nav class="p-4">
        <a href="/customer-dashboard" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 {{ request()->is('customer-dashboard') ? 'active' : '' }}">
            <span class="font-medium">Dashboard</span>
        </a>
        <a href="/browse" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700 {{ request()->is('browse') ? 'active' : '' }}">
            <span class="font-medium">Browse Properties</span>
        </a>
        <a href="/customer/saved" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700 {{ request()->is('customer/saved') ? 'active' : '' }}">
            <span class="font-medium">Saved Properties</span>
            <span class="ml-auto bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded-full">8</span>
        </a>
        <a href="/customer/viewings" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700 {{ request()->is('customer/viewings') ? 'active' : '' }}">
            <span class="font-medium">My Viewings</span>
            <span class="ml-auto bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full">2</span>
        </a>
        <a href="/customer/apply" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700 {{ request()->is('customer/apply') ? 'active' : '' }}">
            <span class="font-medium">Applications</span>
        </a>
        <a href="/messages" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700 {{ request()->is('messages') ? 'active' : '' }}">
            <span class="font-medium">Messages</span>
            <span class="ml-auto bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full">4</span>
        </a>
        <div class="border-t border-gray-200 mt-6 pt-6">
            <a href="/profile" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700 {{ request()->is('profile') ? 'active' : '' }}">
                <span class="font-medium">Settings</span>
            </a>
            <form method="POST" action="{{ route('auth.logout') }}">
                @csrf
                <button type="submit" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 w-full text-left">
                    <span class="font-medium">Sign out</span>
                </button>
            </form>
        </div>
    </nav>
</aside>
