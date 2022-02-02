<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // Foreing Key constraints:
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
        
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('movies', function(Blueprint $table){
            $table->dropForeign(['user_id']); // Distruzione del vincolo. 
            $table->dropColumn(['user_id']); // Distruzione della collona.
        });
    }
}
