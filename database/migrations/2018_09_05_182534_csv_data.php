<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CsvData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CsvData', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Description', '200')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('Name', '200')->charset('utf8')->collation('utf8_unicode_ci');
            $table->integer('Amount');
            $table->decimal('Price');
            $table->string('Category', '50');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
