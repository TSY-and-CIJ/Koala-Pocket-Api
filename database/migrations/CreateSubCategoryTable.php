<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class CreateSubCategoryTable
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up($force = false)
    {
        if ($force) {
            $this->down();
        }

        Capsule::schema()->create('sub_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('main_category_id');
            $table->string('name');
            $table->integer('icon_id')->nullable();
            $table->integer('created_at')->nullable();
            $table->integer('updated_at')->nullable();
            $table->integer('deleted_at')->nullable();
            $table->foreign('main_category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Capsule::schema()->dropIfExists('sub_category');
    }
}
