<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cid')->nullable();
            $table->string('dob')->nullable();
            $table->string('prefix');
            $table->string('sex');
            $table->string('name');
            $table->string('surname');
            $table->string('tel');
            $table->string('party_name')->nullable();
            $table->string('amphoe')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('comment')->nullable();
            $table->text('image_cid')->nullable();
            $table->integer('user_create_id')->unsigned()->nullable();
            $table->text('image_profile')->nullable();
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
        Schema::dropIfExists('accounts');
    }
}
