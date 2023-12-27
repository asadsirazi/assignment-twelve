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
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('departure_location_id')->constrained('locations')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('destination_location_id')->constrained('locations')->cascadeOnUpdate()->cascadeOnDelete();

            //$table->json('stoppages')->nullable();

            $table->tinyInteger('status')->default(\App\Enums\Status::DRAFT->value);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if(Schema::hasTable('routes')) {
            Schema::table('routes', function(Blueprint $table) {
               $table->dropForeign(['departure_location_id']);
               $table->dropForeign(['destination_location_id']);
               $table->dropIfExists();
            });
        };
    }
};
