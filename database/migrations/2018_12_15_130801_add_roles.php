<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('admins', function($table) {
        $table->string('roles');
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    Schema::table('admins', function($table) {
        $table->dropColumn('roles');
    });
}
}
