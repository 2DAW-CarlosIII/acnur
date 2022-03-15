<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAcogidoIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acogidos', function (Blueprint $table) {
            $table->foreign('acogimiento')->references('acogido_id')->on('acogimientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('acogidos', function (Blueprint $table) {
            $table->dropForeign('acogidos_acogimiento_foreing');
        });
    }
}
