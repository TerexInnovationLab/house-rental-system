<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Property;
use App\Models\Application;
use App\Models\MaintenanceRequest;
use App\Models\Payment;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users' => User::count(),
            'total_landlords' => User::whereHas('role', function ($query) {
                $query->where('name', 'landlord');
                // or: ->where('name', '=', 'Customer');
                // or: ->where('slug', 'customer');
            })->count(),

            'total_customers' => User::whereHas('role', function ($query) {
                $query->where('name', 'Customer');
            })->count(),

            'total_properties' => Property::count(),
            'available_properties' => Property::where('status', 'available')->count(),
            'occupied_properties' => Property::where('status', 'occupied')->count(),

            'applications' => Application::count(),
            'pending_applications' => Application::where('status', 'under_review')->count(),
            'approved_applications' => Application::where('status', 'approved')->count(),
            'rejected_applications' => Application::where('status', 'rejected')->count(),
            'open_maintenance_requests' => MaintenanceRequest::where('status', 'open')->count(),

            'total_revenue' => Payment::where('status', 'paid')->sum('amount')
        ];

        $recent_properties = Property::latest()->take(5)->get();
        $pending_properties = Property::where('status', 'pending')->latest()->take(5)->get();
        $recent_users = User::latest()->take(5)->get();

        return view('app.admin-dashboard', [
            'stats' => $stats,
            'recent_properties' => $recent_properties,
            'recent_users' => $recent_users,
            'pending_properties' => $pending_properties,
        ]);
    }

    public function users()
    {
        $stats = [
            'total_users' => User::count(),
            'total_landlords' => User::whereHas('role', function ($query) {
                $query->where('name', 'landlord');
            })->count(),

            'total_customers' => User::whereHas('role', function ($query) {
                $query->where('name', 'Customer');
            })->count(),
        ];

        $recent_users = User::latest()->get();

        return view('app.admin-users', [
            'stats' => $stats,
            'recent_users' => $recent_users,
        ]);
    }

    public function properties()
    {
        $stats = [
            'total_properties' => Property::count(),
            'available_properties' => Property::where('status', 'available')->count(),
            'occupied_properties' => Property::where('status', 'occupied')->count(),
        ];

        $recent_properties = Property::latest()->get();
        $pending_properties = Property::where('status', 'pending')->latest()->get();

        return view('app.admin-properties', [
            'stats' => $stats,
            'recent_properties' => $recent_properties,
            'pending_properties' => $pending_properties,
        ]);
    }

    public function disputes()
    {
        return view('app.admin-disputes');
    }
}
