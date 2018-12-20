<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class CreateShopTable
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

        Capsule::schema()->create('shop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
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
        Capsule::schema()->dropIfExists('shop');
    }
}
