<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewslatterTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newslatter_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('newslatter_id')->constrained();
            $table->string('locale')->index();
            $table->string('title');
            $table->text('text');
            $table->date('date');
            $table->unique(['newslatter_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newslatter_translations');
    }
}
