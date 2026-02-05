<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DemoDataSeeder extends Seeder
{
    /**
     * Seed demo data for local development.
     */
    public function run(): void
    {
        $now = now();

        $roles = DB::table('roles')->pluck('id', 'name');

        $users = [
            [
                'role_id' => $roles['admin'],
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'email_verified_at' => $now,
                'phone' => '555-0100',
                'password' => Hash::make('password'),
                'status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'role_id' => $roles['landlord'],
                'name' => 'Lana Landlord',
                'email' => 'lana@example.com',
                'email_verified_at' => $now,
                'phone' => '555-0111',
                'password' => Hash::make('password'),
                'status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'role_id' => $roles['landlord'],
                'name' => 'Leo Landlord',
                'email' => 'leo@example.com',
                'email_verified_at' => $now,
                'phone' => '555-0112',
                'password' => Hash::make('password'),
                'status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'role_id' => $roles['customer'],
                'name' => 'Cathy Customer',
                'email' => 'cathy@example.com',
                'email_verified_at' => $now,
                'phone' => '555-0201',
                'password' => Hash::make('password'),
                'status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'role_id' => $roles['customer'],
                'name' => 'Chris Customer',
                'email' => 'chris@example.com',
                'email_verified_at' => $now,
                'phone' => '555-0202',
                'password' => Hash::make('password'),
                'status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('users')->insert($users);

        $userIds = DB::table('users')
            ->whereIn('email', ['admin@example.com', 'lana@example.com', 'leo@example.com', 'cathy@example.com', 'chris@example.com'])
            ->pluck('id', 'email');

        DB::table('landlord_profiles')->insert([
            [
                'landlord_id' => $userIds['lana@example.com'],
                'verification_status' => 'verified',
            ],
            [
                'landlord_id' => $userIds['leo@example.com'],
                'verification_status' => 'pending',
            ],
        ]);

        DB::table('customer_profiles')->insert([
            [
                'customer_id' => $userIds['cathy@example.com'],
                'preferred_location' => 'Downtown',
                'budget' => 1200.00,
            ],
            [
                'customer_id' => $userIds['chris@example.com'],
                'preferred_location' => 'Riverside',
                'budget' => 950.00,
            ],
        ]);

        DB::table('amenities')->insert([
            ['name' => 'Parking'],
            ['name' => 'Gym'],
            ['name' => 'Pool'],
            ['name' => 'WiFi'],
            ['name' => 'Security'],
        ]);

        $amenityIds = DB::table('amenities')->pluck('id', 'name');

        DB::table('properties')->insert([
            [
                'landlord_id' => $userIds['lana@example.com'],
                'title' => 'Modern Loft Downtown',
                'description' => 'Bright, open-plan loft with city views.',
                'rent' => 1350.00,
                'deposit' => 1350.00,
                'location' => 'Downtown',
                'bedrooms' => 2,
                'availability_date' => $now->copy()->addDays(10)->toDateString(),
                'status' => 'available',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'landlord_id' => $userIds['lana@example.com'],
                'title' => 'Cozy Studio Near Park',
                'description' => 'Quiet studio with balcony and park access.',
                'rent' => 900.00,
                'deposit' => 900.00,
                'location' => 'Riverside',
                'bedrooms' => 1,
                'availability_date' => $now->copy()->addDays(5)->toDateString(),
                'status' => 'available',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'landlord_id' => $userIds['leo@example.com'],
                'title' => 'Family Home with Garden',
                'description' => '3-bedroom home with large backyard.',
                'rent' => 1600.00,
                'deposit' => 1600.00,
                'location' => 'Hillview',
                'bedrooms' => 3,
                'availability_date' => $now->copy()->addDays(20)->toDateString(),
                'status' => 'available',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

        $propertyIds = DB::table('properties')->pluck('id', 'title');

        DB::table('property_amenities')->insert([
            ['property_id' => $propertyIds['Modern Loft Downtown'], 'amenity_id' => $amenityIds['Parking']],
            ['property_id' => $propertyIds['Modern Loft Downtown'], 'amenity_id' => $amenityIds['Gym']],
            ['property_id' => $propertyIds['Modern Loft Downtown'], 'amenity_id' => $amenityIds['WiFi']],
            ['property_id' => $propertyIds['Cozy Studio Near Park'], 'amenity_id' => $amenityIds['Parking']],
            ['property_id' => $propertyIds['Cozy Studio Near Park'], 'amenity_id' => $amenityIds['Security']],
            ['property_id' => $propertyIds['Family Home with Garden'], 'amenity_id' => $amenityIds['Pool']],
            ['property_id' => $propertyIds['Family Home with Garden'], 'amenity_id' => $amenityIds['Security']],
        ]);

        DB::table('property_photos')->insert([
            ['property_id' => $propertyIds['Modern Loft Downtown'], 'photo_url' => '/images/properties/loft-1.jpg'],
            ['property_id' => $propertyIds['Modern Loft Downtown'], 'photo_url' => '/images/properties/loft-2.jpg'],
            ['property_id' => $propertyIds['Cozy Studio Near Park'], 'photo_url' => '/images/properties/studio-1.jpg'],
            ['property_id' => $propertyIds['Family Home with Garden'], 'photo_url' => '/images/properties/home-1.jpg'],
        ]);

        DB::table('favorites')->insert([
            [
                'customer_id' => $userIds['cathy@example.com'],
                'property_id' => $propertyIds['Modern Loft Downtown'],
            ],
            [
                'customer_id' => $userIds['chris@example.com'],
                'property_id' => $propertyIds['Cozy Studio Near Park'],
            ],
        ]);

        DB::table('applications')->insert([
            [
                'property_id' => $propertyIds['Modern Loft Downtown'],
                'customer_id' => $userIds['cathy@example.com'],
                'status' => 'approved',
                'applied_at' => $now->copy()->subDays(3),
            ],
            [
                'property_id' => $propertyIds['Cozy Studio Near Park'],
                'customer_id' => $userIds['chris@example.com'],
                'status' => 'submitted',
                'applied_at' => $now->copy()->subDays(1),
            ],
        ]);

        $applicationIds = DB::table('applications')->pluck('id', 'property_id');

        DB::table('leases')->insert([
            [
                'application_id' => $applicationIds[$propertyIds['Modern Loft Downtown']],
                'start_date' => $now->copy()->addDays(15)->toDateString(),
                'end_date' => $now->copy()->addMonths(12)->toDateString(),
                'rent' => 1350.00,
                'lease_document' => '/leases/lease-1001.pdf',
            ],
        ]);

        $leaseId = DB::table('leases')->value('id');

        DB::table('payments')->insert([
            [
                'lease_id' => $leaseId,
                'amount' => 1350.00,
                'payment_date' => $now->copy()->addDays(15)->toDateString(),
                'payment_type' => 'deposit',
                'status' => 'paid',
            ],
            [
                'lease_id' => $leaseId,
                'amount' => 1350.00,
                'payment_date' => $now->copy()->addDays(30)->toDateString(),
                'payment_type' => 'rent',
                'status' => 'pending',
            ],
        ]);

        DB::table('maintenance_requests')->insert([
            [
                'property_id' => $propertyIds['Modern Loft Downtown'],
                'customer_id' => $userIds['cathy@example.com'],
                'description' => 'Leaky faucet in the kitchen.',
                'status' => 'open',
                'created_at' => $now->copy()->subDay(),
            ],
        ]);

        DB::table('messages')->insert([
            [
                'sender_id' => $userIds['cathy@example.com'],
                'receiver_id' => $userIds['lana@example.com'],
                'message' => 'Hi, I submitted an application. Can we schedule a viewing?',
                'sent_at' => $now->copy()->subHours(3),
            ],
            [
                'sender_id' => $userIds['lana@example.com'],
                'receiver_id' => $userIds['cathy@example.com'],
                'message' => 'Absolutely! How about Saturday at 2pm?',
                'sent_at' => $now->copy()->subHours(2),
            ],
        ]);

        DB::table('notifications')->insert([
            [
                'user_id' => $userIds['cathy@example.com'],
                'message' => 'Your application for Modern Loft Downtown was approved.',
                'is_read' => false,
                'created_at' => $now->copy()->subHours(1),
            ],
            [
                'user_id' => $userIds['lana@example.com'],
                'message' => 'New maintenance request submitted.',
                'is_read' => false,
                'created_at' => $now->copy()->subHours(1),
            ],
        ]);

        DB::table('reviews')->insert([
            [
                'property_id' => $propertyIds['Modern Loft Downtown'],
                'customer_id' => $userIds['cathy@example.com'],
                'rating' => 5,
                'comment' => 'Loved the view and the neighborhood.',
                'created_at' => $now->copy()->subDays(2),
            ],
        ]);

        DB::table('viewings')->insert([
            [
                'property_id' => $propertyIds['Cozy Studio Near Park'],
                'customer_id' => $userIds['chris@example.com'],
                'viewing_date' => $now->copy()->addDays(2),
                'status' => 'requested',
            ],
        ]);
    }
}
