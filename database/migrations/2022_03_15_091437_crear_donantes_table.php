<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearDonantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donantes', function($table)
        {
            $table->bigInteger('id')->primary();
            $table->char('donation_personal_name', 50);
            $table->char('donation_personal_last_name1', 50);
            $table->char('donation_personal_last_name2', 50);
            $table->char('donation_personal_email', 50);
            $table->char('donation_personal_Mobile', 50);
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
