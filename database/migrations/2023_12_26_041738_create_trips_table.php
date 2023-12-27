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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bus_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('route_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('departure_location_id')->constrained('locations')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('destination_location_id')->constrained('locations')->cascadeOnUpdate()->cascadeOnDelete();

            $table->time('departure_time');
            $table->time('arrival_time');

            $table->json('available_days');
            $table->tinyInteger('status')->default(\App\Enums\Status::DRAFT->value);
            $table->decimal('price')->default(0);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if(Schema::hasTable('trips')) {
            Schema::table('trips', function(Blueprint $table) {
                $table->dropForeign(['bus_id']);
                $table->dropForeign(['route_id']);
                $table->dropForeign(['departure_location_id']);
                $table->dropForeign(['destination_location_id']);
                $table->dropIfExists();
            });
        };
        Schema::dropIfExists('trips');
    }
};
