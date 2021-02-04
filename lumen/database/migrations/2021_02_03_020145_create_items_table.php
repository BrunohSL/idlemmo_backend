<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {
    public function up() {
        Schema::create('items', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 30);
            // $table->string('price', 10);
            $table->string('type', 20);
            $table->integer('tier');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down() {
        Schema::drop('items');
    }
}
