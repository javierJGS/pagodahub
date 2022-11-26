<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('closecashes', function (Blueprint $table) 
        {    
            $table->double('valeAmt', 8, 2)->nullable();
            $table->double('valeAmtFiscalizadora', 8, 2)->nullable();
            $table->double('valeAmtGerente', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('closecashes', function (Blueprint $table) {
            //
        });
    }
};
