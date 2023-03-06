<?php

use App\Models\Entry;
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
        Schema::create('expansions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Entry::class, 'entry_id')
            ->constrained('entries')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expansions');
    }
};
