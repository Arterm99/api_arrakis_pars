<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParsingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parsing', function (Blueprint $parsing) {
            $parsing->id();

                    // Добавляем в БД
                    $parsing->string('price')->nullable();
                    $parsing->string('product');
                    $parsing->string('url');
                    $parsing->string('url_product')->nullable();
                    $parsing->string('time');

            $parsing->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parsings');
    }
}
