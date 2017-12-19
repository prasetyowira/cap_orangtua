<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('ot_admin_users', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('name');
		    $table->string('email')->unique();
		    $table->string('password');
		    $table->rememberToken();
		    $table->timestamps();
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('ot_admin_users');
    }
}
