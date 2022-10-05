<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\ProductsGallery;

class CreateProductsgalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productsgallery', function (Blueprint $table) {
            $table->id('productgallery_id');
            $table->unsignedBigInteger('product_id');
            $table->string('image');
            $table->String('title');
            $table->String('description');
            $table->integer('money');
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
        Schema::dropIfExists('productsgallery');
    }
}
