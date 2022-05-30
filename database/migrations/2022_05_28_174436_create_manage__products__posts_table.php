<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageProductsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage__products__posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mrp');
            $table->string('price');
            $table->string('qty');
            $table->string('img_name');
            $table->string('img_path');
            $table->string('short_desc');
            $table->string('description');
            $table->string('meta_title');
            $table->string('meta_desc');
            $table->string('meta_keyword');
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
        Schema::dropIfExists('manage__products__posts');
    }
}
