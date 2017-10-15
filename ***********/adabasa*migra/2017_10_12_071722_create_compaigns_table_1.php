<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaignswwwTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compaigns', function (Blueprint $table) {
            $table->increments('id_compaigns');
            $table->integer('user_id')->nullable();
            $table->string('name_compaigns')->nullable();
            $table->integer('templates_id')->nullable()->unsigned();//id 
            $table->integer('bunches_id')->nullable()->unsigned();//id
            $table->integer('status');
            $table->string('description_compaigns')->nullable();
            $table->timestamps();//->nullable();
            $table->softDeletes();
            // $table->created_by = Auth::user()->username;//////////////////////////////////
           // $table->updated_by = Auth::user()->username;//
            ////////////////////////////////
            $table->foreign('templates_id')->references('id_templates')->on('templates');
            $table->foreign('bunches_id')->references('id_bunches')->on('bunches');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compaigns');
    }
}
