<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            //$table->string('password');
            //$table->rememberToken();
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('country');
            $table->boolean('coughing_sneezing');
            $table->boolean('fever');
            $table->boolean('breathingproblem');
            $table->boolean('sinus');
            $table->boolean('earpressure');
            $table->boolean('headache');
            $table->boolean('burning_eyes');
            $table->boolean('c_throat');
            $table->boolean('bodyache');
            $table->boolean('l_appetite');
            $table->boolean('t_chest');
            $table->boolean('jetlag');
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
        Schema::dropIfExists('users');
    }
}
