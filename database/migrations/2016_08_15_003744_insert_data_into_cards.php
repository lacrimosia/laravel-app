<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDataIntoCards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     /*   Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });*/

        // insert data here
        // Insert some stuff
        $data = array(
            array(
            'title' => 'shatilla Prayer',
            'created_at' => new DateTime
        ),array(
            'title' => 'Joan Westmorland',
            'created_at' => new DateTime
        )
            );
    DB::table('cards')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cards');
    }
}
