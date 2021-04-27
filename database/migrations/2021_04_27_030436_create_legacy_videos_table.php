<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegacyVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legacy_videos', function (Blueprint $table) {
            $table->increments('id',8);
            $table->integer('user_id');
            $table->string('category',32);
            $table->integer('topic_id');
            $table->text('topic');
            $table->text('sub_topic');
            $table->integer('topic_order');
            $table->text('link');
            $table->string('status',32);
            $table->string('duration',32);
            $table->dateTime('created_at')->nullable()->default(NULL);
            $table->dateTime('updated_at')->nullable()->default(NULL);
            $table->dateTime('deleted_at')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legacy_videos');
    }
}
