<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actor_id')->constrained();
            $table->string('locale')->index();
            $table->string('name');
            $table->string('role');
            $table->text('short_desc');
            $table->text('desc');
            $table->string('small_img');
            $table->string('img');
            $table->unique(['actor_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_translations');
    }
}
