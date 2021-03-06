<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bimo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    Schema::create('users', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('addres')->unique();
        $table->string('phone');
        $table->rememberToken();
        $table->timestamps();
    });
}
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
