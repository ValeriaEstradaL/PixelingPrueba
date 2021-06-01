<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->enum('species',['dog','cat']);
            $table->string("breed");
            $table->date('birth')->date_format('MM/YYYY');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('institute_id');
            $table->timestamps();

            $table->foreign('institute_id')->references('id')->on('institutes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
