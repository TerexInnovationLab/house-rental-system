<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('amenities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name', 50)->unique();
        });

        Schema::create('properties', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('landlord_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title', 150);
            $table->text('description')->nullable();
            $table->decimal('rent', 10, 2);
            $table->decimal('deposit', 10, 2)->nullable();
            $table->string('location', 150)->nullable();
            $table->integer('bedrooms')->nullable();
            $table->date('availability_date')->nullable();
            $table->enum('status', ['available', 'occupied', 'inactive'])->default('available');
            $table->timestamps();
        });

        Schema::create('landlord_profiles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreignId('landlord_id')->primary()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('verification_status', ['pending', 'verified', 'rejected'])->default('pending');
        });

        Schema::create('customer_profiles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreignId('customer_id')->primary()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('preferred_location', 100)->nullable();
            $table->decimal('budget', 10, 2)->nullable();
        });

        Schema::create('property_amenities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreignId('property_id')->constrained('properties')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('amenity_id')->constrained('amenities')->cascadeOnDelete()->cascadeOnUpdate();
            $table->primary(['property_id', 'amenity_id']);
        });

        Schema::create('property_photos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('property_id')->constrained('properties')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('photo_url');
        });

        Schema::create('favorites', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreignId('customer_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('property_id')->constrained('properties')->cascadeOnDelete()->cascadeOnUpdate();
            $table->primary(['customer_id', 'property_id']);
        });

        Schema::create('applications', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('property_id')->constrained('properties')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('customer_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('status', ['submitted', 'under_review', 'approved', 'declined'])->default('submitted');
            $table->timestamp('applied_at')->useCurrent();
        });

        Schema::create('leases', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('application_id')->unique()->constrained('applications')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('rent', 10, 2)->nullable();
            $table->string('lease_document')->nullable();
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('lease_id')->constrained('leases')->cascadeOnDelete()->cascadeOnUpdate();
            $table->decimal('amount', 10, 2);
            $table->date('payment_date')->nullable();
            $table->enum('payment_type', ['rent', 'deposit'])->nullable();
            $table->enum('status', ['paid', 'pending', 'late'])->default('pending');
        });

        Schema::create('maintenance_requests', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('property_id')->constrained('properties')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('customer_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('description');
            $table->enum('status', ['open', 'in_progress', 'completed'])->default('open');
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('messages', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('sender_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('receiver_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('message');
            $table->timestamp('sent_at')->useCurrent();
        });

        Schema::create('notifications', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('message')->nullable();
            $table->boolean('is_read')->default(false);
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('property_id')->constrained('properties')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('customer_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('rating')->nullable();
            $table->text('comment')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('viewings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('property_id')->constrained('properties')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('customer_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->dateTime('viewing_date');
            $table->enum('status', ['requested', 'confirmed', 'declined', 'completed'])->default('requested');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viewings');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('notifications');
        Schema::dropIfExists('messages');
        Schema::dropIfExists('maintenance_requests');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('leases');
        Schema::dropIfExists('applications');
        Schema::dropIfExists('favorites');
        Schema::dropIfExists('property_photos');
        Schema::dropIfExists('property_amenities');
        Schema::dropIfExists('customer_profiles');
        Schema::dropIfExists('landlord_profiles');
        Schema::dropIfExists('properties');
        Schema::dropIfExists('amenities');
    }
};
