<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegacyPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legacy_posts', function (Blueprint $table) {
            $table->increments('id',16);
		    $table->bigInteger('post_author')->unsigned()->default(0);
            $table->longText('post_content')->nullable()->default(NULL);
            $table->text('post_title')->nullable()->default(NULL);
            $table->string('post_status',20)->default('publish');
            $table->string('post_name',200)->default('');
            $table->string('post_type',128)->default('post');
            $table->integer('post_parent')->default(0);
            $table->integer('post_order')->default(0);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legacy_posts');
    }
}
