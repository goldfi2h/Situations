<?php

use App\Models\Tag;
use App\Models\Situation;
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
        Schema::create('situation_tag', function (Blueprint $table) {
            $table->foreignIdFor(Situation::class, 'situation_id')
                ->constrained('situations')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignIdFor(Tag::class, 'tag_id')
                ->constrained('tags')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('situation_tag');
    }
};
