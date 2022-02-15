<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduserTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produser_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produser_id')->constrained();
            $table->string('locale')->index();
            $table->string('name');
            $table->text('short_desc');
            $table->text('desc');
            $table->string('small_img');
            $table->string('img');
            $table->unique(['produser_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produser_translations');
    }
}
