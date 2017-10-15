<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBunchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bunches', function (Blueprint $table) {
            $table->increments('id_bunch');
            $table->integer('user_id')->nullable();

            $table->string('name_bunch')->nullable();
            $table->integer('subscriber_id')->nullable()->unsigned();//id 
            $table->string('description_bunch')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
            // out outtable!!!!!!!!!!!!!!!!! $table->foreign('subscriber_id')->references('id_subscriber')->on('subscribers');


            //$table->foreign('user_id')->references('id')->on('users');
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bunches');
    }
}
