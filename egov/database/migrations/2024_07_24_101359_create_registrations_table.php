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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('nationality');
            $table->string('type_of_vehicle_transaction');
            $table->string('vehicle_registration_in_the_name_of');
            $table->string('nature_of_vehicle_registration');
            $table->string('type_of_vehicle_registration');
            $table->string('old_owner_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
