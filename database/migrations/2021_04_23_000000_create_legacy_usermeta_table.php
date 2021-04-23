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
		    $table->bigInteger('id',20)->unsigned();
		    $table->bigInteger('user_id',20)->unsigned()->default('0');
		    $table->string('meta_key')->nullable()->default('NULL');
		    ->nullable()->default('NULL');
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
