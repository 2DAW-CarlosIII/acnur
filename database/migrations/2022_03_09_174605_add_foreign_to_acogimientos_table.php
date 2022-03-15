<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToAcogimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acogimientos', function (Blueprint $table) {
            $table->foreign('acogido_id')->references('id')->on('acogidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('acogimientos', function (Blueprint $table) {
            $table->dropForeign('acogimientos_acogido_id_foreign');
        });
    }
}
