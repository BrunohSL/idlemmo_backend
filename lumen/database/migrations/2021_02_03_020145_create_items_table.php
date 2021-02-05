<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {
    public function up() {
        Schema::create('items', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->unsignedInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types');
            $table->integer('attack');
            $table->integer('defense');
            $table->integer('hp');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::table('items')->insert(
            array(
                array(
                    'name' => 'Wooden Sword',
                    'type_id' => 1,
                    'attack' => 3,
                    'defense' => 0,
                    'hp' => 0,
                ),
                array(
                    'name' => 'Wooden Shield',
                    'type_id' => 1,
                    'attack' => 3,
                    'defense' => 0,
                    'hp' => 0,
                ),
                array(
                    'name' => 'Wooden Staff',
                    'type_id' => 1,
                    'attack' => 3,
                    'defense' => 0,
                    'hp' => 0,
                ),
                array(
                    'name' => 'Wooden Bow',
                    'type_id' => 1,
                    'attack' => 3,
                    'defense' => 0,
                    'hp' => 0,
                ),
                array(
                    'name' => 'Wooden Shield',
                    'type_id' => 2,
                    'attack' => 0,
                    'defense' => 5,
                    'hp' => 0,
                ),
                array(
                    'name' => 'Wooden Helmet',
                    'type_id' => 3,
                    'attack' => 0,
                    'defense' => 4,
                    'hp' => 0,
                ),
                array(
                    'name' => 'Wooden Armor',
                    'type_id' => 4,
                    'attack' => 0,
                    'defense' => 5,
                    'hp' => 0,
                ),
                array(
                    'name' => 'Wooden Gloves',
                    'type_id' => 5,
                    'attack' => 0,
                    'defense' => 2,
                    'hp' => 0,
                ),
                array(
                    'name' => 'Wooden Pants',
                    'type_id' => 6,
                    'attack' => 0,
                    'defense' => 4,
                    'hp' => 0,
                ),
                array(
                    'name' => 'Wooden Boots',
                    'type_id' => 7,
                    'attack' => 0,
                    'defense' => 2,
                    'hp' => 0,
                ),
                array(
                    'name' => 'Wooden Ring',
                    'type_id' => 8,
                    'attack' => 0,
                    'defense' => 0,
                    'hp' => 10,
                ),
            )
        );
    }

    public function down() {
        Schema::drop('items');
    }
}
