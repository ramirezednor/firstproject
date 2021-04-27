<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegacyUsermetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legacy_usermeta', function (Blueprint $table) {
            $table->bigIncrements('id');
		    $table->bigInteger('user_id')->unsigned()->default(0);
		    $table->string('meta_key')->nullable()->default(NULL);
		    $table->longText('meta_value')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legacy_usermeta');
    }
}
