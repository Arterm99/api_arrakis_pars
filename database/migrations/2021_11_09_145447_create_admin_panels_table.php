<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminPanelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_panels', function (Blueprint $table) {
            $table->id();

                    // Добавляем в БД
                    $table->string('company');
                    $table->string('name');
                    $table->string('login');
                    $table->text('description');
                    $table->string('product');
                    $table->string('price');
                    $table->string('weght')->nullable();;
                    $table->string('category');
                    // $table->json('properties');
                    $table->string('profile_image');

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
        Schema::dropIfExists('admin_panels');
    }
}
