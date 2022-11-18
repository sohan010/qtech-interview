<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('city')->nullable();
            $table->string('birthday')->nullable();
            $table->string('phone')->nullable();
            $table->integer('age')->nullable();
            $table->boolean('gender')->default(0);
            $table->double('income')->nullable();
            $table->boolean('status')->default(1);
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('city');
            $table->dropColumn('birthday');
            $table->dropColumn('phone');
            $table->dropColumn('age');
            $table->dropColumn('gender');
            $table->dropColumn('income');
            $table->dropColumn('status');
        });
    }
};
