<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('id_list', 10)->nullable();
            $table->string('id_cat', 10)->nullable();
            $table->string('id_item', 10)->nullable();
            $table->string('id_sub', 10)->nullable();
            $table->string('photo', 255)->nullable();
            $table->string('photo1', 255)->nullable();
            $table->string('photo2', 255)->nullable();
            $table->string('namevi', 255)->nullable();
            $table->string('nameen', 255)->nullable();
            $table->string('code', 30)->nullable();
            $table->double('price_old')->nullable();
            $table->double('price_new')->nullable();
            $table->double('discount')->nullable();
            $table->mediumText('options')->nullable();
            $table->string('slugvi', 255)->nullable();
            $table->string('slugen', 255)->nullable();
            $table->mediumText('descvi')->nullable();
            $table->mediumText('descen')->nullable();
            $table->mediumText('contentvi')->nullable();
            $table->mediumText('contenten')->nullable();
            $table->string('numb', 10)->nullable();
            $table->string('status', 10)->nullable();
            $table->string('type', 30)->nullable();
            $table->string('view', 10)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
