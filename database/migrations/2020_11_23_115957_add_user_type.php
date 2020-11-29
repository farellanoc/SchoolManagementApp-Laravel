<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('surname')->after('name')->default('');
            $table->string('telephone')->after('surname')->default('');
            $table->string('nif')->after('telephone')->default('');
            $table->integer('type')->default(3);
            //php artisan migrate --path=/database/migrations/2020_11_23_115957_add_type.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('telephone');
            $table->dropColumn('nif');
            $table->dropColumn('type');
        });
    }
}
