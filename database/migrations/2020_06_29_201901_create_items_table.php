<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('detail');
            $table->double('price')->default('0');
            $table->bigInteger('category');
            $table->bigInteger('subcategory');
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('spec')->nullable();
            $table->string('condition')->nullable();

            $table->string('photo')->default('/img/itemavatar.png');
            $table->string('qnt')->default('1');

            $table->string('tags')->nullable();
            $table->string('badge')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('status')->default('0');
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
        Schema::dropIfExists('items');
    }
}
