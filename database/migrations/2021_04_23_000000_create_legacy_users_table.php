<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegacyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legacy_users', function (Blueprint $table) {
		    $table->integer('id',16);
		    $table->string('firstname')->nullable()->default('NULL');
		    $table->string('lastname')->nullable()->default('NULL');
		    $table->string('fullname');
		    $table->string('username',64)->nullable()->default('NULL');
		    $table->string('password')->default('');
		    $table->string('email',64)->nullable()->default('NULL');
		    $table->string('activation_key')->default('');
		    $table->string('status',32)->default('0');
		    $table->string('group',32);
		    $table->text('remember_token')->nullable()->default('NULL');
		    $table->text('forgot_password_token')->nullable()->default('NULL');
		    $table->text('verify_token')->nullable()->default('NULL');
		    $table->datetime('created_at');
		    $table->datetime('updated_at');
		    $table->timestamp('deleted_at')->nullable()->default('NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legacy_users');
    }
}
