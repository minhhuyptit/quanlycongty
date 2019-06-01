<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_contact', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('del_flag')->default(false);
            $table->integer('candidate_id')->unsigned();
            $table->integer('contact_id')->unsigned();
            $table->string('value');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('modified_by')->unsigned()->nullable();
            $table->foreign('candidate_id')->references('id')->on('candidate')->onUpdate('cascade');
            $table->foreign('contact_id')->references('id')->on('configuration')->onUpdate('cascade');
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
        Schema::dropIfExists('candidate_contact');
    }
}
