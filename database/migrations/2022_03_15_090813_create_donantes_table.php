<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donantes', function (Blueprint $table) {
            $table->id();
            $table->char('name',50)->nullable();
            $table->char('name1',50)->nullable();
            $table->char('name2',50)->nullable();
            $table->char('email',50)->nullable();
            $table->char('mobile',50)->nullable();
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
        Schema::dropIfExists('donantes');
    }
}
