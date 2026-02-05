<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showSignup()
    {
        return view('signup');
    }

    public function showSignin()
    {
        return view('signin');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:100', 'unique:users,email'],
            'phone' => ['nullable', 'string', 'max:20'],
            'role' => ['required', 'in:customer,landlord'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $roleId = Role::where('name', $validated['role'])->value('id');
        if (!$roleId) {
            return back()->withErrors(['role' => 'Selected role is not available.'])->withInput();
        }

        $user = User::create([
            'role_id' => $roleId,
            'name' => trim($validated['first_name'].' '.$validated['last_name']),
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'password' => Hash::make($validated['password']),
            'status' => 'active',
        ]);

        if ($validated['role'] === 'landlord') {
            DB::table('landlord_profiles')->insert([
                'landlord_id' => $user->id,
                'verification_status' => 'pending',
            ]);
        } else {
            DB::table('customer_profiles')->insert([
                'customer_id' => $user->id,
            ]);
        }

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        return back()
            ->withErrors(['email' => 'The provided credentials do not match our records.'])
            ->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function dashboard()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('signin');
        }

        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        }

        if ($user->hasRole('landlord')) {
            return redirect()->route('landlord.dashboard');
        }

        return redirect()->route('customer.dashboard');
    }
}
