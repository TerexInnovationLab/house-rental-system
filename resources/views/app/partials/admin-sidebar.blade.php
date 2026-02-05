<aside class="dashboard-sidebar w-64 bg-white shadow-lg fixed top-16 h-[calc(100vh-4rem)] transition-transform duration-300 z-50">
    <div class="p-6 border-b border-gray-200">
        <p class="text-sm text-gray-600 font-medium">Admin Portal</p>
    </div>

    <nav class="p-4">
        <a href="/admin-dashboard" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2">
            <span class="font-medium">Overview</span>
        </a>
        <a href="#users" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700">
            <span class="font-medium">Users</span>
            <span class="ml-auto bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded-full">2.4K</span>
        </a>
        <a href="#properties" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700">
            <span class="font-medium">Properties</span>
            <span class="ml-auto bg-amber-100 text-amber-700 text-xs px-2 py-1 rounded-full">12</span>
        </a>
        <a href="#disputes" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700">
            <span class="font-medium">Disputes</span>
            <span class="ml-auto bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full">3</span>
        </a>
        <div class="border-t border-gray-200 mt-6 pt-6">
            <a href="/profile" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700">
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
