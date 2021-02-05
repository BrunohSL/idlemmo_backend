<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration {
    public function up() {
        Schema::create('types', function(Blueprint $table) {
            $table->increments('id');
            $table->string('type', 30);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::table('types')->insert(
            array(
                array(
                    // 'id' => 1
                    'type' => 'Weapon',
                ),
                array(
                    // 'id' => 2
                    'type' => 'Shield',
                ),
                array(
                    // 'id' => 3
                    'type' => 'Helmet',
                ),
                array(
                    // 'id' => 4
                    'type' => 'Armor',
                ),
                array(
                    // 'id' => 5
                    'type' => 'Gloves',
                ),
                array(
                    // 'id' => 6
                    'type' => 'Pants',
                ),
                array(
                    // 'id' => 7
                    'type' => 'Boots',
                ),
                array(
                    // 'id' => 8
                    'type' => 'Ring',
                ),
            )
        );
    }

    public function down() {
        Schema::drop('types');
    }
}
