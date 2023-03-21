<?php

use App\Models\Expansion;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personality', function (Blueprint $table) {
            $table->id();
            // $table->foreignIdFor(Expansion::class,'expansion_id')
            // ->nullable()
            // ->constrained('expansions')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');
        $table->string('name')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personality');
    }
};
