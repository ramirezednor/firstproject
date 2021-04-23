<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegacyPostmetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legacy_postmeta', function (Blueprint $table) {
		    $table->bigInteger('id',20)->unsigned();
		    $table->bigInteger('post_id',20)->unsigned()->default('0');
		    $table->string('meta_key')->nullable()->default('NULL');
		    $table->text('meta_value')->nullable()->default('NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legacy_postmeta');
    }
}
