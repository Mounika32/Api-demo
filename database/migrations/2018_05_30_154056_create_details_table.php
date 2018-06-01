<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email_id');
            $table->string('mobile');
            $table->dateTime('dob');
            $table->string('city');
            $table->integer('loan_amount');
            $table->string('occupation');
            $table->integer('mon_income');
            $table->string('sal_rec');
            $table->string('sal_dep');
            $table->dateTime('dt_trans');
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
        Schema::drop('details');
    }
}
