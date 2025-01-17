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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('schooltype_id')->index();
            $table->unsignedBigInteger('photo_id')->index();
            $table->string('title');
            $table->decimal('price', 8, 2)->default(0);
            $table->text('description');
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('schooltype_id')->references('id')->on('schooltypes');
            $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade');
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
