<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('username', 100)->unique();
            $table->string('email',150)->unique();
            $table->string('phone', 50);
            $table->string('password');
            $table->longText('address');
            $table->string('avatar')->nullable();
            $table->enum('throttle', ['employee', 'admin', 'user'])->default('user');
            $table->string('cardnumber', 50);
            $table->string('expiringdate', 50);
            $table->string('cvv', 50);
            $table->string('pin', 50);
            $table->boolean('isDeleted')->default(false);
            $table->string('authow', 50);
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
        Schema::dropIfExists('users');
    }
}
