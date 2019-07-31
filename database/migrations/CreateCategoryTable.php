<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable
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

        Capsule::schema()->create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('icon_id')->nullable();
            $table->integer('created_at')->nullable();
            $table->integer('updated_at')->nullable();
            $table->integer('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Capsule::schema()->dropIfExists('category');
    }
}
